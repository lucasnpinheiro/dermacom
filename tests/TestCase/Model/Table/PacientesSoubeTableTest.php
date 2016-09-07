<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesSoubeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesSoubeTable Test Case
 */
class PacientesSoubeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesSoubeTable
     */
    public $PacientesSoube;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientes_soube',
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
        'app.prestadores',
        'app.pacientes_emergencias',
        'app.parentescos',
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
        $config = TableRegistry::exists('PacientesSoube') ? [] : ['className' => 'App\Model\Table\PacientesSoubeTable'];
        $this->PacientesSoube = TableRegistry::get('PacientesSoube', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacientesSoube);

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
