<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasvaloresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasvaloresTable Test Case
 */
class TabelasvaloresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasvaloresTable
     */
    public $Tabelasvalores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabelasvalores',
        'app.tabelasprecos',
        'app.prestadores',
        'app.especialidades',
        'app.conselhos',
        'app.funcionarios',
        'app.cargos',
        'app.cargossalarios',
        'app.comissaos',
        'app.tabelasvaloreshistoricos',
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
        $config = TableRegistry::exists('Tabelasvalores') ? [] : ['className' => 'App\Model\Table\TabelasvaloresTable'];
        $this->Tabelasvalores = TableRegistry::get('Tabelasvalores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tabelasvalores);

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
