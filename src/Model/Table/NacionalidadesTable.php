<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nacionalidades Model
 *
 * @property \Cake\ORM\Association\HasMany $Pacientes
 *
 * @method \App\Model\Entity\Nacionalidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Nacionalidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Nacionalidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Nacionalidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Nacionalidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Nacionalidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Nacionalidade findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class NacionalidadesTable extends Table
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

        $this->table('nacionalidades');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pacientes', [
            'foreignKey' => 'nacionalidade_id'
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

        $validator
            ->allowEmpty('pais');

        return $validator;
    }
}
