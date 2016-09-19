<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Convenios Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Pacientes
 *
 * @method \App\Model\Entity\Convenio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Convenio newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Convenio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Convenio|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Convenio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Convenio[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Convenio findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ConveniosTable extends Table
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

        $this->table('convenios');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Pacientes', [
            'foreignKey' => 'convenio_id',
            'targetForeignKey' => 'paciente_id',
            'joinTable' => 'pacientes_convenios'
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
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->allowEmpty('razao_social');

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
            ->allowEmpty('cnpj');

        $validator
            ->allowEmpty('inscricao');

        $validator
            ->allowEmpty('centro_custo');

        return $validator;
    }
}
