<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabelasPrecos Model
 *
 * @property \Cake\ORM\Association\HasMany $Prestadores
 * @property \Cake\ORM\Association\HasMany $TabelasValores
 * @property \Cake\ORM\Association\HasMany $TabelasValoresHistoricos
 *
 * @method \App\Model\Entity\TabelasPreco get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabelasPreco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabelasPreco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabelasPreco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabelasPreco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasPreco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasPreco findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabelasPrecosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('tabelas_precos');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Prestadores', [
            'foreignKey' => 'tabelas_preco_id'
        ]);
        $this->hasMany('TabelasValores', [
            'foreignKey' => 'tabelas_preco_id'
        ]);
        $this->hasMany('TabelasValoresHistoricos', [
            'foreignKey' => 'tabelas_preco_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nome');

        return $validator;
    }
}
