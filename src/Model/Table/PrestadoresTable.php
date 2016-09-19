<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prestadores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Especialidades
 * @property \Cake\ORM\Association\BelongsTo $TabelasPrecos
 * @property \Cake\ORM\Association\BelongsTo $Conselhos
 *
 * @method \App\Model\Entity\Prestadore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prestadore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prestadore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prestadore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prestadore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prestadore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prestadore findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PrestadoresTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('prestadores');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Especialidades', [
            'foreignKey' => 'especialidade_id'
        ]);
        $this->belongsTo('TabelasPrecos', [
            'foreignKey' => 'tabelas_preco_id'
        ]);
        $this->belongsTo('Conselhos', [
            'foreignKey' => 'conselho_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('razao_social');

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
            ->allowEmpty('complememnto');

        $validator
            ->allowEmpty('bairro');

        $validator
            ->allowEmpty('cidade');

        $validator
            ->allowEmpty('estado');

        $validator
            ->allowEmpty('cnpj');

        $validator
            ->allowEmpty('inscricao');

        $validator
            ->allowEmpty('cpf');

        $validator
            ->allowEmpty('rg');

        $validator
            ->date('data_nascimento')
            ->allowEmpty('data_nascimento');

        $validator
            ->allowEmpty('banco');

        $validator
            ->allowEmpty('agencia');

        $validator
            ->allowEmpty('conta');

        $validator
            ->allowEmpty('numero_conselho');

        $validator
            ->allowEmpty('estado_conselho');

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
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['especialidade_id'], 'Especialidades'));
        $rules->add($rules->existsIn(['tabelas_preco_id'], 'TabelasPrecos'));
        $rules->add($rules->existsIn(['conselho_id'], 'Conselhos'));

        return $rules;
    }
}
