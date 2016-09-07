<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contatos Controller
 *
 * @property \App\Model\Table\ContatosTable $Contatos
 */
class ContatosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ContatosTipos', 'Parentescos']
        ];
        $contatos = $this->paginate($this->Contatos);

        $this->set(compact('contatos'));
        $this->set('_serialize', ['contatos']);
    }

    /**
     * View method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contato = $this->Contatos->get($id, [
            'contain' => ['ContatosTipos', 'Parentescos']
        ]);

        $this->set('contato', $contato);
        $this->set('_serialize', ['contato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contato = $this->Contatos->newEntity();
        if ($this->request->is('post')) {
            $contato = $this->Contatos->patchEntity($contato, $this->request->data);
            if ($this->Contatos->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contato could not be saved. Please, try again.'));
            }
        }
        $contatosTipos = $this->Contatos->ContatosTipos->find('list', ['limit' => 200]);
        $parentescos = $this->Contatos->Parentescos->find('list', ['limit' => 200]);
        $this->set(compact('contato', 'contatosTipos', 'parentescos'));
        $this->set('_serialize', ['contato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contato = $this->Contatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contato = $this->Contatos->patchEntity($contato, $this->request->data);
            if ($this->Contatos->save($contato)) {
                $this->Flash->success(__('The contato has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contato could not be saved. Please, try again.'));
            }
        }
        $contatosTipos = $this->Contatos->ContatosTipos->find('list', ['limit' => 200]);
        $parentescos = $this->Contatos->Parentescos->find('list', ['limit' => 200]);
        $this->set(compact('contato', 'contatosTipos', 'parentescos'));
        $this->set('_serialize', ['contato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contato = $this->Contatos->get($id);
        if ($this->Contatos->delete($contato)) {
            $this->Flash->success(__('The contato has been deleted.'));
        } else {
            $this->Flash->error(__('The contato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
