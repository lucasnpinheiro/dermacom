<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesconveniosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesconveniosTable Test Case
 */
class PacientesconveniosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesconveniosTable
     */
    public $Pacientesconvenios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientesconvenios',
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
        'app.pacientesemergencias',
        'app.pacientesmidias',
        'app.pacientesservicos',
        'app.pacientessoube',
        'app.convenios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pacientesconvenios') ? [] : ['className' => 'App\Model\Table\PacientesconveniosTable'];
        $this->Pacientesconvenios = TableRegistry::get('Pacientesconvenios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacientesconvenios);

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
