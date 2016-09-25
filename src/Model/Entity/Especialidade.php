<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Especialidade Entity
 *
 * @property int $id
 * @property string $nome
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\PacientesAcompanhamento[] $pacientes_acompanhamentos
 * @property \App\Model\Entity\PacientesSoube[] $pacientes_soube
 * @property \App\Model\Entity\Prestadore[] $prestadores
 */
class Especialidade extends Entity
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
