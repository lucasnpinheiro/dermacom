<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacientesServicos Controller
 *
 * @property \App\Model\Table\PacientesServicosTable $PacientesServicos
 */
class PacientesServicosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pacientes', 'ServicosClinicas']
        ];
        $pacientesServicos = $this->paginate($this->PacientesServicos);

        $this->set(compact('pacientesServicos'));
        $this->set('_serialize', ['pacientesServicos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pacientes Servico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacientesServico = $this->PacientesServicos->get($id, [
            'contain' => ['Pacientes', 'ServicosClinicas']
        ]);

        $this->set('pacientesServico', $pacientesServico);
        $this->set('_serialize', ['pacientesServico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacientesServico = $this->PacientesServicos->newEntity();
        if ($this->request->is('post')) {
            $pacientesServico = $this->PacientesServicos->patchEntity($pacientesServico, $this->request->data);
            if ($this->PacientesServicos->save($pacientesServico)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesServicos->Pacientes->find('list', ['limit' => 200]);
        $servicos = $this->PacientesServicos->ServicosClinicas->find('list', ['limit' => 200]);
        $this->set(compact('pacientesServico', 'pacientes', 'servicos'));
        $this->set('_serialize', ['pacientesServico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pacientes Servico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacientesServico = $this->PacientesServicos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacientesServico = $this->PacientesServicos->patchEntity($pacientesServico, $this->request->data);
            if ($this->PacientesServicos->save($pacientesServico)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $pacientes = $this->PacientesServicos->Pacientes->find('list', ['limit' => 200]);
        $servicos = $this->PacientesServicos->ServicosClinicas->find('list', ['limit' => 200]);
        $this->set(compact('pacientesServico', 'pacientes', 'servicos'));
        $this->set('_serialize', ['pacientesServico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pacientes Servico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacientesServico = $this->PacientesServicos->get($id);
        if ($this->PacientesServicos->delete($pacientesServico)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
