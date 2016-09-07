<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CorporaisLesoes Controller
 *
 * @property \App\Model\Table\CorporaisLesoesTable $CorporaisLesoes
 */
class CorporaisLesoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Lesaos', 'Corporals']
        ];
        $corporaisLesoes = $this->paginate($this->CorporaisLesoes);

        $this->set(compact('corporaisLesoes'));
        $this->set('_serialize', ['corporaisLesoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Corporais Leso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $corporaisLeso = $this->CorporaisLesoes->get($id, [
            'contain' => ['Lesaos', 'Corporals']
        ]);

        $this->set('corporaisLeso', $corporaisLeso);
        $this->set('_serialize', ['corporaisLeso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $corporaisLeso = $this->CorporaisLesoes->newEntity();
        if ($this->request->is('post')) {
            $corporaisLeso = $this->CorporaisLesoes->patchEntity($corporaisLeso, $this->request->data);
            if ($this->CorporaisLesoes->save($corporaisLeso)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesaos = $this->CorporaisLesoes->Lesaos->find('list', ['limit' => 200]);
        $corporals = $this->CorporaisLesoes->Corporals->find('list', ['limit' => 200]);
        $this->set(compact('corporaisLeso', 'lesaos', 'corporals'));
        $this->set('_serialize', ['corporaisLeso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Corporais Leso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $corporaisLeso = $this->CorporaisLesoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $corporaisLeso = $this->CorporaisLesoes->patchEntity($corporaisLeso, $this->request->data);
            if ($this->CorporaisLesoes->save($corporaisLeso)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $lesaos = $this->CorporaisLesoes->Lesaos->find('list', ['limit' => 200]);
        $corporals = $this->CorporaisLesoes->Corporals->find('list', ['limit' => 200]);
        $this->set(compact('corporaisLeso', 'lesaos', 'corporals'));
        $this->set('_serialize', ['corporaisLeso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Corporais Leso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $corporaisLeso = $this->CorporaisLesoes->get($id);
        if ($this->CorporaisLesoes->delete($corporaisLeso)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
