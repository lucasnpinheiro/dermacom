<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Especialidades Model
 *
 * @property \Cake\ORM\Association\HasMany $PacientesAcompanhamentos
 * @property \Cake\ORM\Association\HasMany $PacientesSoube
 * @property \Cake\ORM\Association\HasMany $Prestadores
 *
 * @method \App\Model\Entity\Especialidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Especialidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Especialidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Especialidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Especialidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Especialidade findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EspecialidadesTable extends Table
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

        $this->table('especialidades');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('PacientesAcompanhamentos', [
            'foreignKey' => 'especialidade_id'
        ]);
        $this->hasMany('PacientesSoube', [
            'foreignKey' => 'especialidade_id'
        ]);
        $this->hasMany('Prestadores', [
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
            ->allowEmpty('nome');

        return $validator;
    }
}
