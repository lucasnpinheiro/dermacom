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
        $paciente->foto_url = null;
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
                'Contatos' => function($q) {
                    return $q->contain('ContatosTipos');
                },
                'PacientesSoube' => function($q) {
                    return $q->contain('Especialidades');
                },
                'PacientesConvenios' => function($q) {
                    return $q->where(['PacientesConvenios.status' => 1])->contain('Convenios');
                }
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
        $this->loadModel('Especialidades');
        $this->loadModel('Parentescos');
        $this->loadModel('Usuarios');
        $this->loadModel('ServicosClinicas');
        $this->loadModel('ContatosTipos');
        $this->loadModel('Midias');
        $especialidades = $this->Especialidades->find()->all();
        $parentescos = $this->Parentescos->find()->all();
        $usuarios = $this->Usuarios->find()->all();
        $servicosClinicas = $this->ServicosClinicas->find()->all();
        $contatosTipos = $this->ContatosTipos->find()->all();
        $midias = $this->Midias->find()->contain('ContatosTipos')->all();
        if (!empty($paciente->id)) {
            $this->loadModel('PacientesMidias');
            $findPacientesMidias = $this->PacientesMidias->find()->where(['PacientesMidias.paciente_id' => $paciente->id])->all();
            if (count($findPacientesMidias) > 0) {
                $paciente->midias = [];
                foreach ($findPacientesMidias as $k => $v) {
                    $paciente->midias[] = $v->midia_id;
                }
            }
        }
        $this->set(compact('midias', 'convenios', 'contatosTipos', 'servicosClinicas', 'usuarios', 'parentescos', 'especialidades', 'paciente', 'sexos', 'estadosCivils', 'escolaridades', 'profissaos', 'nacionalidades', 'religiaos', 'cors'));
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
        $file = $this->base64ToImage($this->request->data['foto'], WWW_ROOT . 'files' . DS . 'pacientes' . DS);
        unset($this->request->data['foto']);
        $__data = $this->request->data;
        $__data['foto'] = $file;
        $paciente = $this->Pacientes->patchEntity($paciente, $__data, ['associated' => []]);
        if ($this->Pacientes->save($paciente)) {
            $this->saveContatos($paciente);
            $this->savePacientesServicos($paciente);
            $this->savePacientesAcompanhamentos($paciente);
            $this->savePacientesEmergencias($paciente);
            $this->savePacientesProgramacoes($paciente);
            $this->savePacientesSoube($paciente);
            $this->savePacientesConvenios($paciente);
            $this->savePacientesMidias($paciente);
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
        $paciente = $this->Pacientes->get($id);
        $paciente->status = $this->Pacientes->statusExcluido;
        if ($this->Pacientes->save($paciente)) {
            $this->sendResponse($paciente, 200);
        } else {
            $this->sendResponse($paciente->errors(), 412);
        }
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

    private function savePacientesSoube($paciente) {
        $this->loadModel('PacientesSoube');
        $this->PacientesSoube->updateAll(['status' => $this->PacientesSoube->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['pacientes_soube'])) {
            foreach ($this->request->data['pacientes_soube'] as $key => $value) {
                $servicos = $this->PacientesSoube->newEntity();
                if (!empty($value['id'])) {
                    $servicos = $this->PacientesSoube->get($value['id']);
                    if (count($servicos) === 0) {
                        $servicos = $this->PacientesSoube->newEntity();
                    }
                }

                $servicos->paciente_id = $paciente->id;
                $servicos->status = $this->PacientesSoube->statusAtivo;
                $servicos->como = $value['como'];
                $servicos->nome = $value['nome'];
                $servicos->telefone = $value['telefone'];
                $servicos->especialidade_id = $value['especialidade_id'];
                $this->PacientesSoube->save($servicos);
            }
        }
        return true;
    }

    private function saveContatos($paciente) {
        $this->loadModel('Contatos');
        $this->Contatos->updateAll(['status' => $this->Contatos->statusExcluido], ['referencia_id' => $paciente->id, 'tabela' => 'Pacientes']);
        if (!empty($this->request->data['contatos'])) {
            foreach ($this->request->data['contatos'] as $key => $value) {
                $servicos = $this->Contatos->newEntity();
                if (!empty($value['id'])) {
                    $servicos = $this->Contatos->get($value['id']);
                    if (count($servicos) === 0) {
                        $servicos = $this->Contatos->newEntity();
                    }
                }

                $servicos->referencia_id = $paciente->id;
                $servicos->tabela = 'Pacientes';
                $servicos->status = $this->Contatos->statusAtivo;
                $servicos->valor = $value['valor'];
                $servicos->contatos_tipo_id = $value['contatos_tipo_id'];
                $this->Contatos->save($servicos);
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

    private function savePacientesConvenios($paciente) {
        $this->loadModel('PacientesConvenios');
        $this->PacientesConvenios->updateAll(['status' => $this->PacientesConvenios->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['pacientes_convenios'])) {
            foreach ($this->request->data['pacientes_convenios'] as $key => $value) {
                $acompanhamentos = $this->PacientesConvenios->newEntity();
                if (!empty($value['id'])) {
                    $acompanhamentos = $this->PacientesConvenios->get($value['id']);
                    if (count($acompanhamentos) === 0) {
                        $acompanhamentos = $this->PacientesConvenios->newEntity();
                    }
                }

                $acompanhamentos->paciente_id = $paciente->id;
                $acompanhamentos->status = $this->PacientesConvenios->statusAtivo;
                $acompanhamentos->convenio_id = $value['convenio_id'];
                $acompanhamentos->plano = $value['plano'];
                $acompanhamentos->matricula = $value['matricula'];
                $acompanhamentos->titular = $value['titular'];
                $this->PacientesConvenios->save($acompanhamentos);
            }
        }
        return true;
    }

    private function savePacientesMidias($paciente) {
        $this->loadModel('PacientesMidias');
        $this->PacientesMidias->updateAll(['status' => $this->PacientesMidias->statusExcluido], ['paciente_id' => $paciente->id]);
        if (!empty($this->request->data['midias'])) {
            foreach ($this->request->data['midias'] as $key => $value) {
                $acompanhamentos = $this->PacientesMidias->newEntity();
                if (!empty($value['id'])) {
                    $acompanhamentos = $this->PacientesMidias->get($value['id']);
                    if (count($acompanhamentos) === 0) {
                        $acompanhamentos = $this->PacientesMidias->newEntity();
                    }
                }

                $acompanhamentos->paciente_id = $paciente->id;
                $acompanhamentos->status = $this->PacientesMidias->statusAtivo;
                $acompanhamentos->midia_id = $value;
                $this->PacientesMidias->save($acompanhamentos);
            }
        }
        return true;
    }

}
