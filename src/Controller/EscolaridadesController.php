<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Escolaridades Controller
 *
 * @property \App\Model\Table\EscolaridadesTable $Escolaridades
 */
class EscolaridadesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('escolaridades', $this->paginate($query));
        $this->set('_serialize', ['escolaridades']);
    }

    /**
     * View method
     *
     * @param string|null $id Escolaridade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $escolaridade = $this->Escolaridades->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('escolaridade', $escolaridade);
        $this->set('_serialize', ['escolaridade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $escolaridade = $this->Escolaridades->newEntity();
        if ($this->request->is('post')) {
            $escolaridade = $this->Escolaridades->patchEntity($escolaridade, $this->request->data);
            if ($this->Escolaridades->save($escolaridade)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('escolaridade'));
        $this->set('_serialize', ['escolaridade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Escolaridade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $escolaridade = $this->Escolaridades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $escolaridade = $this->Escolaridades->patchEntity($escolaridade, $this->request->data);
            if ($this->Escolaridades->save($escolaridade)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('escolaridade'));
        $this->set('_serialize', ['escolaridade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Escolaridade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $escolaridade = $this->Escolaridades->get($id);
        if ($this->Escolaridades->delete($escolaridade)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
