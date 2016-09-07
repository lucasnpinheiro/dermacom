<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lesoes Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Corporais
 *
 * @method \App\Model\Entity\Leso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Leso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Leso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Leso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Leso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Leso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Leso findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LesoesTable extends Table
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

        $this->table('lesoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Corporais', [
            'foreignKey' => 'leso_id',
            'targetForeignKey' => 'corporai_id',
            'joinTable' => 'corporais_lesoes'
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
