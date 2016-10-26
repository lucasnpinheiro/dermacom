<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paciente Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $status
 * @property string $cep
 * @property string $endereco
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cpf
 * @property string $rg
 * @property \Cake\I18n\Time $data_nascimento
 * @property int $sexo_id
 * @property string $foto
 * @property string $casrtao_sus
 * @property int $estados_civil_id
 * @property int $escolaridade_id
 * @property int $profissao_id
 * @property string $naturalidade
 * @property int $nacionalidade_id
 * @property int $religiao_id
 * @property int $cor_id
 * @property string $centro_custo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Sexo $sexo
 * @property \App\Model\Entity\EstadosCivil $estados_civil
 * @property \App\Model\Entity\Escolaridade $escolaridade
 * @property \App\Model\Entity\Profissao $profissao
 * @property \App\Model\Entity\Nacionalidade $nacionalidade
 * @property \App\Model\Entity\Religiao $religiao
 * @property \App\Model\Entity\Cor $cor
 * @property \App\Model\Entity\PacientesAcompanhamento[] $pacientes_acompanhamentos
 * @property \App\Model\Entity\PacientesEmergencia[] $pacientes_emergencias
 * @property \App\Model\Entity\PacientesServico[] $pacientes_servicos
 * @property \App\Model\Entity\PacientesSoube[] $pacientes_soube
 * @property \App\Model\Entity\Convenio[] $convenios
 * @property \App\Model\Entity\Midia[] $midias
 */
class Paciente extends Entity {

    use \App\Model\Traits\FuncoesTraits;

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'cpf_mask',
        'status_mask',
    ];
    protected $_virtual = ['cpf_mask', 'status_mask'];

    protected function _getCpfMask() {
        if (!empty($this->_properties['cpf'])) {
            return $this->mask($this->_properties['cpf'], '###.###.###-##');
        }
        return '';
    }

    protected function _getStatusMask() {
        switch ($this->_properties['status']) {
            case 0:
            case '0':
                return 'Inativo';

                break;

            case 1:
            case '1':
                return 'Ativo';

                break;

            case 9:
            case '9':
                return 'Excluido';

                break;

            default:
                return 'Não informado';
                break;
        }
    }

}
