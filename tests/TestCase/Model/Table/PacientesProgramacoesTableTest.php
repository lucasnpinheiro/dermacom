<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesProgramacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesProgramacoesTable Test Case
 */
class PacientesProgramacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesProgramacoesTable
     */
    public $PacientesProgramacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientes_programacoes',
        'app.pacientes',
        'app.sexos',
        'app.estados_civis',
        'app.escolaridades',
        'app.profissoes',
        'app.nacionalidades',
        'app.religioes',
        'app.cores',
        'app.pacientes_acompanhamentos',
        'app.especialidades',
        'app.pacientes_soube',
        'app.prestadores',
        'app.tabelas_precos',
        'app.tabelas_valores',
        'app.tabelas_reajustes',
        'app.tabelas_valores_historicos',
        'app.conselhos',
        'app.funcionarios',
        'app.comissoes',
        'app.comissoes_tipos',
        'app.comissoes_correcoes',
        'app.pacientes_emergencias',
        'app.parentescos',
        'app.contatos',
        'app.contatos_tipos',
        'app.pacientes_servicos',
        'app.servicos_clinicas',
        'app.convenios',
        'app.pacientes_convenios',
        'app.midias',
        'app.pacientes_midias',
        'app.usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PacientesProgramacoes') ? [] : ['className' => 'App\Model\Table\PacientesProgramacoesTable'];
        $this->PacientesProgramacoes = TableRegistry::get('PacientesProgramacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacientesProgramacoes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
