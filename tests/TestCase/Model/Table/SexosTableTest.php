<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SexosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SexosTable Test Case
 */
class SexosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SexosTable
     */
    public $Sexos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sexos',
        'app.pacientes',
        'app.estados_civils',
        'app.escolaridades',
        'app.profissaos',
        'app.nacionalidades',
        'app.religiaos',
        'app.cors',
        'app.pacientes_acompanhamentos',
        'app.especialidades',
        'app.pacientes_soube',
        'app.prestadores',
        'app.tabelas_precos',
        'app.conselhos',
        'app.funcionarios',
        'app.cargos',
        'app.cargos_salarios',
        'app.comissaos',
        'app.pacientes_emergencias',
        'app.parentescos',
        'app.contatos',
        'app.contatos_tipos',
        'app.pacientes_servicos',
        'app.servicos',
        'app.convenios',
        'app.pacientes_convenios',
        'app.midias',
        'app.contatotipos',
        'app.pacientes_midias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sexos') ? [] : ['className' => 'App\Model\Table\SexosTable'];
        $this->Sexos = TableRegistry::get('Sexos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sexos);

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
}
