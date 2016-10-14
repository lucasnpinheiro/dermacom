<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesProgramacoes Controller
 *
 * @property \App\Model\Table\PacientesProgramacoesTable $PacientesProgramacoes
 */
class PacientesProgramacoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes', 'Usuarios']
        ];
        $pacientesProgramacoes = $this->paginate($this->PacientesProgramacoes);

        $this->set(compact('pacientesProgramacoes'));
        $this->set('_serialize', ['pacientesProgramacoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Programaco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacientesProgramaco = $this->PacientesProgramacoes->get($id, [
            'contain' => ['Pacientes', 'Usuarios']
        ]);

        $this->set('pacientesProgramaco', $pacientesProgramaco);
        $this->set('_serialize', ['pacientesProgramaco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacientesProgramaco = $this->PacientesProgramacoes->newEntity();
        if ($this->request->is('post')) {
            $pacientesProgramaco = $this->PacientesProgramacoes->patchEntity($pacientesProgramaco, $this->request->data);
            if ($this->PacientesProgramacoes->save($pacientesProgramaco)) {
                $this->Flash->success(__('The pacientes programaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pacientes programaco could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->PacientesProgramacoes->Pacientes->find('list', ['limit' => 200]);
        $usuarios = $this->PacientesProgramacoes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('pacientesProgramaco', 'pacientes', 'usuarios'));
        $this->set('_serialize', ['pacientesProgramaco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Programaco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacientesProgramaco = $this->PacientesProgramacoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesProgramaco = $this->PacientesProgramacoes->patchEntity($pacientesProgramaco, $this->request->data);
            if ($this->PacientesProgramacoes->save($pacientesProgramaco)) {
                $this->Flash->success(__('The pacientes programaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pacientes programaco could not be saved. Please, try again.'));
            }
        }
        $pacientes = $this->PacientesProgramacoes->Pacientes->find('list', ['limit' => 200]);
        $usuarios = $this->PacientesProgramacoes->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('pacientesProgramaco', 'pacientes', 'usuarios'));
        $this->set('_serialize', ['pacientesProgramaco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Programaco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesProgramaco = $this->PacientesProgramacoes->get($id);
        if ($this->PacientesProgramacoes->delete($pacientesProgramaco)) {
            $this->Flash->success(__('The pacientes programaco has been deleted.'));
        } else {
            $this->Flash->error(__('The pacientes programaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
