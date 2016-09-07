<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrestadoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrestadoresTable Test Case
 */
class PrestadoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PrestadoresTable
     */
    public $Prestadores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.tabelas_precos',
        'app.conselhos',
        'app.funcionarios',
        'app.cargos',
        'app.cargos_salarios',
        'app.comissaos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prestadores') ? [] : ['className' => 'App\Model\Table\PrestadoresTable'];
        $this->Prestadores = TableRegistry::get('Prestadores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prestadores);

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
