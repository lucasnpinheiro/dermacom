<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lesoes Controller
 *
 * @property \App\Model\Table\LesoesTable $Lesoes
 */
class LesoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $lesoes = $this->paginate($this->Lesoes);

        $this->set(compact('lesoes'));
        $this->set('_serialize', ['lesoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Leso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $leso = $this->Lesoes->get($id, [
            'contain' => ['Corporais']
        ]);

        $this->set('leso', $leso);
        $this->set('_serialize', ['leso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $leso = $this->Lesoes->newEntity();
        if ($this->request->is('post')) {
            $leso = $this->Lesoes->patchEntity($leso, $this->request->data);
            if ($this->Lesoes->save($leso)) {
                $this->Flash->success(__('The leso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The leso could not be saved. Please, try again.'));
            }
        }
        $corporais = $this->Lesoes->Corporais->find('list', ['limit' => 200]);
        $this->set(compact('leso', 'corporais'));
        $this->set('_serialize', ['leso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Leso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $leso = $this->Lesoes->get($id, [
            'contain' => ['Corporais']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $leso = $this->Lesoes->patchEntity($leso, $this->request->data);
            if ($this->Lesoes->save($leso)) {
                $this->Flash->success(__('The leso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The leso could not be saved. Please, try again.'));
            }
        }
        $corporais = $this->Lesoes->Corporais->find('list', ['limit' => 200]);
        $this->set(compact('leso', 'corporais'));
        $this->set('_serialize', ['leso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Leso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $leso = $this->Lesoes->get($id);
        if ($this->Lesoes->delete($leso)) {
            $this->Flash->success(__('The leso has been deleted.'));
        } else {
            $this->Flash->error(__('The leso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
