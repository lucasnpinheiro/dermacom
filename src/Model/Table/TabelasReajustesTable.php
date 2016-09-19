<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * TabelasReajustes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $TabelasValores
 *
 * @method \App\Model\Entity\TabelasReajuste get($primaryKey, $options = [])
 * @method \App\Model\Entity\TabelasReajuste newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TabelasReajuste[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TabelasReajuste|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TabelasReajuste patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasReajuste[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TabelasReajuste findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TabelasReajustesTable extends Table {

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

        $this->table('tabelas_reajustes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('TabelasValores', [
            'foreignKey' => 'tabelas_valor_id'
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
                ->integer('status')
                ->allowEmpty('status');

        $validator
                ->integer('anto')
                ->allowEmpty('anto');

        $validator
                ->allowEmpty('mes');

        $validator
                ->integer('tipo_calculo')
                ->allowEmpty('tipo_calculo');

        $validator
                ->numeric('valor')
                ->allowEmpty('valor');

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
        $rules->add($rules->existsIn(['tabelas_valor_id'], 'TabelasValores'));

        return $rules;
    }

}
