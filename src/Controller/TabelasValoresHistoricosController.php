<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TabelasValoresHistoricos Controller
 *
 * @property \App\Model\Table\TabelasValoresHistoricosTable $TabelasValoresHistoricos
 */
class TabelasValoresHistoricosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TabelasPrecos', 'Reajustes']
        ];
        $tabelasValoresHistoricos = $this->paginate($this->TabelasValoresHistoricos);

        $this->set(compact('tabelasValoresHistoricos'));
        $this->set('_serialize', ['tabelasValoresHistoricos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tabelas Valores Historico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabelasValoresHistorico = $this->TabelasValoresHistoricos->get($id, [
            'contain' => ['TabelasPrecos', 'Reajustes']
        ]);

        $this->set('tabelasValoresHistorico', $tabelasValoresHistorico);
        $this->set('_serialize', ['tabelasValoresHistorico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabelasValoresHistorico = $this->TabelasValoresHistoricos->newEntity();
        if ($this->request->is('post')) {
            $tabelasValoresHistorico = $this->TabelasValoresHistoricos->patchEntity($tabelasValoresHistorico, $this->request->data);
            if ($this->TabelasValoresHistoricos->save($tabelasValoresHistorico)) {
                $this->Flash->success(__('The tabelas valores historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tabelas valores historico could not be saved. Please, try again.'));
            }
        }
        $tabelasPrecos = $this->TabelasValoresHistoricos->TabelasPrecos->find('list', ['limit' => 200]);
        $reajustes = $this->TabelasValoresHistoricos->Reajustes->find('list', ['limit' => 200]);
        $this->set(compact('tabelasValoresHistorico', 'tabelasPrecos', 'reajustes'));
        $this->set('_serialize', ['tabelasValoresHistorico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabelas Valores Historico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabelasValoresHistorico = $this->TabelasValoresHistoricos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabelasValoresHistorico = $this->TabelasValoresHistoricos->patchEntity($tabelasValoresHistorico, $this->request->data);
            if ($this->TabelasValoresHistoricos->save($tabelasValoresHistorico)) {
                $this->Flash->success(__('The tabelas valores historico has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tabelas valores historico could not be saved. Please, try again.'));
            }
        }
        $tabelasPrecos = $this->TabelasValoresHistoricos->TabelasPrecos->find('list', ['limit' => 200]);
        $reajustes = $this->TabelasValoresHistoricos->Reajustes->find('list', ['limit' => 200]);
        $this->set(compact('tabelasValoresHistorico', 'tabelasPrecos', 'reajustes'));
        $this->set('_serialize', ['tabelasValoresHistorico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabelas Valores Historico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabelasValoresHistorico = $this->TabelasValoresHistoricos->get($id);
        if ($this->TabelasValoresHistoricos->delete($tabelasValoresHistorico)) {
            $this->Flash->success(__('The tabelas valores historico has been deleted.'));
        } else {
            $this->Flash->error(__('The tabelas valores historico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
