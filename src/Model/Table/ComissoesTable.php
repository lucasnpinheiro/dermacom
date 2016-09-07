<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Comissoes Model
 *
 * @method \App\Model\Entity\Comisso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Comisso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Comisso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Comisso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Comisso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Comisso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Comisso findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComissoesTable extends Table
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

        $this->table('comissoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->numeric('valor_maximo')
            ->allowEmpty('valor_maximo');

        $validator
            ->numeric('comissao')
            ->allowEmpty('comissao');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->dateTime('crated')
            ->allowEmpty('crated');

        return $validator;
    }
}
