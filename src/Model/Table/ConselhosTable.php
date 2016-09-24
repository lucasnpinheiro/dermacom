<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Conselhos Model
 *
 * @property \Cake\ORM\Association\HasMany $Funcionarios
 * @property \Cake\ORM\Association\HasMany $Prestadores
 *
 * @method \App\Model\Entity\Conselho get($primaryKey, $options = [])
 * @method \App\Model\Entity\Conselho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Conselho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Conselho|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Conselho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Conselho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Conselho findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConselhosTable extends Table {

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

        $this->table('conselhos');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Funcionarios', [
            'foreignKey' => 'conselho_id'
        ]);
        $this->hasMany('Prestadores', [
            'foreignKey' => 'conselho_id'
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
