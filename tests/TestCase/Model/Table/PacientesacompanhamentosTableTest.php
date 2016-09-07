<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesacompanhamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesacompanhamentosTable Test Case
 */
class PacientesacompanhamentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesacompanhamentosTable
     */
    public $Pacientesacompanhamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientesacompanhamentos',
        'app.pacientes',
        'app.sexos',
        'app.estadocivils',
        'app.escolaridades',
        'app.profissaos',
        'app.nacionalidades',
        'app.religiaos',
        'app.cors',
        'app.pacientesconvenios',
        'app.pacientesemergencias',
        'app.pacientesmidias',
        'app.pacientesservicos',
        'app.pacientessoube',
        'app.especialidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pacientesacompanhamentos') ? [] : ['className' => 'App\Model\Table\PacientesacompanhamentosTable'];
        $this->Pacientesacompanhamentos = TableRegistry::get('Pacientesacompanhamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacientesacompanhamentos);

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
