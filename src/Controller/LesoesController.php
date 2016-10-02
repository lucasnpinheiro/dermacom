<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Lesoes Controller
 *
 * @property \App\Model\Table\LesoesTable $Lesoes
 */
class LesoesController extends AppController {

    public $paginate = [
        'limit' => 100
    ];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $lesoes = $this->Lesoes->find()->all();
        $data = [];
        if (count($lesoes) > 0) {
            foreach ($lesoes as $key => $value) {
                $data[] = [
                    'lesao' => $value->nome,
                    'open' => false,
                    'classificacoes' => $this->classificacoes($value->id)
                ];
            }
        }
        $this->set('data', $data);
        $this->set('lesoesList', $lesoes);
    }

    private function classificacoes($id_lesao) {
        $this->loadModel('Classificacoes');
        $classificacoes = $this->Classificacoes->find()->where(['lesao_id' => $id_lesao])->all();
        $data = [];
        if (count($classificacoes) > 0) {
            foreach ($classificacoes as $key => $value) {
                $data[] = [
                    'classificacao' => $value->nome,
                    'open' => false,
                    'estagios' => $this->estagios($value->id)
                ];
            }
        }
        return $data;
    }

    private function estagios($id_classificacao) {
        $this->loadModel('Estagios');
        $estagio = $this->Estagios->find()
                ->where(['classificacao_id' => $id_classificacao])
                ->select([
                    'Estagios.codigo',
                    'Estagios.nome',
                    'Estagios.peso',
                    'Estagios.id',
                    'Estagios.classificacao_id',
                    'Estagios.lesao_id',
                    'lesao' => 'Lesoes.nome',
                    'classificacao' => 'Classificacoes.nome',
                ])
                ->join([
                    'table' => 'lesoes',
                    'alias' => 'Lesoes',
                    'type' => 'INNER',
                    'conditions' => 'Lesoes.id = Estagios.lesao_id',
                ])
                ->join([
                    'table' => 'classificacoes',
                    'alias' => 'Classificacoes',
                    'type' => 'INNER',
                    'conditions' => 'Classificacoes.id = Estagios.classificacao_id',
                ])
                ->all();
        $data = [];
        if (count($estagio) > 0) {
            foreach ($estagio as $key => $value) {
                $data[] = [
                    'estagio' => $value->codigo,
                    'descricao' => $value->nome,
                    'peso' => $value->peso,
                    'id' => $value->lesao_id,
                    'classificacao_id' => $value->classificacao_id,
                    'estagio_id' => $value->id,
                    'lesao' => $value->lesao,
                    'classificacao' => $value->classificacao,
                ];
            }
        }
        return $data;
    }

    public function listaClassificacoes() {
        $this->loadModel('Classificacoes');
        $this->autoRender = false;
        $sub = $this->Lesoes->find()->select(['id'])->where(['nome LIKE' => '%' . $this->request->data('q') . '%']);
        $classificacoes = $this->Classificacoes->find()->where(['lesao_id in' => $sub])->all();
        echo json_encode($classificacoes);
        exit;
    }

    public function listaLesoes() {
        $this->loadModel('Classificacoes');
        $this->autoRender = false;
        $sub = $this->Lesoes->find()->select(['id'])->where(['nome LIKE' => '%' . $this->request->data('q') . '%']);
        $classificacoes = $this->Classificacoes->find()->where(['lesao_id in' => $sub])->all();
        echo json_encode($classificacoes);
        exit;
    }

    public function gravar() {

        $lesao = $this->Lesoes->find()->where(['nome' => $this->request->data('lesao')])->first();
        if (count($lesao) === 0) {
            $lesao = $this->Lesoes->newEntity();
            $lesao = $this->Lesoes->patchEntity($lesao, ['nome' => $this->request->data('lesao')]);
            $this->Lesoes->save($lesao);
        }

        $this->loadModel('Classificacoes');

        $classificacao = $this->Classificacoes->find()->where(['nome' => $this->request->data('classificacao')])->first();
        if (count($classificacao) === 0) {
            $classificacao = $this->Classificacoes->newEntity();
            $classificacao = $this->Classificacoes->patchEntity($classificacao, ['lesao_id' => $lesao->id, 'nome' => $this->request->data('classificacao')]);
            $this->Classificacoes->save($classificacao);
        }

        $this->loadModel('Estagios');

        if (!empty($this->request->data('estagio_id'))) {
            $estagio = $this->Estagios->get((int) $this->request->data('estagio_id'));
        } else {
            $estagio = $this->Estagios->newEntity();
        }

        $estagio = $this->Estagios->patchEntity($estagio, ['lesao_id' => $lesao->id, 'classificacao_id' => $classificacao->id, 'codigo' => $this->request->data('estagio'), 'nome' => $this->request->data('descricao'), 'peso' => $this->request->data('peso')]);
        $this->Estagios->save($estagio);

        $lesoes = $this->Lesoes->find()->all();
        $data = [];
        if (count($lesoes) > 0) {
            foreach ($lesoes as $key => $value) {
                $data[] = [
                    'lesao' => $value->nome,
                    'open' => false,
                    'classificacoes' => $this->classificacoes($value->id)
                ];
            }
        }
        echo json_encode([
            'data' => $data,
            'lesoesList' => $lesoes,
        ]);
        exit;
    }

}
