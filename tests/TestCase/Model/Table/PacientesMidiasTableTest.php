<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesMidiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesMidiasTable Test Case
 */
class PacientesMidiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesMidiasTable
     */
    public $PacientesMidias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientes_midias',
        'app.pacientes',
        'app.sexos',
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
        'app.pacientes_emergencias',
        'app.parentescos',
        'app.pacientes_servicos',
        'app.convenios',
        'app.pacientes_convenios',
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
        $config = TableRegistry::exists('PacientesMidias') ? [] : ['className' => 'App\Model\Table\PacientesMidiasTable'];
        $this->PacientesMidias = TableRegistry::get('PacientesMidias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacientesMidias);

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
