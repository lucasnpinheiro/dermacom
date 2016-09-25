<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prestadore Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $razao_social
 * @property int $status
 * @property int $especialidade_id
 * @property string $cep
 * @property string $endereco
 * @property string $numero
 * @property string $complememnto
 * @property string $bairro
 * @property string $cidade
 * @property string $estado
 * @property string $cnpj
 * @property string $inscricao
 * @property string $cpf
 * @property string $rg
 * @property \Cake\I18n\Time $data_nascimento
 * @property string $banco
 * @property string $agencia
 * @property string $conta
 * @property int $tabelas_preco_id
 * @property int $conselho_id
 * @property string $numero_conselho
 * @property string $estado_conselho
 * @property string $centro_custo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Especialidade $especialidade
 * @property \App\Model\Entity\TabelasPreco $tabelas_preco
 * @property \App\Model\Entity\Conselho $conselho
 */
class Prestadore extends Entity
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
