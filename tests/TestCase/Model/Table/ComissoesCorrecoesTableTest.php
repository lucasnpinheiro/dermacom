<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComissoesCorrecoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComissoesCorrecoesTable Test Case
 */
class ComissoesCorrecoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComissoesCorrecoesTable
     */
    public $ComissoesCorrecoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.comissoes_correcoes',
        'app.comissaos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ComissoesCorrecoes') ? [] : ['className' => 'App\Model\Table\ComissoesCorrecoesTable'];
        $this->ComissoesCorrecoes = TableRegistry::get('ComissoesCorrecoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ComissoesCorrecoes);

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
