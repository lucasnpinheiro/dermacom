<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * ContatosTipos Model
 *
 * @property \Cake\ORM\Association\HasMany $Contatos
 *
 * @method \App\Model\Entity\ContatosTipo get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContatosTipo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ContatosTipo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContatosTipo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContatosTipo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContatosTipo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContatosTipo findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContatosTiposTable extends Table {

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

        $this->table('contatos_tipos');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Contatos', [
            'foreignKey' => 'contatos_tipo_id'
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
