<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComissoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComissoesTable Test Case
 */
class ComissoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComissoesTable
     */
    public $Comissoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Comissoes') ? [] : ['className' => 'App\Model\Table\ComissoesTable'];
        $this->Comissoes = TableRegistry::get('Comissoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Comissoes);

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
