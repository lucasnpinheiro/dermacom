<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

/**
 * PacientesAcompanhamentos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 * @property \Cake\ORM\Association\BelongsTo $Especialidades
 *
 * @method \App\Model\Entity\PacientesAcompanhamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\PacientesAcompanhamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PacientesAcompanhamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PacientesAcompanhamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PacientesAcompanhamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PacientesAcompanhamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PacientesAcompanhamento findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PacientesAcompanhamentosTable extends Table {

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

        $this->table('pacientes_acompanhamentos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->belongsTo('Especialidades', [
            'foreignKey' => 'especialidade_id'
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
                ->allowEmpty('medico');

        $validator
                ->allowEmpty('telefone');

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
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        $rules->add($rules->existsIn(['especialidade_id'], 'Especialidades'));

        return $rules;
    }
    
    public function patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = []) {
        $data = $this->capitalize($data);
        if (!empty($data['telefone'])) {
            $data['telefone'] = $this->removeMascara($data['cpf']);
        }
        $data = $this->removeColunas($data);
        return parent::patchEntity($entity, $data, $options);
    }

}
