<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estagios Controller
 *
 * @property \App\Model\Table\EstagiosTable $Estagios
 */
class EstagiosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lesaos', 'Classificacaos']
        ];
        $estagios = $this->paginate($this->Estagios);

        $this->set(compact('estagios'));
        $this->set('_serialize', ['estagios']);
    }

    /**
     * View method
     *
     * @param string|null $id Estagio id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estagio = $this->Estagios->get($id, [
            'contain' => ['Lesaos', 'Classificacaos']
        ]);

        $this->set('estagio', $estagio);
        $this->set('_serialize', ['estagio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estagio = $this->Estagios->newEntity();
        if ($this->request->is('post')) {
            $estagio = $this->Estagios->patchEntity($estagio, $this->request->data);
            if ($this->Estagios->save($estagio)) {
                $this->Flash->success(__('The estagio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estagio could not be saved. Please, try again.'));
            }
        }
        $lesaos = $this->Estagios->Lesaos->find('list', ['limit' => 200]);
        $classificacaos = $this->Estagios->Classificacaos->find('list', ['limit' => 200]);
        $this->set(compact('estagio', 'lesaos', 'classificacaos'));
        $this->set('_serialize', ['estagio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estagio id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estagio = $this->Estagios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estagio = $this->Estagios->patchEntity($estagio, $this->request->data);
            if ($this->Estagios->save($estagio)) {
                $this->Flash->success(__('The estagio has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estagio could not be saved. Please, try again.'));
            }
        }
        $lesaos = $this->Estagios->Lesaos->find('list', ['limit' => 200]);
        $classificacaos = $this->Estagios->Classificacaos->find('list', ['limit' => 200]);
        $this->set(compact('estagio', 'lesaos', 'classificacaos'));
        $this->set('_serialize', ['estagio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estagio id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estagio = $this->Estagios->get($id);
        if ($this->Estagios->delete($estagio)) {
            $this->Flash->success(__('The estagio has been deleted.'));
        } else {
            $this->Flash->error(__('The estagio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
