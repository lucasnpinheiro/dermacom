<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parentescos Model
 *
 * @property \Cake\ORM\Association\HasMany $Contatos
 * @property \Cake\ORM\Association\HasMany $PacientesEmergencias
 *
 * @method \App\Model\Entity\Parentesco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parentesco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parentesco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parentesco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parentesco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parentesco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parentesco findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParentescosTable extends Table
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

        $this->table('parentescos');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Contatos', [
            'foreignKey' => 'parentesco_id'
        ]);
        $this->hasMany('PacientesEmergencias', [
            'foreignKey' => 'parentesco_id'
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
