<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacientessoubeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacientessoubeTable Test Case
 */
class PacientessoubeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacientessoubeTable
     */
    public $Pacientessoube;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientessoube',
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
        'app.pacientesservicos',
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
        $config = TableRegistry::exists('Pacientessoube') ? [] : ['className' => 'App\Model\Table\PacientessoubeTable'];
        $this->Pacientessoube = TableRegistry::get('Pacientessoube', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pacientessoube);

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
