<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComissoesTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComissoesTiposTable Test Case
 */
class ComissoesTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComissoesTiposTable
     */
    public $ComissoesTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.comissoes_tipos',
        'app.comissoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ComissoesTipos') ? [] : ['className' => 'App\Model\Table\ComissoesTiposTable'];
        $this->ComissoesTipos = TableRegistry::get('ComissoesTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ComissoesTipos);

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
