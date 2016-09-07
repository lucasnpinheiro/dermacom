<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesAcompanhamentos Controller
 *
 * @property \App\Model\Table\PacientesAcompanhamentosTable $PacientesAcompanhamentos
 */
class PacientesAcompanhamentosController extends AppController
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
        $pacientesAcompanhamentos = $this->paginate($this->PacientesAcompanhamentos);

        $this->set(compact('pacientesAcompanhamentos'));
        $this->set('_serialize', ['pacientesAcompanhamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Acompanhamento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacientesAcompanhamento = $this->PacientesAcompanhamentos->get($id, [
            'contain' => ['Pacientes', 'Especialidades']
        ]);

        $this->set('pacientesAcompanhamento', $pacientesAcompanhamento);
        $this->set('_serialize', ['pacientesAcompanhamento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacientesAcompanhamento = $this->PacientesAcompanhamentos->newEntity();
        if ($this->request->is('post')) {
            $pacientesAcompanhamento = $this->PacientesAcompanhamentos->patchEntity($pacientesAcompanhamento, $this->request->data);
            if ($this->PacientesAcompanhamentos->save($pacientesAcompanhamento)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesAcompanhamentos->Pacientes->find('list', ['limit' => 200]);
        $especialidades = $this->PacientesAcompanhamentos->Especialidades->find('list', ['limit' => 200]);
        $this->set(compact('pacientesAcompanhamento', 'pacientes', 'especialidades'));
        $this->set('_serialize', ['pacientesAcompanhamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Acompanhamento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacientesAcompanhamento = $this->PacientesAcompanhamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesAcompanhamento = $this->PacientesAcompanhamentos->patchEntity($pacientesAcompanhamento, $this->request->data);
            if ($this->PacientesAcompanhamentos->save($pacientesAcompanhamento)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesAcompanhamentos->Pacientes->find('list', ['limit' => 200]);
        $especialidades = $this->PacientesAcompanhamentos->Especialidades->find('list', ['limit' => 200]);
        $this->set(compact('pacientesAcompanhamento', 'pacientes', 'especialidades'));
        $this->set('_serialize', ['pacientesAcompanhamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Acompanhamento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesAcompanhamento = $this->PacientesAcompanhamentos->get($id);
        if ($this->PacientesAcompanhamentos->delete($pacientesAcompanhamento)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
