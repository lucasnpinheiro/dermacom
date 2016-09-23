<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ComissoesTipos Model
 *
 * @property \Cake\ORM\Association\HasMany $Comissoes
 *
 * @method \App\Model\Entity\ComissoesTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ComissoesTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ComissoesTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ComissoesTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ComissoesTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ComissoesTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ComissoesTipo findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComissoesTiposTable extends Table
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

        $this->table('comissoes_tipos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comissoes', [
            'foreignKey' => 'comissoes_tipo_id'
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
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
