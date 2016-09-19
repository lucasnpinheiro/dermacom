<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Corporais Controller
 *
 * @property \App\Model\Table\CorporaisTable $Corporais
 */
class CorporaisController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('corporais', $this->paginate($query));
        $this->set('_serialize', ['corporais']);
    }

    /**
     * View method
     *
     * @param string|null $id Corporai id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $corporai = $this->Corporais->get($id, [
            'contain' => ['Lesoes']
        ]);

        $this->set('corporai', $corporai);
        $this->set('_serialize', ['corporai']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $corporai = $this->Corporais->newEntity();
        if ($this->request->is('post')) {
            $corporai = $this->Corporais->patchEntity($corporai, $this->request->data);
            if ($this->Corporais->save($corporai)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesoes = $this->Corporais->Lesoes->find('list', ['limit' => 200]);
        $this->set(compact('corporai', 'lesoes'));
        $this->set('_serialize', ['corporai']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Corporai id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $corporai = $this->Corporais->get($id, [
            'contain' => ['Lesoes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $corporai = $this->Corporais->patchEntity($corporai, $this->request->data);
            if ($this->Corporais->save($corporai)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesoes = $this->Corporais->Lesoes->find('list', ['limit' => 200]);
        $this->set(compact('corporai', 'lesoes'));
        $this->set('_serialize', ['corporai']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Corporai id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $corporai = $this->Corporais->get($id);
        if ($this->Corporais->delete($corporai)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
