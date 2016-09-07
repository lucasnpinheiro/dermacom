<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TabelasReajuste Entity
 *
 * @property int $id
 * @property int $tabelas_valor_id
 * @property int $status
 * @property int $anto
 * @property string $mes
 * @property int $tipo_calculo
 * @property float $valor
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\TabelasValor $tabelas_valor
 */
class TabelasReajuste extends Entity
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
