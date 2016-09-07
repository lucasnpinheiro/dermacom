<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Comisso Entity
 *
 * @property int $id
 * @property string $nome
 * @property float $valor_maximo
 * @property float $comissao
 * @property int $status
 * @property \Cake\I18n\Time $crated
 * @property \Cake\I18n\Time $modified
 */
class Comisso extends Entity
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
