<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Religioes Model
 *
 * @method \App\Model\Entity\Religio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Religio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Religio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Religio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Religio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Religio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Religio findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ReligioesTable extends Table {

    use \App\Model\Traits\FuncoesTraits,
        Search\Model\Behavior\SearchBehavior;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('religioes');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Search.Search');
    }

    public function searchConfiguration() {
        return $this->searchConfigurationDynamic();
    }

    private function searchConfigurationDynamic() {
        $search = $this->_searchConfigurationDynamic(new Manager($this));
        return $search;
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->allowEmpty('nome');

        return $validator;
    }

}
