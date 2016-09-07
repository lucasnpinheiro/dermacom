<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoresTable Test Case
 */
class CoresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoresTable
     */
    public $Cores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cores'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cores') ? [] : ['className' => 'App\Model\Table\CoresTable'];
        $this->Cores = TableRegistry::get('Cores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cores);

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
