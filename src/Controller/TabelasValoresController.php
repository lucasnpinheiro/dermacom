<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TabelasValores Controller
 *
 * @property \App\Model\Table\TabelasValoresTable $TabelasValores
 */
class TabelasValoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TabelasPrecos', 'TabelasReajustes']
        ];
        $tabelasValores = $this->paginate($this->TabelasValores);

        $this->set(compact('tabelasValores'));
        $this->set('_serialize', ['tabelasValores']);
    }

    /**
     * View method
     *
     * @param string|null $id Tabelas Valore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabelasValore = $this->TabelasValores->get($id, [
            'contain' => ['TabelasPrecos', 'TabelasReajustes']
        ]);

        $this->set('tabelasValore', $tabelasValore);
        $this->set('_serialize', ['tabelasValore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabelasValore = $this->TabelasValores->newEntity();
        if ($this->request->is('post')) {
            $tabelasValore = $this->TabelasValores->patchEntity($tabelasValore, $this->request->data);
            if ($this->TabelasValores->save($tabelasValore)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $tabelasPrecos = $this->TabelasValores->TabelasPrecos->find('list', ['limit' => 200]);
        $reajustes = $this->TabelasValores->TabelasReajustes->find('list', ['limit' => 200]);
        $this->set(compact('tabelasValore', 'tabelasPrecos', 'reajustes'));
        $this->set('_serialize', ['tabelasValore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabelas Valore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabelasValore = $this->TabelasValores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabelasValore = $this->TabelasValores->patchEntity($tabelasValore, $this->request->data);
            if ($this->TabelasValores->save($tabelasValore)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $tabelasPrecos = $this->TabelasValores->TabelasPrecos->find('list', ['limit' => 200]);
        $reajustes = $this->TabelasValores->TabelasReajustes->find('list', ['limit' => 200]);
        $this->set(compact('tabelasValore', 'tabelasPrecos', 'reajustes'));
        $this->set('_serialize', ['tabelasValore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabelas Valore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabelasValore = $this->TabelasValores->get($id);
        if ($this->TabelasValores->delete($tabelasValore)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
