<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParentescosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParentescosTable Test Case
 */
class ParentescosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ParentescosTable
     */
    public $Parentescos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.parentescos',
        'app.contatos',
        'app.contatos_tipos',
        'app.pacientes_emergencias',
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
        $config = TableRegistry::exists('Parentescos') ? [] : ['className' => 'App\Model\Table\ParentescosTable'];
        $this->Parentescos = TableRegistry::get('Parentescos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parentescos);

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
}
