<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Escolaridades Model
 *
 * @property \Cake\ORM\Association\HasMany $Pacientes
 *
 * @method \App\Model\Entity\Escolaridade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escolaridade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Escolaridade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escolaridade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EscolaridadesTable extends Table {

    use \App\Model\Traits\FuncoesTraits,
        \App\Model\Traits\SearchTraits;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('escolaridades');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Pacientes', [
            'foreignKey' => 'escolaridade_id'
        ]);
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
