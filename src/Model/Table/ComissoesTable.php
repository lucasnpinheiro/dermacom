<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

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
class ComissoesTable extends Table {

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

        $this->table('comissoes');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->belongsTo('ComissoesTipos', [
            'foreignKey' => 'comissoes_tipo_id'
        ]);
        
        $this->hasMany('ComissoesCorrecoes', [
            'foreignKey' => 'comissao_id'
        ]);

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
                ->requirePresence('nome')
                ->notBlank('nome');

        $validator
                ->requirePresence('valor_maximo')
                ->decimal('valor_maximo')
                ->notBlank('valor_maximo');

        $validator
                ->requirePresence('comissao')
                ->decimal('comissao')
                ->notBlank('comissao');

        $validator
                ->requirePresence('status')
                ->integer('status')
                ->notBlank('status');

        $validator
                ->requirePresence('comissoes_tipo_id')
                ->integer('comissoes_tipo_id')
                ->notBlank('comissoes_tipo_id');

        return $validator;
    }

}
