<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatosTiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatosTiposTable Test Case
 */
class ContatosTiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatosTiposTable
     */
    public $ContatosTipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contatos_tipos',
        'app.contatos',
        'app.parentescos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContatosTipos') ? [] : ['className' => 'App\Model\Table\ContatosTiposTable'];
        $this->ContatosTipos = TableRegistry::get('ContatosTipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContatosTipos);

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
