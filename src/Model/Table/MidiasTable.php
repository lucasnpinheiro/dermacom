<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Midias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contatotipos
 * @property \Cake\ORM\Association\BelongsToMany $Pacientes
 *
 * @method \App\Model\Entity\Midia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Midia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Midia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Midia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Midia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Midia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Midia findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MidiasTable extends Table
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

        $this->table('midias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Contatotipos', [
            'foreignKey' => 'contatotipo_id'
        ]);
        $this->belongsToMany('Pacientes', [
            'foreignKey' => 'midia_id',
            'targetForeignKey' => 'paciente_id',
            'joinTable' => 'pacientes_midias'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['contatotipo_id'], 'Contatotipos'));

        return $rules;
    }
}
