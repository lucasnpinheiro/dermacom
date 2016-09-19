<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesEmergencias Controller
 *
 * @property \App\Model\Table\PacientesEmergenciasTable $PacientesEmergencias
 */
class PacientesEmergenciasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->contain(['Pacientes', 'Parentescos']);
        $this->set('pacientesEmergencias', $this->paginate($query));
        $this->set('_serialize', ['pacientesEmergencias']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Emergencia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $pacientesEmergencia = $this->PacientesEmergencias->get($id, [
            'contain' => ['Pacientes', 'Parentescos']
        ]);

        $this->set('pacientesEmergencia', $pacientesEmergencia);
        $this->set('_serialize', ['pacientesEmergencia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $pacientesEmergencia = $this->PacientesEmergencias->newEntity();
        if ($this->request->is('post')) {
            $pacientesEmergencia = $this->PacientesEmergencias->patchEntity($pacientesEmergencia, $this->request->data);
            if ($this->PacientesEmergencias->save($pacientesEmergencia)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesEmergencias->Pacientes->find('list', ['limit' => 200]);
        $parentescos = $this->PacientesEmergencias->Parentescos->find('list', ['limit' => 200]);
        $this->set(compact('pacientesEmergencia', 'pacientes', 'parentescos'));
        $this->set('_serialize', ['pacientesEmergencia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Emergencia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $pacientesEmergencia = $this->PacientesEmergencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesEmergencia = $this->PacientesEmergencias->patchEntity($pacientesEmergencia, $this->request->data);
            if ($this->PacientesEmergencias->save($pacientesEmergencia)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesEmergencias->Pacientes->find('list', ['limit' => 200]);
        $parentescos = $this->PacientesEmergencias->Parentescos->find('list', ['limit' => 200]);
        $this->set(compact('pacientesEmergencia', 'pacientes', 'parentescos'));
        $this->set('_serialize', ['pacientesEmergencia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Emergencia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesEmergencia = $this->PacientesEmergencias->get($id);
        if ($this->PacientesEmergencias->delete($pacientesEmergencia)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
