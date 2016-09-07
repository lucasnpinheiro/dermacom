<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasReajustesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasReajustesTable Test Case
 */
class TabelasReajustesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasReajustesTable
     */
    public $TabelasReajustes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabelas_reajustes',
        'app.tabelas_valors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TabelasReajustes') ? [] : ['className' => 'App\Model\Table\TabelasReajustesTable'];
        $this->TabelasReajustes = TableRegistry::get('TabelasReajustes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabelasReajustes);

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
