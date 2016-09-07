<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorporallesoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorporallesoesTable Test Case
 */
class CorporallesoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CorporallesoesTable
     */
    public $Corporallesoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.corporallesoes',
        'app.lesaos',
        'app.corporals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Corporallesoes') ? [] : ['className' => 'App\Model\Table\CorporallesoesTable'];
        $this->Corporallesoes = TableRegistry::get('Corporallesoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Corporallesoes);

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
