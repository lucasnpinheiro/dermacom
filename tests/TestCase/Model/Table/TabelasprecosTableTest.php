<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasprecosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasprecosTable Test Case
 */
class TabelasprecosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasprecosTable
     */
    public $Tabelasprecos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tabelasprecos',
        'app.prestadores',
        'app.especialidades',
        'app.conselhos',
        'app.funcionarios',
        'app.cargos',
        'app.cargossalarios',
        'app.comissaos',
        'app.tabelasvalores',
        'app.tabelasvaloreshistoricos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tabelasprecos') ? [] : ['className' => 'App\Model\Table\TabelasprecosTable'];
        $this->Tabelasprecos = TableRegistry::get('Tabelasprecos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tabelasprecos);

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
