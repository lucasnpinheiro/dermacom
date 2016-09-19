<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Classificacoes Controller
 *
 * @property \App\Model\Table\ClassificacoesTable $Classificacoes
 */
class ClassificacoesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->contain(['Lesoes']);
        $this->set('classificacoes', $this->paginate($query));
        $this->set('_serialize', ['classificacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Classificaco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $classificaco = $this->Classificacoes->get($id, [
            'contain' => ['Lesoes']
        ]);

        $this->set('classificaco', $classificaco);
        $this->set('_serialize', ['classificaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $classificaco = $this->Classificacoes->newEntity();
        if ($this->request->is('post')) {
            $classificaco = $this->Classificacoes->patchEntity($classificaco, $this->request->data);
            if ($this->Classificacoes->save($classificaco)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesaos = $this->Classificacoes->Lesoes->find('list', ['limit' => 200]);
        $this->set(compact('classificaco', 'lesaos'));
        $this->set('_serialize', ['classificaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Classificaco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $classificaco = $this->Classificacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $classificaco = $this->Classificacoes->patchEntity($classificaco, $this->request->data);
            if ($this->Classificacoes->save($classificaco)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesaos = $this->Classificacoes->Lesoes->find('list', ['limit' => 200]);
        $this->set(compact('classificaco', 'lesaos'));
        $this->set('_serialize', ['classificaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Classificaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $classificaco = $this->Classificacoes->get($id);
        if ($this->Classificacoes->delete($classificaco)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
