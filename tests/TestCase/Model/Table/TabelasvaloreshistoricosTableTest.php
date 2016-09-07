<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasvaloreshistoricosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasvaloreshistoricosTable Test Case
 */
class TabelasvaloreshistoricosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasvaloreshistoricosTable
     */
    public $Tabelasvaloreshistoricos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabelasvaloreshistoricos',
        'app.tabelasprecos',
        'app.prestadores',
        'app.especialidades',
        'app.conselhos',
        'app.funcionarios',
        'app.cargos',
        'app.cargossalarios',
        'app.comissaos',
        'app.tabelasvalores',
        'app.reajustes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tabelasvaloreshistoricos') ? [] : ['className' => 'App\Model\Table\TabelasvaloreshistoricosTable'];
        $this->Tabelasvaloreshistoricos = TableRegistry::get('Tabelasvaloreshistoricos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tabelasvaloreshistoricos);

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
