<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TabelasReajustes Controller
 *
 * @property \App\Model\Table\TabelasReajustesTable $TabelasReajustes
 */
class TabelasReajustesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TabelasValors']
        ];
        $tabelasReajustes = $this->paginate($this->TabelasReajustes);

        $this->set(compact('tabelasReajustes'));
        $this->set('_serialize', ['tabelasReajustes']);
    }

    /**
     * View method
     *
     * @param string|null $id Tabelas Reajuste id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabelasReajuste = $this->TabelasReajustes->get($id, [
            'contain' => ['TabelasValors']
        ]);

        $this->set('tabelasReajuste', $tabelasReajuste);
        $this->set('_serialize', ['tabelasReajuste']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabelasReajuste = $this->TabelasReajustes->newEntity();
        if ($this->request->is('post')) {
            $tabelasReajuste = $this->TabelasReajustes->patchEntity($tabelasReajuste, $this->request->data);
            if ($this->TabelasReajustes->save($tabelasReajuste)) {
                $this->Flash->success(__('The tabelas reajuste has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tabelas reajuste could not be saved. Please, try again.'));
            }
        }
        $tabelasValors = $this->TabelasReajustes->TabelasValors->find('list', ['limit' => 200]);
        $this->set(compact('tabelasReajuste', 'tabelasValors'));
        $this->set('_serialize', ['tabelasReajuste']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabelas Reajuste id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabelasReajuste = $this->TabelasReajustes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabelasReajuste = $this->TabelasReajustes->patchEntity($tabelasReajuste, $this->request->data);
            if ($this->TabelasReajustes->save($tabelasReajuste)) {
                $this->Flash->success(__('The tabelas reajuste has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tabelas reajuste could not be saved. Please, try again.'));
            }
        }
        $tabelasValors = $this->TabelasReajustes->TabelasValors->find('list', ['limit' => 200]);
        $this->set(compact('tabelasReajuste', 'tabelasValors'));
        $this->set('_serialize', ['tabelasReajuste']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabelas Reajuste id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabelasReajuste = $this->TabelasReajustes->get($id);
        if ($this->TabelasReajustes->delete($tabelasReajuste)) {
            $this->Flash->success(__('The tabelas reajuste has been deleted.'));
        } else {
            $this->Flash->error(__('The tabelas reajuste could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
