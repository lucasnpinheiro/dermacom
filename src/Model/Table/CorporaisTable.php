<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Corporais Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Lesoes
 *
 * @method \App\Model\Entity\Corporai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Corporai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Corporai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Corporai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Corporai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Corporai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Corporai findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CorporaisTable extends Table
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

        $this->table('corporais');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Lesoes', [
            'foreignKey' => 'corporai_id',
            'targetForeignKey' => 'leso_id',
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
