<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Comissoes Controller
 *
 * @property \App\Model\Table\ComissoesTable $Comissoes
 */
class ComissoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $comissoes = $this->paginate($this->Comissoes);

        $this->set(compact('comissoes'));
        $this->set('_serialize', ['comissoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Comisso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comisso = $this->Comissoes->get($id, [
            'contain' => []
        ]);

        $this->set('comisso', $comisso);
        $this->set('_serialize', ['comisso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comisso = $this->Comissoes->newEntity();
        if ($this->request->is('post')) {
            $comisso = $this->Comissoes->patchEntity($comisso, $this->request->data);
            if ($this->Comissoes->save($comisso)) {
                $this->Flash->success(__('The comisso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comisso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('comisso'));
        $this->set('_serialize', ['comisso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comisso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comisso = $this->Comissoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comisso = $this->Comissoes->patchEntity($comisso, $this->request->data);
            if ($this->Comissoes->save($comisso)) {
                $this->Flash->success(__('The comisso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comisso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('comisso'));
        $this->set('_serialize', ['comisso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comisso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comisso = $this->Comissoes->get($id);
        if ($this->Comissoes->delete($comisso)) {
            $this->Flash->success(__('The comisso has been deleted.'));
        } else {
            $this->Flash->error(__('The comisso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
