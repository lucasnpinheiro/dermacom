<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LesoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LesoesTable Test Case
 */
class LesoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LesoesTable
     */
    public $Lesoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lesoes',
        'app.corporais',
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
        $config = TableRegistry::exists('Lesoes') ? [] : ['className' => 'App\Model\Table\LesoesTable'];
        $this->Lesoes = TableRegistry::get('Lesoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lesoes);

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
