<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Funcionarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Conselhos
 * @property \Cake\ORM\Association\BelongsTo $Cargos
 * @property \Cake\ORM\Association\BelongsTo $CargosSalarios
 * @property \Cake\ORM\Association\BelongsTo $Comissoes
 *
 * @method \App\Model\Entity\Funcionario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcionario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FuncionariosTable extends Table {

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

        $this->table('funcionarios');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Conselhos', [
            'foreignKey' => 'conselho_id'
        ]);
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
                ->allowEmpty('nome');

        $validator
                ->integer('status')
                ->allowEmpty('status');

        $validator
                ->allowEmpty('cep');

        $validator
                ->allowEmpty('endereco');

        $validator
                ->allowEmpty('numero');

        $validator
                ->allowEmpty('complemento');

        $validator
                ->allowEmpty('bairro');

        $validator
                ->allowEmpty('cidade');

        $validator
                ->allowEmpty('estado');

        $validator
                ->allowEmpty('cpf');

        $validator
                ->allowEmpty('rg');

        $validator
                ->date('data_nascimento')
                ->allowEmpty('data_nascimento');

        $validator
                ->allowEmpty('numero_conselho');

        $validator
                ->allowEmpty('estado_conselho');

        $validator
                ->date('data_admissao')
                ->allowEmpty('data_admissao');

        $validator
                ->integer('recebe_comissao')
                ->allowEmpty('recebe_comissao');

        $validator
                ->allowEmpty('banco');

        $validator
                ->allowEmpty('agencia');

        $validator
                ->allowEmpty('conta');

        $validator
                ->allowEmpty('centro_custo');

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
        $rules->add($rules->existsIn(['conselho_id'], 'Conselhos'));
        $rules->add($rules->existsIn(['cargo_id'], 'Cargos'));
        $rules->add($rules->existsIn(['cargos_salario_id'], 'CargosSalarios'));
        $rules->add($rules->existsIn(['comissao_id'], 'Comissoes'));

        return $rules;
    }

}
