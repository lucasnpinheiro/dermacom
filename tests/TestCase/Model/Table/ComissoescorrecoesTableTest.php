<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ComissoescorrecoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ComissoescorrecoesTable Test Case
 */
class ComissoescorrecoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ComissoescorrecoesTable
     */
    public $Comissoescorrecoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.comissoescorrecoes',
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
        $config = TableRegistry::exists('Comissoescorrecoes') ? [] : ['className' => 'App\Model\Table\ComissoescorrecoesTable'];
        $this->Comissoescorrecoes = TableRegistry::get('Comissoescorrecoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Comissoescorrecoes);

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
