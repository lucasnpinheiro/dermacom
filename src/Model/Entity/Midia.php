<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Midia Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $contatotipo_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Contatotipo $contatotipo
 * @property \App\Model\Entity\Paciente[] $pacientes
 */
class Midia extends Entity
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
