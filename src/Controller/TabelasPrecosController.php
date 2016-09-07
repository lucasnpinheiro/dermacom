<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TabelasPrecos Controller
 *
 * @property \App\Model\Table\TabelasPrecosTable $TabelasPrecos
 */
class TabelasPrecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tabelasPrecos = $this->paginate($this->TabelasPrecos);

        $this->set(compact('tabelasPrecos'));
        $this->set('_serialize', ['tabelasPrecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tabelas Preco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabelasPreco = $this->TabelasPrecos->get($id, [
            'contain' => ['Prestadores', 'TabelasValores', 'TabelasValoresHistoricos']
        ]);

        $this->set('tabelasPreco', $tabelasPreco);
        $this->set('_serialize', ['tabelasPreco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabelasPreco = $this->TabelasPrecos->newEntity();
        if ($this->request->is('post')) {
            $tabelasPreco = $this->TabelasPrecos->patchEntity($tabelasPreco, $this->request->data);
            if ($this->TabelasPrecos->save($tabelasPreco)) {
                $this->Flash->success(__('The tabelas preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tabelas preco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tabelasPreco'));
        $this->set('_serialize', ['tabelasPreco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabelas Preco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabelasPreco = $this->TabelasPrecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabelasPreco = $this->TabelasPrecos->patchEntity($tabelasPreco, $this->request->data);
            if ($this->TabelasPrecos->save($tabelasPreco)) {
                $this->Flash->success(__('The tabelas preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tabelas preco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tabelasPreco'));
        $this->set('_serialize', ['tabelasPreco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabelas Preco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabelasPreco = $this->TabelasPrecos->get($id);
        if ($this->TabelasPrecos->delete($tabelasPreco)) {
            $this->Flash->success(__('The tabelas preco has been deleted.'));
        } else {
            $this->Flash->error(__('The tabelas preco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
