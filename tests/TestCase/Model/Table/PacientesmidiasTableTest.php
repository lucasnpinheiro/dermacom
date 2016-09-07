<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesmidiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesmidiasTable Test Case
 */
class PacientesmidiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesmidiasTable
     */
    public $Pacientesmidias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientesmidias',
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
        'app.pacientesservicos',
        'app.pacientessoube',
        'app.midias',
        'app.contatotipos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pacientesmidias') ? [] : ['className' => 'App\Model\Table\PacientesmidiasTable'];
        $this->Pacientesmidias = TableRegistry::get('Pacientesmidias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacientesmidias);

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
