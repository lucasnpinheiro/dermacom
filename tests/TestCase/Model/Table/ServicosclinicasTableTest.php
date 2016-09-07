<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicosclinicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicosclinicasTable Test Case
 */
class ServicosclinicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicosclinicasTable
     */
    public $Servicosclinicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.servicosclinicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Servicosclinicas') ? [] : ['className' => 'App\Model\Table\ServicosclinicasTable'];
        $this->Servicosclinicas = TableRegistry::get('Servicosclinicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Servicosclinicas);

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
