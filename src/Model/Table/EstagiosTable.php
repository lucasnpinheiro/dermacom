<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estagios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Lesoes
 * @property \Cake\ORM\Association\BelongsTo $Classificacoes
 *
 * @method \App\Model\Entity\Estagio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estagio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estagio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estagio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estagio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estagio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estagio findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstagiosTable extends Table
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

        $this->table('estagios');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Lesoes', [
            'foreignKey' => 'lesao_id'
        ]);
        $this->belongsTo('Classificacoes', [
            'foreignKey' => 'classificacao_id'
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
            ->allowEmpty('codigo');

        $validator
            ->allowEmpty('nome');

        $validator
            ->integer('peso')
            ->allowEmpty('peso');

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
        $rules->add($rules->existsIn(['lesao_id'], 'Lesoes'));
        $rules->add($rules->existsIn(['classificacao_id'], 'Classificacoes'));

        return $rules;
    }
}
