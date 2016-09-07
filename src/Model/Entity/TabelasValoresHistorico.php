<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TabelasValoresHistorico Entity
 *
 * @property int $id
 * @property int $tabelas_preco_id
 * @property int $status
 * @property float $valor_origem
 * @property float $valor repasse
 * @property \Cake\I18n\Time $data_inicio
 * @property \Cake\I18n\Time $data_fim
 * @property int $reajuste_id
 * @property \Cake\I18n\Time $reated
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\TabelasPreco $tabelas_preco
 * @property \App\Model\Entity\Reajuste $reajuste
 */
class TabelasValoresHistorico extends Entity
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
