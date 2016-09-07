<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContatostiposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContatostiposTable Test Case
 */
class ContatostiposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContatostiposTable
     */
    public $Contatostipos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contatostipos',
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
        $config = TableRegistry::exists('Contatostipos') ? [] : ['className' => 'App\Model\Table\ContatostiposTable'];
        $this->Contatostipos = TableRegistry::get('Contatostipos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contatostipos);

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
