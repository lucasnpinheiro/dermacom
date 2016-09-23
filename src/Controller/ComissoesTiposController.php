<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ComissoesTipos Controller
 *
 * @property \App\Model\Table\ComissoesTiposTable $ComissoesTipos
 */
class ComissoesTiposController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $comissoesTipos = $this->paginate($this->ComissoesTipos);

        $this->set(compact('comissoesTipos'));
        $this->set('_serialize', ['comissoesTipos']);
    }

    /**
     * View method
     *
     * @param string|null $id Comissoes Tipo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comissoesTipo = $this->ComissoesTipos->get($id, [
            'contain' => ['Comissoes']
        ]);

        $this->set('comissoesTipo', $comissoesTipo);
        $this->set('_serialize', ['comissoesTipo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comissoesTipo = $this->ComissoesTipos->newEntity();
        if ($this->request->is('post')) {
            $comissoesTipo = $this->ComissoesTipos->patchEntity($comissoesTipo, $this->request->data);
            if ($this->ComissoesTipos->save($comissoesTipo)) {
                $this->Flash->success(__('The comissoes tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comissoes tipo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('comissoesTipo'));
        $this->set('_serialize', ['comissoesTipo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Comissoes Tipo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comissoesTipo = $this->ComissoesTipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comissoesTipo = $this->ComissoesTipos->patchEntity($comissoesTipo, $this->request->data);
            if ($this->ComissoesTipos->save($comissoesTipo)) {
                $this->Flash->success(__('The comissoes tipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The comissoes tipo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('comissoesTipo'));
        $this->set('_serialize', ['comissoesTipo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Comissoes Tipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comissoesTipo = $this->ComissoesTipos->get($id);
        if ($this->ComissoesTipos->delete($comissoesTipo)) {
            $this->Flash->success(__('The comissoes tipo has been deleted.'));
        } else {
            $this->Flash->error(__('The comissoes tipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
