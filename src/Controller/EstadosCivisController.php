<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstadosCivis Controller
 *
 * @property \App\Model\Table\EstadosCivisTable $EstadosCivis
 */
class EstadosCivisController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $estadosCivis = $this->paginate($this->EstadosCivis);

        $this->set(compact('estadosCivis'));
        $this->set('_serialize', ['estadosCivis']);
    }

    /**
     * View method
     *
     * @param string|null $id Estados Civi id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadosCivi = $this->EstadosCivis->get($id, [
            'contain' => []
        ]);

        $this->set('estadosCivi', $estadosCivi);
        $this->set('_serialize', ['estadosCivi']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadosCivi = $this->EstadosCivis->newEntity();
        if ($this->request->is('post')) {
            $estadosCivi = $this->EstadosCivis->patchEntity($estadosCivi, $this->request->data);
            if ($this->EstadosCivis->save($estadosCivi)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('estadosCivi'));
        $this->set('_serialize', ['estadosCivi']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estados Civi id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadosCivi = $this->EstadosCivis->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadosCivi = $this->EstadosCivis->patchEntity($estadosCivi, $this->request->data);
            if ($this->EstadosCivis->save($estadosCivi)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('estadosCivi'));
        $this->set('_serialize', ['estadosCivi']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estados Civi id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadosCivi = $this->EstadosCivis->get($id);
        if ($this->EstadosCivis->delete($estadosCivi)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
