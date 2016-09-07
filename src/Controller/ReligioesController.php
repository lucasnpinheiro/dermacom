<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Religioes Controller
 *
 * @property \App\Model\Table\ReligioesTable $Religioes
 */
class ReligioesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $religioes = $this->paginate($this->Religioes);

        $this->set(compact('religioes'));
        $this->set('_serialize', ['religioes']);
    }

    /**
     * View method
     *
     * @param string|null $id Religio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $religio = $this->Religioes->get($id, [
            'contain' => []
        ]);

        $this->set('religio', $religio);
        $this->set('_serialize', ['religio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $religio = $this->Religioes->newEntity();
        if ($this->request->is('post')) {
            $religio = $this->Religioes->patchEntity($religio, $this->request->data);
            if ($this->Religioes->save($religio)) {
                $this->Flash->success(__('The religio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The religio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('religio'));
        $this->set('_serialize', ['religio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Religio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $religio = $this->Religioes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $religio = $this->Religioes->patchEntity($religio, $this->request->data);
            if ($this->Religioes->save($religio)) {
                $this->Flash->success(__('The religio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The religio could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('religio'));
        $this->set('_serialize', ['religio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Religio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $religio = $this->Religioes->get($id);
        if ($this->Religioes->delete($religio)) {
            $this->Flash->success(__('The religio has been deleted.'));
        } else {
            $this->Flash->error(__('The religio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
