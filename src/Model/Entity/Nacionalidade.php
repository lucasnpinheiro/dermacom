<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Nacionalidade Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $pais
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Paciente[] $pacientes
 */
class Nacionalidade extends Entity {

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
        'nome_pais',
    ];
    protected $_virtual = ['nome_pais'];

    protected function _getNomePais() {
        if (!empty($this->_properties['nome'])) {
            return $this->_properties['nome'] . '/' . $this->_properties['pais'];
        }
        return '';
    }

}
