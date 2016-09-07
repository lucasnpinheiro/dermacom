<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfissoesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfissoesTable Test Case
 */
class ProfissoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfissoesTable
     */
    public $Profissoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profissoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Profissoes') ? [] : ['className' => 'App\Model\Table\ProfissoesTable'];
        $this->Profissoes = TableRegistry::get('Profissoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profissoes);

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
