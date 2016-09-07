<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasreajustesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasreajustesTable Test Case
 */
class TabelasreajustesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasreajustesTable
     */
    public $Tabelasreajustes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabelasreajustes',
        'app.tabelasvalors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tabelasreajustes') ? [] : ['className' => 'App\Model\Table\TabelasreajustesTable'];
        $this->Tabelasreajustes = TableRegistry::get('Tabelasreajustes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tabelasreajustes);

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
