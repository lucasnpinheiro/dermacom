<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReligioesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReligioesTable Test Case
 */
class ReligioesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReligioesTable
     */
    public $Religioes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.religioes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Religioes') ? [] : ['className' => 'App\Model\Table\ReligioesTable'];
        $this->Religioes = TableRegistry::get('Religioes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Religioes);

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
