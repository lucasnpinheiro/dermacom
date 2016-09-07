<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesservicosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesservicosTable Test Case
 */
class PacientesservicosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesservicosTable
     */
    public $Pacientesservicos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientesservicos',
        'app.pacientes',
        'app.sexos',
        'app.estadocivils',
        'app.escolaridades',
        'app.profissaos',
        'app.nacionalidades',
        'app.religiaos',
        'app.cors',
        'app.pacientesacompanhamentos',
        'app.especialidades',
        'app.pacientesconvenios',
        'app.convenios',
        'app.pacientesemergencias',
        'app.parentescos',
        'app.pacientesmidias',
        'app.midias',
        'app.contatotipos',
        'app.pacientessoube',
        'app.servicos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pacientesservicos') ? [] : ['className' => 'App\Model\Table\PacientesservicosTable'];
        $this->Pacientesservicos = TableRegistry::get('Pacientesservicos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacientesservicos);

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
