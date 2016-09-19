<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabelasValores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TabelasPrecos
 * @property \Cake\ORM\Association\BelongsTo $Reajustes
 *
 * @method \App\Model\Entity\TabelasValore get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabelasValore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabelasValore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabelasValore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabelasValore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasValore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasValore findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabelasValoresTable extends Table
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

        $this->table('tabelas_valores');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TabelasPrecos', [
            'foreignKey' => 'tabelas_preco_id'
        ]);
        $this->belongsTo('TabelasReajustes', [
            'foreignKey' => 'tabelas_reajuste_id'
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
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->numeric('valor_origem')
            ->allowEmpty('valor_origem');

        $validator
            ->numeric('valor_repasse')
            ->allowEmpty('valor_repasse');

        $validator
            ->date('data_inicio')
            ->allowEmpty('data_inicio');

        $validator
            ->date('data_fim')
            ->allowEmpty('data_fim');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['tabelas_preco_id'], 'TabelasPrecos'));
        $rules->add($rules->existsIn(['tabelas_reajuste_id'], 'TabelasReajustes'));

        return $rules;
    }
}
