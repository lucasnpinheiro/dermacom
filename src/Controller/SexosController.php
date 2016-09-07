<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sexos Controller
 *
 * @property \App\Model\Table\SexosTable $Sexos
 */
class SexosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $sexos = $this->paginate($this->Sexos);

        $this->set(compact('sexos'));
        $this->set('_serialize', ['sexos']);
    }

    /**
     * View method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sexo = $this->Sexos->get($id, [
            'contain' => ['Pacientes']
        ]);

        $this->set('sexo', $sexo);
        $this->set('_serialize', ['sexo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sexo = $this->Sexos->newEntity();
        if ($this->request->is('post')) {
            $sexo = $this->Sexos->patchEntity($sexo, $this->request->data);
            if ($this->Sexos->save($sexo)) {
                $this->Flash->success(__('The sexo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sexo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sexo'));
        $this->set('_serialize', ['sexo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sexo = $this->Sexos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sexo = $this->Sexos->patchEntity($sexo, $this->request->data);
            if ($this->Sexos->save($sexo)) {
                $this->Flash->success(__('The sexo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sexo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sexo'));
        $this->set('_serialize', ['sexo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sexo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sexo = $this->Sexos->get($id);
        if ($this->Sexos->delete($sexo)) {
            $this->Flash->success(__('The sexo has been deleted.'));
        } else {
            $this->Flash->error(__('The sexo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
