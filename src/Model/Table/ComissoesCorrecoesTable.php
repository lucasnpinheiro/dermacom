<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * ComissoesCorrecoes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Comissoes
 *
 * @method \App\Model\Entity\ComissoesCorreco get($primaryKey, $options = [])
 * @method \App\Model\Entity\ComissoesCorreco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ComissoesCorreco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ComissoesCorreco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ComissoesCorreco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ComissoesCorreco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ComissoesCorreco findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComissoesCorrecoesTable extends Table {

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

        $this->table('comissoes_correcoes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Comissoes', [
            'foreignKey' => 'comissao_id'
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
                ->requirePresence('ano')
                ->integer('ano')
                ->notBlank('ano');

        $validator
                ->requirePresence('comissao_id')
                ->integer('comissao_id')
                ->notBlank('comissao_id');

        $validator
                ->requirePresence('mes')
                ->notBlank('mes');

        $validator
                ->requirePresence('percentual')
                ->decimal('percentual')
                ->notBlank('percentual');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules) {
        return $rules;
    }

}
