<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Estagios Controller
 *
 * @property \App\Model\Table\EstagiosTable $Estagios
 */
class EstagiosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->contain(['Lesoes', 'Classificacoes']);
        $this->set('estagios', $this->paginate($query));
        $this->set('_serialize', ['estagios']);
    }

    /**
     * View method
     *
     * @param string|null $id Estagio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $estagio = $this->Estagios->get($id, [
            'contain' => ['Lesoes', 'Classificacoes']
        ]);

        $this->set('estagio', $estagio);
        $this->set('_serialize', ['estagio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $estagio = $this->Estagios->newEntity();
        if ($this->request->is('post')) {
            $estagio = $this->Estagios->patchEntity($estagio, $this->request->data);
            if ($this->Estagios->save($estagio)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesaos = $this->Estagios->Lesoes->find('list', ['limit' => 200]);
        $classificacaos = $this->Estagios->Classificacoes->find('list', ['limit' => 200]);
        $this->set(compact('estagio', 'lesaos', 'classificacaos'));
        $this->set('_serialize', ['estagio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estagio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $estagio = $this->Estagios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estagio = $this->Estagios->patchEntity($estagio, $this->request->data);
            if ($this->Estagios->save($estagio)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesaos = $this->Estagios->Lesoes->find('list', ['limit' => 200]);
        $classificacaos = $this->Estagios->Classificacoes->find('list', ['limit' => 200]);
        $this->set(compact('estagio', 'lesaos', 'classificacaos'));
        $this->set('_serialize', ['estagio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estagio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $estagio = $this->Estagios->get($id);
        if ($this->Estagios->delete($estagio)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
