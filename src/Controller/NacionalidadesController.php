<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Nacionalidades Controller
 *
 * @property \App\Model\Table\NacionalidadesTable $Nacionalidades
 */
class NacionalidadesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('nacionalidades', $this->paginate($query));
        $this->set('_serialize', ['nacionalidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Nacionalidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $nacionalidade = $this->Nacionalidades->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('nacionalidade', $nacionalidade);
        $this->set('_serialize', ['nacionalidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $nacionalidade = $this->Nacionalidades->newEntity();
        if ($this->request->is('post')) {
            $nacionalidade = $this->Nacionalidades->patchEntity($nacionalidade, $this->request->data);
            if ($this->Nacionalidades->save($nacionalidade)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('nacionalidade'));
        $this->set('_serialize', ['nacionalidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Nacionalidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $nacionalidade = $this->Nacionalidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nacionalidade = $this->Nacionalidades->patchEntity($nacionalidade, $this->request->data);
            if ($this->Nacionalidades->save($nacionalidade)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('nacionalidade'));
        $this->set('_serialize', ['nacionalidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Nacionalidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $nacionalidade = $this->Nacionalidades->get($id);
        if ($this->Nacionalidades->delete($nacionalidade)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
