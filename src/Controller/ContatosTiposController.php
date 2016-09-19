<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ContatosTipos Controller
 *
 * @property \App\Model\Table\ContatosTiposTable $ContatosTipos
 */
class ContatosTiposController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('contatosTipos', $this->paginate($query));
        $this->set('_serialize', ['contatosTipos']);
    }

    /**
     * View method
     *
     * @param string|null $id Contatos Tipo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $contatosTipo = $this->ContatosTipos->get($id, [
            'contain' => ['Contatos']
        ]);

        $this->set('contatosTipo', $contatosTipo);
        $this->set('_serialize', ['contatosTipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $contatosTipo = $this->ContatosTipos->newEntity();
        if ($this->request->is('post')) {
            $contatosTipo = $this->ContatosTipos->patchEntity($contatosTipo, $this->request->data);
            if ($this->ContatosTipos->save($contatosTipo)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('contatosTipo'));
        $this->set('_serialize', ['contatosTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contatos Tipo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $contatosTipo = $this->ContatosTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contatosTipo = $this->ContatosTipos->patchEntity($contatosTipo, $this->request->data);
            if ($this->ContatosTipos->save($contatosTipo)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('contatosTipo'));
        $this->set('_serialize', ['contatosTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contatos Tipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $contatosTipo = $this->ContatosTipos->get($id);
        if ($this->ContatosTipos->delete($contatosTipo)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
