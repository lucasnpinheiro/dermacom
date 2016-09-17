<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 * @property \App\Model\Table\PacientesTable $Pacientes
 */
class PacientesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sexos', 'EstadosCivis', 'Escolaridades', 'Profissoes', 'Nacionalidades', 'Religioes', 'Cores']
        ];
        $pacientes = $this->paginate($this->Pacientes);

        $this->set(compact('pacientes'));
        $this->set('_serialize', ['pacientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Sexos', 'EstadosCivis', 'Escolaridades', 'Profissoes', 'Nacionalidades', 'Religioes', 'Cores', 'Convenios', 'Midias', 'PacientesAcompanhamentos', 'PacientesEmergencias', 'PacientesServicos', 'PacientesSoube']
        ]);

        $this->set('paciente', $paciente);
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paciente = $this->Pacientes->newEntity();
        if ($this->request->is('post')) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $sexos = $this->Pacientes->Sexos->find('list', ['limit' => 200]);
        $estadosCivils = $this->Pacientes->EstadosCivis->find('list', ['limit' => 200]);
        $escolaridades = $this->Pacientes->Escolaridades->find('list', ['limit' => 200]);
        $profissaos = $this->Pacientes->Profissoes->find('list', ['limit' => 200]);
        $nacionalidades = $this->Pacientes->Nacionalidades->find('list', ['limit' => 200]);
        $religiaos = $this->Pacientes->Religioes->find('list', ['limit' => 200]);
        $cors = $this->Pacientes->Cores->find('list', ['limit' => 200]);
        $convenios = $this->Pacientes->Convenios->find('list', ['limit' => 200]);
        $midias = $this->Pacientes->Midias->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors', 'convenios', 'midias'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Convenios', 'Midias']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paciente = $this->Pacientes->patchEntity($paciente, $this->request->data);
            if ($this->Pacientes->save($paciente)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $sexos = $this->Pacientes->Sexos->find('list', ['limit' => 200]);
        $estadosCivils = $this->Pacientes->EstadosCivis->find('list', ['limit' => 200]);
        $escolaridades = $this->Pacientes->Escolaridades->find('list', ['limit' => 200]);
        $profissaos = $this->Pacientes->Profissoes->find('list', ['limit' => 200]);
        $nacionalidades = $this->Pacientes->Nacionalidades->find('list', ['limit' => 200]);
        $religiaos = $this->Pacientes->Religioes->find('list', ['limit' => 200]);
        $cors = $this->Pacientes->Cores->find('list', ['limit' => 200]);
        $convenios = $this->Pacientes->Convenios->find('list', ['limit' => 200]);
        $midias = $this->Pacientes->Midias->find('list', ['limit' => 200]);
        $this->set(compact('paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors', 'convenios', 'midias'));
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
