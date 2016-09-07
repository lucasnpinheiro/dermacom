<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
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
 * @property int $conselho_id
 * @property string $numero_conselho
 * @property string $estado_conselho
 * @property \Cake\I18n\Time $data_admissao
 * @property int $cargo_id
 * @property int $recebe_comissao
 * @property int $cargos_salario_id
 * @property int $comissao_id
 * @property string $banco
 * @property string $agencia
 * @property string $conta
 * @property string $centro_custo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Conselho $conselho
 * @property \App\Model\Entity\Cargo $cargo
 * @property \App\Model\Entity\CargosSalario $cargos_salario
 * @property \App\Model\Entity\Comissao $comissao
 */
class Funcionario extends Entity
{

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
        'id' => false
    ];
}
