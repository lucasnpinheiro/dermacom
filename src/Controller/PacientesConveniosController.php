<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesConvenios Controller
 *
 * @property \App\Model\Table\PacientesConveniosTable $PacientesConvenios
 */
class PacientesConveniosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes', 'Convenios']
        ];
        $pacientesConvenios = $this->paginate($this->PacientesConvenios);

        $this->set(compact('pacientesConvenios'));
        $this->set('_serialize', ['pacientesConvenios']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Convenio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacientesConvenio = $this->PacientesConvenios->get($id, [
            'contain' => ['Pacientes', 'Convenios']
        ]);

        $this->set('pacientesConvenio', $pacientesConvenio);
        $this->set('_serialize', ['pacientesConvenio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacientesConvenio = $this->PacientesConvenios->newEntity();
        if ($this->request->is('post')) {
            $pacientesConvenio = $this->PacientesConvenios->patchEntity($pacientesConvenio, $this->request->data);
            if ($this->PacientesConvenios->save($pacientesConvenio)) {
                $this->Flash->success(__('The pacientes convenio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pacientes convenio could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->PacientesConvenios->Pacientes->find('list', ['limit' => 200]);
        $convenios = $this->PacientesConvenios->Convenios->find('list', ['limit' => 200]);
        $this->set(compact('pacientesConvenio', 'pacientes', 'convenios'));
        $this->set('_serialize', ['pacientesConvenio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Convenio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacientesConvenio = $this->PacientesConvenios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesConvenio = $this->PacientesConvenios->patchEntity($pacientesConvenio, $this->request->data);
            if ($this->PacientesConvenios->save($pacientesConvenio)) {
                $this->Flash->success(__('The pacientes convenio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pacientes convenio could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->PacientesConvenios->Pacientes->find('list', ['limit' => 200]);
        $convenios = $this->PacientesConvenios->Convenios->find('list', ['limit' => 200]);
        $this->set(compact('pacientesConvenio', 'pacientes', 'convenios'));
        $this->set('_serialize', ['pacientesConvenio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Convenio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesConvenio = $this->PacientesConvenios->get($id);
        if ($this->PacientesConvenios->delete($pacientesConvenio)) {
            $this->Flash->success(__('The pacientes convenio has been deleted.'));
        } else {
            $this->Flash->error(__('The pacientes convenio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
