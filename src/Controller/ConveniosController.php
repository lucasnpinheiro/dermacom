<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Convenios Controller
 *
 * @property \App\Model\Table\ConveniosTable $Convenios
 */
class ConveniosController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->where([$this->modelClass . '.status !=' => $this->{$this->modelClass}->statusExcluido]);
        $this->set('convenios', $this->paginate($query));
        $this->set('_serialize', ['convenios']);
    }

    /**
     * View method
     *
     * @param string|null $id Convenio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $convenio = $this->Convenios->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('convenio', $convenio);
        $this->set('_serialize', ['convenio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $convenio = $this->Convenios->newEntity();
        if ($this->request->is('post')) {
            $convenio = $this->Convenios->patchEntity($convenio, $this->request->data);
            if ($this->Convenios->save($convenio)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->Convenios->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('convenio', 'pacientes'));
        $this->set('_serialize', ['convenio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Convenio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $convenio = $this->Convenios->get($id, [
            'contain' => ['Pacientes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $convenio = $this->Convenios->patchEntity($convenio, $this->request->data);
            if ($this->Convenios->save($convenio)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->Convenios->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('convenio', 'pacientes'));
        $this->set('_serialize', ['convenio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Convenio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $convenio = $this->Convenios->get($id);
        if ($this->Convenios->delete($convenio)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
     /**
     * DeleteAll method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deleteAll() {
        $retorno = [
            'cod' => 111,
            'msg' => 'Erro ao excluir o regstro',
            'ids' => [],
        ];
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->{$this->modelClass}->updateAll(['status' => $this->{$this->modelClass}->statusExcluido], ['id in' => $this->request->data('ids')]);
            $retorno = [
                'cod' => 999,
                'msg' => 'Registro excluido com sucesso,',
                'ids' => $this->request->data('ids'),
            ];
        }
        echo json_encode($retorno);
        exit;
    }

}
