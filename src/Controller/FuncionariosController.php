<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Funcionarios Controller
 *
 * @property \App\Model\Table\FuncionariosTable $Funcionarios
 */
class FuncionariosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('funcionarios', $this->paginate($query));
        $this->set('_serialize', ['funcionarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => []
        ]);

        $this->set('funcionario', $funcionario);
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $funcionario = $this->Funcionarios->newEntity();
        if ($this->request->is('post')) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->data);
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $conselhos = $this->Funcionarios->Conselhos->find('list', ['limit' => 200]);
        $comissaos = $this->Funcionarios->Comissoes->find('list', ['limit' => 200]);
        $this->set(compact('funcionario', 'conselhos', 'cargos', 'cargosSalarios', 'comissaos'));
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $funcionario = $this->Funcionarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $funcionario = $this->Funcionarios->patchEntity($funcionario, $this->request->data);
            if ($this->Funcionarios->save($funcionario)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $conselhos = $this->Funcionarios->Conselhos->find('list', ['limit' => 200]);
        $comissaos = $this->Funcionarios->Comissoes->find('list', ['limit' => 200]);
        $this->set(compact('funcionario', 'conselhos', 'cargos', 'cargosSalarios', 'comissaos'));
        $this->set('_serialize', ['funcionario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Funcionario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $funcionario = $this->Funcionarios->get($id);
        if ($this->Funcionarios->delete($funcionario)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
