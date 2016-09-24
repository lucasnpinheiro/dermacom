<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

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
class ComissoesTiposTable extends Table {

    use \App\Model\Traits\FuncoesTraits,
        \App\Model\Traits\SearchTraits;

    public $statusInativo = 0;
    public $statusAtivo = 1;
    public $statusExcluido = 9;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('comissoes_tipos');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comissoes', [
            'foreignKey' => 'comissoes_tipo_id'
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
                ->requirePresence('nome')
                ->notBlank('nome');

        $validator
                ->requirePresence('status')
                ->integer('status')
                ->notBlank('status');

        return $validator;
    }

}
