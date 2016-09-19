<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesMidias Controller
 *
 * @property \App\Model\Table\PacientesMidiasTable $PacientesMidias
 */
class PacientesMidiasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->contain(['Pacientes', 'Midias']);
        $this->set('pacientesMidias', $this->paginate($query));
        $this->set('_serialize', ['pacientesMidias']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Midia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $pacientesMidia = $this->PacientesMidias->get($id, [
            'contain' => ['Pacientes', 'Midias']
        ]);

        $this->set('pacientesMidia', $pacientesMidia);
        $this->set('_serialize', ['pacientesMidia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $pacientesMidia = $this->PacientesMidias->newEntity();
        if ($this->request->is('post')) {
            $pacientesMidia = $this->PacientesMidias->patchEntity($pacientesMidia, $this->request->data);
            if ($this->PacientesMidias->save($pacientesMidia)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesMidias->Pacientes->find('list', ['limit' => 200]);
        $midias = $this->PacientesMidias->Midias->find('list', ['limit' => 200]);
        $this->set(compact('pacientesMidia', 'pacientes', 'midias'));
        $this->set('_serialize', ['pacientesMidia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Midia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $pacientesMidia = $this->PacientesMidias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesMidia = $this->PacientesMidias->patchEntity($pacientesMidia, $this->request->data);
            if ($this->PacientesMidias->save($pacientesMidia)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesMidias->Pacientes->find('list', ['limit' => 200]);
        $midias = $this->PacientesMidias->Midias->find('list', ['limit' => 200]);
        $this->set(compact('pacientesMidia', 'pacientes', 'midias'));
        $this->set('_serialize', ['pacientesMidia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Midia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesMidia = $this->PacientesMidias->get($id);
        if ($this->PacientesMidias->delete($pacientesMidia)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
