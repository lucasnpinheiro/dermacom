<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesemergenciasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesemergenciasTable Test Case
 */
class PacientesemergenciasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesemergenciasTable
     */
    public $Pacientesemergencias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientesemergencias',
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
        'app.pacientesmidias',
        'app.midias',
        'app.contatotipos',
        'app.pacientesservicos',
        'app.pacientessoube',
        'app.parentescos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pacientesemergencias') ? [] : ['className' => 'App\Model\Table\PacientesemergenciasTable'];
        $this->Pacientesemergencias = TableRegistry::get('Pacientesemergencias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacientesemergencias);

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
