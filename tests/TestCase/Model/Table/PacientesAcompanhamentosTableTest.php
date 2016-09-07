<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesAcompanhamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesAcompanhamentosTable Test Case
 */
class PacientesAcompanhamentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesAcompanhamentosTable
     */
    public $PacientesAcompanhamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.pacientes_servicos',
        'app.pacientes_soube',
        'app.convenios',
        'app.pacientes_convenios',
        'app.midias',
        'app.contatotipos',
        'app.pacientes_midias',
        'app.especialidades',
        'app.prestadores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PacientesAcompanhamentos') ? [] : ['className' => 'App\Model\Table\PacientesAcompanhamentosTable'];
        $this->PacientesAcompanhamentos = TableRegistry::get('PacientesAcompanhamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacientesAcompanhamentos);

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
