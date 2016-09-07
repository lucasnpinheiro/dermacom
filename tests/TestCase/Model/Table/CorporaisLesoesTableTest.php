<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorporaisLesoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorporaisLesoesTable Test Case
 */
class CorporaisLesoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CorporaisLesoesTable
     */
    public $CorporaisLesoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.corporais_lesoes',
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
        $config = TableRegistry::exists('CorporaisLesoes') ? [] : ['className' => 'App\Model\Table\CorporaisLesoesTable'];
        $this->CorporaisLesoes = TableRegistry::get('CorporaisLesoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CorporaisLesoes);

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
