<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prestadores Controller
 *
 * @property \App\Model\Table\PrestadoresTable $Prestadores
 */
class PrestadoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Especialidades', 'TabelasPrecos', 'Conselhos']
        ];
        $prestadores = $this->paginate($this->Prestadores);

        $this->set(compact('prestadores'));
        $this->set('_serialize', ['prestadores']);
    }

    /**
     * View method
     *
     * @param string|null $id Prestadore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $prestadore = $this->Prestadores->get($id, [
            'contain' => ['Especialidades', 'TabelasPrecos', 'Conselhos']
        ]);

        $this->set('prestadore', $prestadore);
        $this->set('_serialize', ['prestadore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $prestadore = $this->Prestadores->newEntity();
        if ($this->request->is('post')) {
            $prestadore = $this->Prestadores->patchEntity($prestadore, $this->request->data);
            if ($this->Prestadores->save($prestadore)) {
                $this->Flash->success(__('The prestadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prestadore could not be saved. Please, try again.'));
            }
        }
        $especialidades = $this->Prestadores->Especialidades->find('list', ['limit' => 200]);
        $tabelasPrecos = $this->Prestadores->TabelasPrecos->find('list', ['limit' => 200]);
        $conselhos = $this->Prestadores->Conselhos->find('list', ['limit' => 200]);
        $this->set(compact('prestadore', 'especialidades', 'tabelasPrecos', 'conselhos'));
        $this->set('_serialize', ['prestadore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Prestadore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $prestadore = $this->Prestadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $prestadore = $this->Prestadores->patchEntity($prestadore, $this->request->data);
            if ($this->Prestadores->save($prestadore)) {
                $this->Flash->success(__('The prestadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The prestadore could not be saved. Please, try again.'));
            }
        }
        $especialidades = $this->Prestadores->Especialidades->find('list', ['limit' => 200]);
        $tabelasPrecos = $this->Prestadores->TabelasPrecos->find('list', ['limit' => 200]);
        $conselhos = $this->Prestadores->Conselhos->find('list', ['limit' => 200]);
        $this->set(compact('prestadore', 'especialidades', 'tabelasPrecos', 'conselhos'));
        $this->set('_serialize', ['prestadore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Prestadore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $prestadore = $this->Prestadores->get($id);
        if ($this->Prestadores->delete($prestadore)) {
            $this->Flash->success(__('The prestadore has been deleted.'));
        } else {
            $this->Flash->error(__('The prestadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
