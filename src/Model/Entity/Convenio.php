<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Convenio Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $status
 * @property string $razao_social
 * @property string $cep
 * @property string $endereco
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cnpj
 * @property string $inscricao
 * @property string $centro_custo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente[] $pacientes
 */
class Convenio extends Entity
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
       
    ];
}
