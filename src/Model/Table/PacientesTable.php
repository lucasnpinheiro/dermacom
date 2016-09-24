<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * Pacientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Sexos
 * @property \Cake\ORM\Association\BelongsTo $EstadosCivis
 * @property \Cake\ORM\Association\BelongsTo $Escolaridades
 * @property \Cake\ORM\Association\BelongsTo $Profissoes
 * @property \Cake\ORM\Association\BelongsTo $Nacionalidades
 * @property \Cake\ORM\Association\BelongsTo $Religioes
 * @property \Cake\ORM\Association\BelongsTo $Cores
 * @property \Cake\ORM\Association\HasMany $PacientesAcompanhamentos
 * @property \Cake\ORM\Association\HasMany $PacientesEmergencias
 * @property \Cake\ORM\Association\HasMany $PacientesServicos
 * @property \Cake\ORM\Association\HasMany $PacientesSoube
 * @property \Cake\ORM\Association\BelongsToMany $Convenios
 * @property \Cake\ORM\Association\BelongsToMany $Midias
 *
 * @method \App\Model\Entity\Paciente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Paciente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Paciente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Paciente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Paciente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Paciente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Paciente findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PacientesTable extends Table {

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

        $this->table('pacientes');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Sexos', [
            'foreignKey' => 'sexo_id'
        ]);
        $this->belongsTo('EstadosCivis', [
            'foreignKey' => 'estados_civil_id'
        ]);
        $this->belongsTo('Escolaridades', [
            'foreignKey' => 'escolaridade_id'
        ]);
        $this->belongsTo('Profissoes', [
            'foreignKey' => 'profissao_id'
        ]);
        $this->belongsTo('Nacionalidades', [
            'foreignKey' => 'nacionalidade_id'
        ]);
        $this->belongsTo('Religioes', [
            'foreignKey' => 'religiao_id'
        ]);
        $this->belongsTo('Cores', [
            'foreignKey' => 'cor_id'
        ]);
        $this->hasMany('PacientesAcompanhamentos', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('PacientesEmergencias', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('PacientesServicos', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('PacientesSoube', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->belongsToMany('Convenios', [
            'foreignKey' => 'paciente_id',
            'targetForeignKey' => 'convenio_id',
            'joinTable' => 'pacientes_convenios'
        ]);
        $this->belongsToMany('Midias', [
            'foreignKey' => 'paciente_id',
            'targetForeignKey' => 'midia_id',
            'joinTable' => 'pacientes_midias'
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
                ->allowEmpty('foto');

        $validator
                ->allowEmpty('casrtao_sus');

        $validator
                ->allowEmpty('naturalidade');

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
        $rules->add($rules->existsIn(['sexo_id'], 'Sexos'));
        $rules->add($rules->existsIn(['estados_civil_id'], 'EstadosCivis'));
        $rules->add($rules->existsIn(['escolaridade_id'], 'Escolaridades'));
        $rules->add($rules->existsIn(['profissao_id'], 'Profissoes'));
        $rules->add($rules->existsIn(['nacionalidade_id'], 'Nacionalidades'));
        $rules->add($rules->existsIn(['religiao_id'], 'Religioes'));
        $rules->add($rules->existsIn(['cor_id'], 'Cores'));

        return $rules;
    }

}
