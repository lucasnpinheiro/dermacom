<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ComissoesCorrecoes Controller
 *
 * @property \App\Model\Table\ComissoesCorrecoesTable $ComissoesCorrecoes
 */
class ComissoesCorrecoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Comissaos']
        ];
        $comissoesCorrecoes = $this->paginate($this->ComissoesCorrecoes);

        $this->set(compact('comissoesCorrecoes'));
        $this->set('_serialize', ['comissoesCorrecoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Comissoes Correco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comissoesCorreco = $this->ComissoesCorrecoes->get($id, [
            'contain' => ['Comissaos']
        ]);

        $this->set('comissoesCorreco', $comissoesCorreco);
        $this->set('_serialize', ['comissoesCorreco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comissoesCorreco = $this->ComissoesCorrecoes->newEntity();
        if ($this->request->is('post')) {
            $comissoesCorreco = $this->ComissoesCorrecoes->patchEntity($comissoesCorreco, $this->request->data);
            if ($this->ComissoesCorrecoes->save($comissoesCorreco)) {
                $this->Flash->success(__('The comissoes correco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comissoes correco could not be saved. Please, try again.'));
            }
        }
        $comissaos = $this->ComissoesCorrecoes->Comissaos->find('list', ['limit' => 200]);
        $this->set(compact('comissoesCorreco', 'comissaos'));
        $this->set('_serialize', ['comissoesCorreco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comissoes Correco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comissoesCorreco = $this->ComissoesCorrecoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comissoesCorreco = $this->ComissoesCorrecoes->patchEntity($comissoesCorreco, $this->request->data);
            if ($this->ComissoesCorrecoes->save($comissoesCorreco)) {
                $this->Flash->success(__('The comissoes correco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comissoes correco could not be saved. Please, try again.'));
            }
        }
        $comissaos = $this->ComissoesCorrecoes->Comissaos->find('list', ['limit' => 200]);
        $this->set(compact('comissoesCorreco', 'comissaos'));
        $this->set('_serialize', ['comissoesCorreco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comissoes Correco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comissoesCorreco = $this->ComissoesCorrecoes->get($id);
        if ($this->ComissoesCorrecoes->delete($comissoesCorreco)) {
            $this->Flash->success(__('The comissoes correco has been deleted.'));
        } else {
            $this->Flash->error(__('The comissoes correco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
