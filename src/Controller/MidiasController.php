<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Midias Controller
 *
 * @property \App\Model\Table\MidiasTable $Midias
 */
class MidiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contatotipos']
        ];
        $midias = $this->paginate($this->Midias);

        $this->set(compact('midias'));
        $this->set('_serialize', ['midias']);
    }

    /**
     * View method
     *
     * @param string|null $id Midia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $midia = $this->Midias->get($id, [
            'contain' => ['Contatotipos', 'Pacientes']
        ]);

        $this->set('midia', $midia);
        $this->set('_serialize', ['midia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $midia = $this->Midias->newEntity();
        if ($this->request->is('post')) {
            $midia = $this->Midias->patchEntity($midia, $this->request->data);
            if ($this->Midias->save($midia)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $contatotipos = $this->Midias->Contatotipos->find('list', ['limit' => 200]);
        $pacientes = $this->Midias->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('midia', 'contatotipos', 'pacientes'));
        $this->set('_serialize', ['midia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Midia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $midia = $this->Midias->get($id, [
            'contain' => ['Pacientes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $midia = $this->Midias->patchEntity($midia, $this->request->data);
            if ($this->Midias->save($midia)) {
                $this->Flash->success(__('Registro salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar o registro.'));
            }
        }
        $contatotipos = $this->Midias->Contatotipos->find('list', ['limit' => 200]);
        $pacientes = $this->Midias->Pacientes->find('list', ['limit' => 200]);
        $this->set(compact('midia', 'contatotipos', 'pacientes'));
        $this->set('_serialize', ['midia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Midia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $midia = $this->Midias->get($id);
        if ($this->Midias->delete($midia)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
