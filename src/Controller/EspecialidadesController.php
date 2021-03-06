<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Especialidades Controller
 *
 * @property \App\Model\Table\EspecialidadesTable $Especialidades
 */
class EspecialidadesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query));
        $this->set('especialidades', $this->paginate($query));
        $this->set('_serialize', ['especialidades']);
    }

    /**
     * View method
     *
     * @param string|null $id Especialidade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $especialidade = $this->Especialidades->get($id, [
            'contain' => ['PacientesAcompanhamentos', 'PacientesSoube', 'Prestadores']
        ]);

        $this->set('especialidade', $especialidade);
        $this->set('_serialize', ['especialidade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $especialidade = $this->Especialidades->newEntity();
        if ($this->request->is('post')) {
            $especialidade = $this->Especialidades->patchEntity($especialidade, $this->request->data);
            if ($this->Especialidades->save($especialidade)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('especialidade'));
        $this->set('_serialize', ['especialidade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Especialidade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $especialidade = $this->Especialidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $especialidade = $this->Especialidades->patchEntity($especialidade, $this->request->data);
            if ($this->Especialidades->save($especialidade)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('especialidade'));
        $this->set('_serialize', ['especialidade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Especialidade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $especialidade = $this->Especialidades->get($id);
        if ($this->Especialidades->delete($especialidade)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
