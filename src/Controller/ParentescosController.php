<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parentescos Controller
 *
 * @property \App\Model\Table\ParentescosTable $Parentescos
 */
class ParentescosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $parentescos = $this->paginate($this->Parentescos);

        $this->set(compact('parentescos'));
        $this->set('_serialize', ['parentescos']);
    }

    /**
     * View method
     *
     * @param string|null $id Parentesco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parentesco = $this->Parentescos->get($id, [
            'contain' => ['Contatos', 'PacientesEmergencias']
        ]);

        $this->set('parentesco', $parentesco);
        $this->set('_serialize', ['parentesco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parentesco = $this->Parentescos->newEntity();
        if ($this->request->is('post')) {
            $parentesco = $this->Parentescos->patchEntity($parentesco, $this->request->data);
            if ($this->Parentescos->save($parentesco)) {
                $this->Flash->success(__('The parentesco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The parentesco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('parentesco'));
        $this->set('_serialize', ['parentesco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Parentesco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parentesco = $this->Parentescos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parentesco = $this->Parentescos->patchEntity($parentesco, $this->request->data);
            if ($this->Parentescos->save($parentesco)) {
                $this->Flash->success(__('The parentesco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The parentesco could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('parentesco'));
        $this->set('_serialize', ['parentesco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Parentesco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parentesco = $this->Parentescos->get($id);
        if ($this->Parentescos->delete($parentesco)) {
            $this->Flash->success(__('The parentesco has been deleted.'));
        } else {
            $this->Flash->error(__('The parentesco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
