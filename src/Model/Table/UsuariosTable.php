<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsuariosTable extends Table {

    use \App\Model\Traits\FuncoesTraits,
        \App\Model\Traits\SearchTraits;

    public $statusInativo = 0;
    public $statusAtivo = 1;
    public $statusExcluido = 9;
    public $rootSim = 1;
    public $rootNao = 0;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->table('usuarios');
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
                ->notBlank('nome')
                ->requirePresence('nome');

        $validator
                ->requirePresence('login')
                ->notBlank('login');

        $validator
                ->requirePresence('senha', 'create')
                ->notBlank('senha', 'create')
                ->allowEmpty('senha', 'update');

        $validator
                ->requirePresence('status')
                ->integer('status')
                ->notBlank('status');

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
        $rules->add($rules->isUnique(['login']));

        return $rules;
    }

    public function beforeSave(\Cake\Event\Event $event, \Cake\ORM\Entity $entity) {
        if (!empty($entity->senha) AND trim($entity->senha) != '' AND strlen($entity->senha) < 50) {
            $hasher = new \Cake\Auth\DefaultPasswordHasher();
            $entity->senha = $hasher->hash($entity->senha);
        } else {
            unset($entity->senha);
        }

        if (!empty($entity->root) AND $entity->root === 1) {
            $entity->root = 1;
        } else {
            $entity->root = 0;
        }

        return true;
    }

}
