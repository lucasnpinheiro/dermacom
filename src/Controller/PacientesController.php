<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 * @property \App\Model\Table\PacientesTable $Pacientes
 */
class PacientesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        
    }

    public function indexLoad() {
        $this->loadComponent('Search.Prg');
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))
                ->where([$this->modelClass . '.status !=' => $this->{$this->modelClass}->statusExcluido]);
        $result = $this->paginate($query);
        if (count($result) > 0) {
            $this->sendResponse($result, 200);
        } else {
            $this->sendResponse($result, 216);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Sexos', 'EstadosCivis', 'Escolaridades', 'Profissoes', 'Nacionalidades', 'Religioes', 'Cores', 'Convenios', 'Midias', 'PacientesAcompanhamentos', 'PacientesEmergencias', 'PacientesServicos', 'PacientesSoube']
        ]);

        $this->set('paciente', $paciente);
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $paciente = $this->Pacientes->newEntity();
        $paciente->id = null;
        $paciente->nome = null;
        $paciente->status = 1;
        $paciente->cep = null;
        $paciente->endereco = null;
        $paciente->numero = null;
        $paciente->complemento = null;
        $paciente->bairro = null;
        $paciente->cidade = null;
        $paciente->estado = null;
        $paciente->cpf = null;
        $paciente->rg = null;
        $paciente->data_nascimento = null;
        $paciente->sexo_id = null;
        $paciente->foto = null;
        $paciente->cartao_sus = null;
        $paciente->estados_civil_id = null;
        $paciente->escolaridade_id = null;
        $paciente->profissao_id = null;
        $paciente->naturalidade = null;
        $paciente->nacionalidade_id = null;
        $paciente->religiao_id = null;
        $paciente->cor_id = null;
        $paciente->centro_custo = null;
        $paciente->created = null;
        $paciente->modified = null;
        $paciente->cpf_mask = null;
        $paciente->idade = null;

        $sexos = $this->Pacientes->Sexos->find()->all();
        $estadosCivils = $this->Pacientes->EstadosCivis->find()->all();
        $escolaridades = $this->Pacientes->Escolaridades->find()->all();
        $profissaos = $this->Pacientes->Profissoes->find()->all();
        $nacionalidades = $this->Pacientes->Nacionalidades->find()->all();
        $religiaos = $this->Pacientes->Religioes->find()->all();
        $cors = $this->Pacientes->Cores->find()->all();
        $convenios = $this->Pacientes->Convenios->find()->all();
        $midias = $this->Pacientes->Midias->find()->all();
        $this->set(compact('paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors', 'convenios', 'midias'));
        $this->set('_serialize', ['paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors', 'convenios', 'midias']);
    }

    public function gravar() {
        $id = $this->request->data('id');
        unset($this->request->data['id']);
        if (!empty($id)) {
            $paciente = $this->Pacientes->get($id);
        } else {
            $paciente = $this->Pacientes->newEntity();
        }
        $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
        if ($this->Pacientes->save($paciente)) {
            $this->sendResponse($paciente, 200);
        } else {
            $this->sendResponse($paciente->errors(), 214);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Convenios', 'Midias']
        ]);
        $sexos = $this->Pacientes->Sexos->find()->all();
        $estadosCivils = $this->Pacientes->EstadosCivis->find()->all();
        $escolaridades = $this->Pacientes->Escolaridades->find()->all();
        $profissaos = $this->Pacientes->Profissoes->find()->all();
        $nacionalidades = $this->Pacientes->Nacionalidades->find()->all();
        $religiaos = $this->Pacientes->Religioes->find()->all();
        $cors = $this->Pacientes->Cores->find()->all();
        $convenios = $this->Pacientes->Convenios->find()->all();
        $midias = $this->Pacientes->Midias->find()->all();
        $this->set(compact('paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors', 'convenios', 'midias'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
