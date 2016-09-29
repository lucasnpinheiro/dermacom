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
        $query = $this->{$this->modelClass}
                        ->find('search', $this->{$this->modelClass}->filterParams($this->request->query))
                        ->select(['Lesoes.id', 'Lesoes.nome', 'Classificacoes.id', 'Classificacoes.nome', 'Estagios.id', 'Estagios.codigo', 'Estagios.nome', 'Estagios.peso'])
                        ->hydrate(true)
                        ->autoFields(true)
                        ->join([
                            'table' => 'classificacoes',
                            'alias' => 'Classificacoes',
                            'type' => 'LEFT',
                            'conditions' => 'Classificacoes.lesao_id = Lesoes.id',
                        ])->join([
                    'table' => 'estagios',
                    'alias' => 'Estagios',
                    'type' => 'LEFT',
                    'conditions' => 'Lesoes.id = Estagios.lesao_id AND Classificacoes.id = Estagios.classificacao_id',
                        ]
                )->order([
            'Lesoes.nome' => 'ASC',
            'Classificacoes.nome' => 'ASC',
            'Estagios.codigo' => 'ASC',
            'Estagios.nome' => 'ASC'
        ]);
        if (count($this->request->query) > 0) {
            if (!empty($this->request->query('Classificacoes.nome'))) {
                $query->where(['Classificacoes.nome LIKE' => '%' . $this->request->query('Classificacoes.nome') . '%']);
            }
            if (!empty($this->request->query('Estagios.codigo'))) {
                $query->where(['Estagios.codigo LIKE' => $this->request->query('Estagios.codigo')]);
            }
            if (!empty($this->request->query('Estagios.nome'))) {
                $query->where(['Estagios.nome LIKE' => '%' . $this->request->query('Estagios.nome') . '%']);
            }
            if (!empty($this->request->query('Estagios.peso'))) {
                $query->where(['Estagios.peso LIKE' => $this->request->query('Estagios.peso')]);
            }
        }

        $this->loadModel('Classificacoes');

        $this->set('classificacoes', $this->Classificacoes->find('list')->group('nome')->all());
        $this->set('lesoes', $this->paginate($query));
        $this->set('_serialize', ['lesoes']);
        $this->set('lesao', $this->{$this->modelClass}->newEntity());
    }

    /**
     * View method
     *
     * @param string|null $id Leso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null, $classificacao_id = null, $estagio_id = null) {
        $query = $this->{$this->modelClass}
                        ->find()
                        ->select(['Lesoes.id', 'Lesoes.nome', 'Classificacoes.id', 'Classificacoes.nome', 'Estagios.id', 'Estagios.codigo', 'Estagios.nome', 'Estagios.peso'])
                        ->hydrate(true)
                        ->autoFields(true)
                        ->join([
                            'table' => 'classificacoes',
                            'alias' => 'Classificacoes',
                            'type' => 'LEFT',
                            'conditions' => 'Classificacoes.lesao_id = Lesoes.id',
                        ])->join([
                    'table' => 'estagios',
                    'alias' => 'Estagios',
                    'type' => 'LEFT',
                    'conditions' => 'Lesoes.id = Estagios.lesao_id AND Classificacoes.id = Estagios.classificacao_id',
                        ]
                )->order([
                    'Lesoes.nome' => 'ASC',
                    'Classificacoes.nome' => 'ASC',
                    'Estagios.codigo' => 'ASC',
                    'Estagios.nome' => 'ASC'
                ])->where([
            'Lesoes.id' => $id,
            'Classificacoes.id' => $classificacao_id,
            'Estagios.id' => $estagio_id,
        ]);

        $this->loadModel('Classificacoes');

        $this->set('classificacoes', $this->Classificacoes->find('list')->group('nome')->all());
        $this->set('leso', $query->first());
        $this->set('lesao', $this->{$this->modelClass}->newEntity());
        $this->set('_serialize', ['leso', 'classificacoes']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {

        $this->loadModel('Classificacoes');
        $this->loadModel('Estagios');


        if ($this->request->data('acao') === 'novo') {
            $leso = $this->Lesoes->newEntity();
            $leso = $this->Lesoes->patchEntity($leso, [
                'nome' => $this->request->data('nome')
            ]);

            $this->Lesoes->save($leso);

            $classificacao = $this->Classificacoes->newEntity();
            $classificacao = $this->Classificacoes->patchEntity($classificacao, [
                'nome' => $this->request->data('classificacao_nome'),
                'lesao_id' => $leso->id
            ]);

            $this->Classificacoes->save($classificacao);

            $estagio = $this->Estagios->newEntity();
            $estagio = $this->Estagios->patchEntity($estagio, [
                'nome' => $this->request->data('estagio_nome'),
                'codigo' => $this->request->data('estagio_codigo'),
                'peso' => $this->request->data('estagio_peso'),
                'classificacao_id' => $classificacao->id,
                'lesao_id' => $leso->id
            ]);

            $this->Estagios->save($estagio);
        } else if ($this->request->data('acao') === 'edit') {
            $leso = $this->Lesoes->get((int) $this->request->data('id'));
            $leso = $this->Lesoes->patchEntity($leso, [
                'nome' => $this->request->data('nome')
            ]);

            $this->Lesoes->save($leso);

            $classificacao = $this->Classificacoes->get((int) $this->request->data('classificacao_id'));
            $classificacao = $this->Classificacoes->patchEntity($classificacao, [
                'nome' => $this->request->data('classificacao_nome'),
                'lesao_id' => $leso->id
            ]);

            $this->Classificacoes->save($classificacao);

            $estagio = $this->Estagios->get((int) $this->request->data('estagio_id'));
            $estagio = $this->Estagios->patchEntity($estagio, [
                'nome' => $this->request->data('estagio_nome'),
                'codigo' => $this->request->data('estagio_codigo'),
                'peso' => $this->request->data('estagio_peso'),
                'classificacao_id' => $classificacao->id,
                'lesao_id' => $leso->id
            ]);

            $this->Estagios->save($estagio);
        }
        echo json_encode(['status' => 'ok']);
        exit;
    }

    /**
     * Edit method
     *
     * @param string|null $id Leso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $leso = $this->Lesoes->get($id, [
            'contain' => ['Corporais']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leso = $this->Lesoes->patchEntity($leso, $this->request->data);
            if ($this->Lesoes->save($leso)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $corporais = $this->Lesoes->Corporais->find('list', ['limit' => 200]);
        $this->set(compact('leso', 'corporais'));
        $this->set('_serialize', ['leso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Leso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $leso = $this->Lesoes->get($id);
        if ($this->Lesoes->delete($leso)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
