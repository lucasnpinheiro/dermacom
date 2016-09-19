<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Conselhos Controller
 *
 * @property \App\Model\Table\ConselhosTable $Conselhos
 */
class ConselhosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('conselhos', $this->paginate($query));
        $this->set('_serialize', ['conselhos']);
    }

    /**
     * View method
     *
     * @param string|null $id Conselho id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $conselho = $this->Conselhos->get($id, [
            'contain' => ['Funcionarios', 'Prestadores']
        ]);

        $this->set('conselho', $conselho);
        $this->set('_serialize', ['conselho']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $conselho = $this->Conselhos->newEntity();
        if ($this->request->is('post')) {
            $conselho = $this->Conselhos->patchEntity($conselho, $this->request->data);
            if ($this->Conselhos->save($conselho)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('conselho'));
        $this->set('_serialize', ['conselho']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Conselho id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $conselho = $this->Conselhos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conselho = $this->Conselhos->patchEntity($conselho, $this->request->data);
            if ($this->Conselhos->save($conselho)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('conselho'));
        $this->set('_serialize', ['conselho']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Conselho id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $conselho = $this->Conselhos->get($id);
        if ($this->Conselhos->delete($conselho)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
