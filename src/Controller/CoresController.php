<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cores Controller
 *
 * @property \App\Model\Table\CoresTable $Cores
 */
class CoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $cores = $this->paginate($this->Cores);

        $this->set(compact('cores'));
        $this->set('_serialize', ['cores']);
    }

    /**
     * View method
     *
     * @param string|null $id Core id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $core = $this->Cores->get($id, [
            'contain' => []
        ]);

        $this->set('core', $core);
        $this->set('_serialize', ['core']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $core = $this->Cores->newEntity();
        if ($this->request->is('post')) {
            $core = $this->Cores->patchEntity($core, $this->request->data);
            if ($this->Cores->save($core)) {
                $this->Flash->success(__('The core has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The core could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('core'));
        $this->set('_serialize', ['core']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Core id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $core = $this->Cores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $core = $this->Cores->patchEntity($core, $this->request->data);
            if ($this->Cores->save($core)) {
                $this->Flash->success(__('The core has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The core could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('core'));
        $this->set('_serialize', ['core']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Core id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $core = $this->Cores->get($id);
        if ($this->Cores->delete($core)) {
            $this->Flash->success(__('The core has been deleted.'));
        } else {
            $this->Flash->error(__('The core could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
