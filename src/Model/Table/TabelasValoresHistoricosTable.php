<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TabelasValoresHistoricos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TabelasPrecos
 * @property \Cake\ORM\Association\BelongsTo $Reajustes
 *
 * @method \App\Model\Entity\TabelasValoresHistorico get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabelasValoresHistorico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabelasValoresHistorico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabelasValoresHistorico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabelasValoresHistorico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasValoresHistorico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasValoresHistorico findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabelasValoresHistoricosTable extends Table
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

        $this->table('tabelas_valores_historicos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TabelasPrecos', [
            'foreignKey' => 'tabelas_preco_id'
        ]);
        $this->belongsTo('Reajustes', [
            'foreignKey' => 'reajuste_id'
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
            ->numeric('valor repasse')
            ->allowEmpty('valor repasse');

        $validator
            ->date('data_inicio')
            ->allowEmpty('data_inicio');

        $validator
            ->date('data_fim')
            ->allowEmpty('data_fim');

        $validator
            ->dateTime('reated')
            ->allowEmpty('reated');

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
        $rules->add($rules->existsIn(['reajuste_id'], 'Reajustes'));

        return $rules;
    }
}
