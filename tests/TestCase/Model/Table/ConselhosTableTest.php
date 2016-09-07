<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConselhosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConselhosTable Test Case
 */
class ConselhosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConselhosTable
     */
    public $Conselhos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.conselhos',
        'app.funcionarios',
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
        $config = TableRegistry::exists('Conselhos') ? [] : ['className' => 'App\Model\Table\ConselhosTable'];
        $this->Conselhos = TableRegistry::get('Conselhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Conselhos);

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
