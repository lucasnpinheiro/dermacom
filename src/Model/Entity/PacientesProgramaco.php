<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PacientesProgramaco Entity
 *
 * @property int $id
 * @property int $paciente_id
 * @property int $usuario_id
 * @property string $motivo
 * @property \Cake\I18n\Time $data
 * @property \Cake\I18n\Time $hora
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente $paciente
 * @property \App\Model\Entity\Usuario $usuario
 */
class PacientesProgramaco extends Entity
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
