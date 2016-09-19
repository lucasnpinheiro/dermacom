<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * ComissoesCorrecoes Controller
 *
 * @property \App\Model\Table\ComissoesCorrecoesTable $ComissoesCorrecoes
 */
class ComissoesCorrecoesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->contain(['Comissoes']);
        $this->set('comissoesCorrecoes', $this->paginate($query));
        $this->set('_serialize', ['comissoesCorrecoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Comissoes Correco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $comissoesCorreco = $this->ComissoesCorrecoes->get($id, [
            'contain' => ['Comissoes']
        ]);

        $this->set('comissoesCorreco', $comissoesCorreco);
        $this->set('_serialize', ['comissoesCorreco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $comissoesCorreco = $this->ComissoesCorrecoes->newEntity();
        if ($this->request->is('post')) {
            $comissoesCorreco = $this->ComissoesCorrecoes->patchEntity($comissoesCorreco, $this->request->data);
            if ($this->ComissoesCorrecoes->save($comissoesCorreco)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $comissaos = $this->ComissoesCorrecoes->Comissoes->find('list', ['limit' => 200]);
        $this->set(compact('comissoesCorreco', 'comissaos'));
        $this->set('_serialize', ['comissoesCorreco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comissoes Correco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $comissoesCorreco = $this->ComissoesCorrecoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comissoesCorreco = $this->ComissoesCorrecoes->patchEntity($comissoesCorreco, $this->request->data);
            if ($this->ComissoesCorrecoes->save($comissoesCorreco)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $comissaos = $this->ComissoesCorrecoes->Comissoes->find('list', ['limit' => 200]);
        $this->set(compact('comissoesCorreco', 'comissaos'));
        $this->set('_serialize', ['comissoesCorreco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comissoes Correco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $comissoesCorreco = $this->ComissoesCorrecoes->get($id);
        if ($this->ComissoesCorrecoes->delete($comissoesCorreco)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
