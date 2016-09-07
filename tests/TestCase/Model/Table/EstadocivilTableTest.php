<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadocivilTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadocivilTable Test Case
 */
class EstadocivilTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadocivilTable
     */
    public $Estadocivil;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estadocivil',
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
        $config = TableRegistry::exists('Estadocivil') ? [] : ['className' => 'App\Model\Table\EstadocivilTable'];
        $this->Estadocivil = TableRegistry::get('Estadocivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estadocivil);

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
