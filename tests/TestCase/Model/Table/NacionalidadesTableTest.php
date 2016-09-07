<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NacionalidadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NacionalidadesTable Test Case
 */
class NacionalidadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NacionalidadesTable
     */
    public $Nacionalidades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nacionalidades',
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
        $config = TableRegistry::exists('Nacionalidades') ? [] : ['className' => 'App\Model\Table\NacionalidadesTable'];
        $this->Nacionalidades = TableRegistry::get('Nacionalidades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Nacionalidades);

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
