<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasValoresHistoricosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasValoresHistoricosTable Test Case
 */
class TabelasValoresHistoricosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasValoresHistoricosTable
     */
    public $TabelasValoresHistoricos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabelas_valores_historicos',
        'app.tabelas_precos',
        'app.prestadores',
        'app.especialidades',
        'app.pacientes_acompanhamentos',
        'app.pacientes',
        'app.sexos',
        'app.estados_civils',
        'app.escolaridades',
        'app.profissaos',
        'app.nacionalidades',
        'app.religiaos',
        'app.cors',
        'app.pacientes_emergencias',
        'app.parentescos',
        'app.contatos',
        'app.contatos_tipos',
        'app.pacientes_servicos',
        'app.servicos',
        'app.pacientes_soube',
        'app.convenios',
        'app.pacientes_convenios',
        'app.midias',
        'app.contatotipos',
        'app.pacientes_midias',
        'app.conselhos',
        'app.funcionarios',
        'app.cargos',
        'app.cargos_salarios',
        'app.comissaos',
        'app.tabelas_valores',
        'app.reajustes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TabelasValoresHistoricos') ? [] : ['className' => 'App\Model\Table\TabelasValoresHistoricosTable'];
        $this->TabelasValoresHistoricos = TableRegistry::get('TabelasValoresHistoricos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabelasValoresHistoricos);

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
