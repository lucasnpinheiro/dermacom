<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CorporaisLesoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Lesaos
 * @property \Cake\ORM\Association\BelongsTo $Corporals
 *
 * @method \App\Model\Entity\CorporaisLeso get($primaryKey, $options = [])
 * @method \App\Model\Entity\CorporaisLeso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CorporaisLeso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CorporaisLeso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CorporaisLeso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CorporaisLeso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CorporaisLeso findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CorporaisLesoesTable extends Table
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

        $this->table('corporais_lesoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lesaos', [
            'foreignKey' => 'lesao_id'
        ]);
        $this->belongsTo('Corporals', [
            'foreignKey' => 'corporal_id'
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
        $rules->add($rules->existsIn(['lesao_id'], 'Lesaos'));
        $rules->add($rules->existsIn(['corporal_id'], 'Corporals'));

        return $rules;
    }
}
