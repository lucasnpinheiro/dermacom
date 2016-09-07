<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassificacoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassificacoesTable Test Case
 */
class ClassificacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassificacoesTable
     */
    public $Classificacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.classificacoes',
        'app.lesaos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Classificacoes') ? [] : ['className' => 'App\Model\Table\ClassificacoesTable'];
        $this->Classificacoes = TableRegistry::get('Classificacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Classificacoes);

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
