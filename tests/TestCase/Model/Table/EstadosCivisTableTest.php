<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadosCivisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadosCivisTable Test Case
 */
class EstadosCivisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadosCivisTable
     */
    public $EstadosCivis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estados_civis'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EstadosCivis') ? [] : ['className' => 'App\Model\Table\EstadosCivisTable'];
        $this->EstadosCivis = TableRegistry::get('EstadosCivis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EstadosCivis);

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
