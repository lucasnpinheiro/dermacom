<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Pacientes Controller
 *
 * @property \App\Model\Table\PacientesTable $Pacientes
 */
class PacientesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        
    }

    public function indexLoad() {
        $this->loadComponent('Search.Prg');
        $query = $this->{$this->modelClass}->find('search', $this->{$this->modelClass}->filterParams($this->request->query))
                ->where([$this->modelClass . '.status !=' => $this->{$this->modelClass}->statusExcluido]);
        $result = $this->paginate($query);
        if (count($result) > 0) {
            $this->sendResponse($result, 200);
        } else {
            $this->sendResponse($result, 216);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $paciente = $this->Pacientes->get($id, [
            'contain' => ['Sexos', 'EstadosCivis', 'Escolaridades', 'Profissoes', 'Nacionalidades', 'Religioes', 'Cores', 'Convenios', 'Midias', 'PacientesAcompanhamentos', 'PacientesEmergencias', 'PacientesServicos', 'PacientesSoube']
        ]);

        $this->set('paciente', $paciente);
        $this->set('_serialize', ['paciente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $paciente = $this->Pacientes->newEntity();
        $paciente->id = null;
        $paciente->nome = null;
        $paciente->status = 1;
        $paciente->cep = null;
        $paciente->endereco = null;
        $paciente->numero = null;
        $paciente->complemento = null;
        $paciente->bairro = null;
        $paciente->cidade = null;
        $paciente->estado = null;
        $paciente->cpf = null;
        $paciente->rg = null;
        $paciente->data_nascimento = null;
        $paciente->sexo_id = null;
        $paciente->foto = null;
        $paciente->cartao_sus = null;
        $paciente->estados_civil_id = null;
        $paciente->escolaridade_id = null;
        $paciente->profissao_id = null;
        $paciente->naturalidade = null;
        $paciente->nacionalidade_id = null;
        $paciente->religiao_id = null;
        $paciente->cor_id = null;
        $paciente->centro_custo = null;
        $paciente->created = null;
        $paciente->modified = null;
        $paciente->cpf_mask = null;
        $paciente->idade = null;
        $this->_setData($paciente);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $paciente = $this->Pacientes->get($id, [
            'contain' => [
                'Convenios',
                'Midias',
                'PacientesAcompanhamentos' => function($q) {
                    return $q->where(['PacientesAcompanhamentos.status' => 1])->contain('Especialidades');
                },
                'PacientesEmergencias' => function($q) {
                    return $q->where(['PacientesEmergencias.status' => 1])->contain('Parentescos');
                },
                'PacientesProgramacoes' => function($q) {
                    return $q->where(['PacientesProgramacoes.status' => 1])->contain('Usuarios');
                },
                'PacientesServicos' => function($q) {
                    return $q->where(['PacientesServicos.status' => 1])->contain('ServicosClinicas');
                },
                'Contatos',
                'PacientesSoube'
            ]
        ]);
        $this->_setData($paciente);
    }

    private function _setData($paciente) {
        $sexos = $this->Pacientes->Sexos->find()->all();
        $estadosCivils = $this->Pacientes->EstadosCivis->find()->all();
        $escolaridades = $this->Pacientes->Escolaridades->find()->all();
        $profissaos = $this->Pacientes->Profissoes->find()->all();
        $nacionalidades = $this->Pacientes->Nacionalidades->find()->all();
        $religiaos = $this->Pacientes->Religioes->find()->all();
        $cors = $this->Pacientes->Cores->find()->all();
        $convenios = $this->Pacientes->Convenios->find()->all();
        $midias = $this->Pacientes->Midias->find()->all();
        $this->loadModel('Especialidades');
        $this->loadModel('Parentescos');
        $this->loadModel('Usuarios');
        $this->loadModel('ServicosClinicas');
        $this->loadModel('ContatosTipos');
        $especialidades = $this->Especialidades->find()->all();
        $parentescos = $this->Parentescos->find()->all();
        $usuarios = $this->Usuarios->find()->all();
        $servicosClinicas = $this->ServicosClinicas->find()->all();
        $contatosTipos = $this->ContatosTipos->find()->all();
        $this->set(compact('contatosTipos', 'servicosClinicas', 'usuarios', 'parentescos', 'especialidades', 'paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors', 'convenios', 'midias'));
        $this->set('_serialize', ['paciente']);
    }

    public function gravar() {
        $id = $this->request->data('id');
        unset($this->request->data['id']);
        if (!empty($id)) {
            $paciente = $this->Pacientes->get($id);
        } else {
            $paciente = $this->Pacientes->newEntity();
        }
        $__data = $this->request->data;
        array_walk_recursive($__data, 'Capitalize');
        //debug($this->request->data);
        //$this->request->data = $__data;
        //debug($__data);
        $paciente = $this->Pacientes->patchEntity($paciente, $__data, ['associated' => []]);
        if ($this->Pacientes->save($paciente)) {
            $this->savePacientesServicos($paciente);
            $this->savePacientesAcompanhamentos($paciente);
            $this->savePacientesEmergencias($paciente);
            $this->savePacientesProgramacoes($paciente);
            $this->sendResponse($paciente, 200);
        } else {
            $this->sendResponse($paciente->errors(), 214);
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Paciente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $paciente = $this->Pacientes->get($id);
        if ($this->Pacientes->delete($paciente)) {
            $this->Flash->success(__('Registro removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possivel removido o registro.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private function savePacientesServicos($paciente) {
        $this->loadModel('PacientesServicos');
        $this->PacientesServicos->updateAll(['status' => $this->PacientesServicos->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['pacientes_servicos'])) {
            foreach ($this->request->data['pacientes_servicos'] as $key => $value) {
                $servicos = $this->PacientesServicos->newEntity();
                if (!empty($value['id'])) {
                    $servicos = $this->PacientesServicos->get($value['id']);
                    if (count($servicos) === 0) {
                        $servicos = $this->PacientesServicos->newEntity();
                    }
                }

                $servicos->paciente_id = $paciente->id;
                $servicos->status = $this->PacientesServicos->statusAtivo;
                $servicos->servicos_clinica_id = $value['servicos_clinica_id'];
                $this->PacientesServicos->save($servicos);
            }
        }
        return true;
    }

    private function savePacientesProgramacoes($paciente) {
        $this->loadModel('PacientesProgramacoes');
        $this->PacientesProgramacoes->updateAll(['status' => $this->PacientesProgramacoes->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['pacientes_programacoes'])) {
            foreach ($this->request->data['pacientes_programacoes'] as $key => $value) {
                $programacoes = $this->PacientesProgramacoes->newEntity();
                if (!empty($value['id'])) {
                    $programacoes = $this->PacientesProgramacoes->get($value['id']);
                    if (count($programacoes) === 0) {
                        $programacoes = $this->PacientesProgramacoes->newEntity();
                    }
                }

                $programacoes->paciente_id = $paciente->id;
                $programacoes->status = $this->PacientesProgramacoes->statusAtivo;
                $programacoes->usuario_id = $value['usuario_id'];
                $programacoes->motivo = $value['motivo'];
                $programacoes->data = date('Y-m-d', strtotime($value['data']));
                $programacoes->hora = date('H:i:s', strtotime($value['hora']));
                $this->PacientesProgramacoes->save($programacoes);
            }
        }
        return true;
    }

    private function savePacientesEmergencias($paciente) {
        $this->loadModel('PacientesEmergencias');
        $this->PacientesEmergencias->updateAll(['status' => $this->PacientesEmergencias->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['pacientes_emergencias'])) {
            foreach ($this->request->data['pacientes_emergencias'] as $key => $value) {
                $emergencias = $this->PacientesEmergencias->newEntity();
                if (!empty($value['id'])) {
                    $emergencias = $this->PacientesEmergencias->get($value['id']);
                    if (count($emergencias) === 0) {
                        $emergencias = $this->PacientesEmergencias->newEntity();
                    }
                }

                $emergencias->paciente_id = $paciente->id;
                $emergencias->status = $this->PacientesEmergencias->statusAtivo;
                $emergencias->nome = $value['nome'];
                $emergencias->parentesco_id = $value['parentesco_id'];
                $emergencias->telefone = $value['telefone'];
                $this->PacientesEmergencias->save($emergencias);
            }
        }
        return true;
    }

    private function savePacientesAcompanhamentos($paciente) {
        $this->loadModel('PacientesAcompanhamentos');
        $this->PacientesAcompanhamentos->updateAll(['status' => $this->PacientesAcompanhamentos->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['pacientes_acompanhamentos'])) {
            foreach ($this->request->data['pacientes_acompanhamentos'] as $key => $value) {
                $acompanhamentos = $this->PacientesAcompanhamentos->newEntity();
                if (!empty($value['id'])) {
                    $acompanhamentos = $this->PacientesAcompanhamentos->get($value['id']);
                    if (count($acompanhamentos) === 0) {
                        $acompanhamentos = $this->PacientesAcompanhamentos->newEntity();
                    }
                }

                $acompanhamentos->paciente_id = $paciente->id;
                $acompanhamentos->status = $this->PacientesAcompanhamentos->statusAtivo;
                $acompanhamentos->especialidade_id = $value['especialidade_id'];
                $acompanhamentos->medico = $value['medico'];
                $acompanhamentos->telefone = $value['telefone'];
                $this->PacientesAcompanhamentos->save($acompanhamentos);
            }
        }
        return true;
    }

}
