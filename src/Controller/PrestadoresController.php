<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Prestadores Controller
 *
 * @property \App\Model\Table\PrestadoresTable $Prestadores
 */
class PrestadoresController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))->where([$this->modelClass . '.status !=' => $this->{$this->modelClass}->statusExcluido])->contain(['Especialidades', 'TabelasPrecos', 'Conselhos']);
        $this->set('prestadores', $this->paginate($query));
        $this->set('_serialize', ['prestadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Prestadore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $prestadore = $this->Prestadores->get($id, [
            'contain' => ['Especialidades', 'TabelasPrecos', 'Conselhos']
        ]);

        $this->set('prestadore', $prestadore);
        $this->set('_serialize', ['prestadore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $prestadore = $this->Prestadores->newEntity();
        if ($this->request->is('post')) {
            $prestadore = $this->Prestadores->patchEntity($prestadore, $this->request->data);
            if ($this->Prestadores->save($prestadore)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $especialidades = $this->Prestadores->Especialidades->find('list', ['limit' => 200]);
        $tabelasPrecos = $this->Prestadores->TabelasPrecos->find('list', ['limit' => 200]);
        $conselhos = $this->Prestadores->Conselhos->find('list', ['limit' => 200]);
        $this->set(compact('prestadore', 'especialidades', 'tabelasPrecos', 'conselhos'));
        $this->set('_serialize', ['prestadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prestadore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $prestadore = $this->Prestadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prestadore = $this->Prestadores->patchEntity($prestadore, $this->request->data);
            if ($this->Prestadores->save($prestadore)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $especialidades = $this->Prestadores->Especialidades->find('list', ['limit' => 200]);
        $tabelasPrecos = $this->Prestadores->TabelasPrecos->find('list', ['limit' => 200]);
        $conselhos = $this->Prestadores->Conselhos->find('list', ['limit' => 200]);
        $this->set(compact('prestadore', 'especialidades', 'tabelasPrecos', 'conselhos'));
        $this->set('_serialize', ['prestadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prestadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $prestadore = $this->Prestadores->get($id);
        if ($this->Prestadores->delete($prestadore)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
