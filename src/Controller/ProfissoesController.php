<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Profissoes Controller
 *
 * @property \App\Model\Table\ProfissoesTable $Profissoes
 */
class ProfissoesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $profissoes = $this->paginate($this->Profissoes);

        $this->set(compact('profissoes'));
        $this->set('_serialize', ['profissoes']);
    }

    /**
     * View method
     *
     * @param string|null $id Profisso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profisso = $this->Profissoes->get($id, [
            'contain' => []
        ]);

        $this->set('profisso', $profisso);
        $this->set('_serialize', ['profisso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profisso = $this->Profissoes->newEntity();
        if ($this->request->is('post')) {
            $profisso = $this->Profissoes->patchEntity($profisso, $this->request->data);
            if ($this->Profissoes->save($profisso)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('profisso'));
        $this->set('_serialize', ['profisso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profisso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profisso = $this->Profissoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profisso = $this->Profissoes->patchEntity($profisso, $this->request->data);
            if ($this->Profissoes->save($profisso)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $this->set(compact('profisso'));
        $this->set('_serialize', ['profisso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profisso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profisso = $this->Profissoes->get($id);
        if ($this->Profissoes->delete($profisso)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
