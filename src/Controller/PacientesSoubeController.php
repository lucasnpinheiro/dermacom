<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesSoube Controller
 *
 * @property \App\Model\Table\PacientesSoubeTable $PacientesSoube
 */
class PacientesSoubeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes', 'Especialidades']
        ];
        $pacientesSoube = $this->paginate($this->PacientesSoube);

        $this->set(compact('pacientesSoube'));
        $this->set('_serialize', ['pacientesSoube']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Soube id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacientesSoube = $this->PacientesSoube->get($id, [
            'contain' => ['Pacientes', 'Especialidades']
        ]);

        $this->set('pacientesSoube', $pacientesSoube);
        $this->set('_serialize', ['pacientesSoube']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacientesSoube = $this->PacientesSoube->newEntity();
        if ($this->request->is('post')) {
            $pacientesSoube = $this->PacientesSoube->patchEntity($pacientesSoube, $this->request->data);
            if ($this->PacientesSoube->save($pacientesSoube)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesSoube->Pacientes->find('list', ['limit' => 200]);
        $especialidades = $this->PacientesSoube->Especialidades->find('list', ['limit' => 200]);
        $this->set(compact('pacientesSoube', 'pacientes', 'especialidades'));
        $this->set('_serialize', ['pacientesSoube']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Soube id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacientesSoube = $this->PacientesSoube->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesSoube = $this->PacientesSoube->patchEntity($pacientesSoube, $this->request->data);
            if ($this->PacientesSoube->save($pacientesSoube)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesSoube->Pacientes->find('list', ['limit' => 200]);
        $especialidades = $this->PacientesSoube->Especialidades->find('list', ['limit' => 200]);
        $this->set(compact('pacientesSoube', 'pacientes', 'especialidades'));
        $this->set('_serialize', ['pacientesSoube']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Soube id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesSoube = $this->PacientesSoube->get($id);
        if ($this->PacientesSoube->delete($pacientesSoube)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
