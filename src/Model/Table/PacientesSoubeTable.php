<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PacientesSoube Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 * @property \Cake\ORM\Association\BelongsTo $Especialidades
 *
 * @method \App\Model\Entity\PacientesSoube get($primaryKey, $options = [])
 * @method \App\Model\Entity\PacientesSoube newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PacientesSoube[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PacientesSoube|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PacientesSoube patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PacientesSoube[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PacientesSoube findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PacientesSoubeTable extends Table
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

        $this->table('pacientes_soube');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->belongsTo('Especialidades', [
            'foreignKey' => 'especialidade_id'
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
            ->allowEmpty('como');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('telefone');

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
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        $rules->add($rules->existsIn(['especialidade_id'], 'Especialidades'));

        return $rules;
    }
}
