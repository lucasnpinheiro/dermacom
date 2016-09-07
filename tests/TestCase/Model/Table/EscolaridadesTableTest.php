<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EscolaridadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EscolaridadesTable Test Case
 */
class EscolaridadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EscolaridadesTable
     */
    public $Escolaridades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.escolaridades',
        'app.pacientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Escolaridades') ? [] : ['className' => 'App\Model\Table\EscolaridadesTable'];
        $this->Escolaridades = TableRegistry::get('Escolaridades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Escolaridades);

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
