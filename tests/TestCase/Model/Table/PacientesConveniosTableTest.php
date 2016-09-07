<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientesConveniosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientesConveniosTable Test Case
 */
class PacientesConveniosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientesConveniosTable
     */
    public $PacientesConvenios;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientes_convenios',
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
        'app.pacientes_servicos',
        'app.convenios',
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
        $config = TableRegistry::exists('PacientesConvenios') ? [] : ['className' => 'App\Model\Table\PacientesConveniosTable'];
        $this->PacientesConvenios = TableRegistry::get('PacientesConvenios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacientesConvenios);

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
