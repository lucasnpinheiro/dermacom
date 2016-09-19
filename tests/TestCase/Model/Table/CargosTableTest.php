<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CargosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CargosTable Test Case
 */
class CargosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CargosTable
     */
    public $Cargos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cargos',
        'app.funcionarios',
        'app.conselhos',
        'app.prestadores',
        'app.especialidades',
        'app.pacientes_acompanhamentos',
        'app.pacientes',
        'app.sexos',
        'app.estados_civis',
        'app.escolaridades',
        'app.profissoes',
        'app.nacionalidades',
        'app.religioes',
        'app.cores',
        'app.pacientes_emergencias',
        'app.parentescos',
        'app.contatos',
        'app.contatos_tipos',
        'app.pacientes_servicos',
        'app.servicos',
        'app.pacientes_soube',
        'app.convenios',
        'app.pacientes_convenios',
        'app.midias',
        'app.pacientes_midias',
        'app.tabelas_precos',
        'app.tabelas_valores',
        'app.reajustes',
        'app.tabelas_valores_historicos',
        'app.comissoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cargos') ? [] : ['className' => 'App\Model\Table\CargosTable'];
        $this->Cargos = TableRegistry::get('Cargos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cargos);

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
