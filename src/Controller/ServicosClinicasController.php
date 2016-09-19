<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ServicosClinicas Controller
 *
 * @property \App\Model\Table\ServicosClinicasTable $ServicosClinicas
 */
class ServicosClinicasController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('servicosClinicas', $this->paginate($query));
        $this->set('_serialize', ['servicosClinicas']);
    }

    /**
     * View method
     *
     * @param string|null $id ServicosClinicas Clinica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $servicosClinica = $this->ServicosClinicas->get($id, [
            'contain' => []
        ]);

        $this->set('servicosClinica', $servicosClinica);
        $this->set('_serialize', ['servicosClinica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $servicosClinica = $this->ServicosClinicas->newEntity();
        if ($this->request->is('post')) {
            $servicosClinica = $this->ServicosClinicas->patchEntity($servicosClinica, $this->request->data);
            if ($this->ServicosClinicas->save($servicosClinica)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('servicosClinica'));
        $this->set('_serialize', ['servicosClinica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id ServicosClinicas Clinica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $servicosClinica = $this->ServicosClinicas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicosClinica = $this->ServicosClinicas->patchEntity($servicosClinica, $this->request->data);
            if ($this->ServicosClinicas->save($servicosClinica)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('servicosClinica'));
        $this->set('_serialize', ['servicosClinica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id ServicosClinicas Clinica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $servicosClinica = $this->ServicosClinicas->get($id);
        if ($this->ServicosClinicas->delete($servicosClinica)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
