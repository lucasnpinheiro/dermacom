<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicosClinicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicosClinicasTable Test Case
 */
class ServicosClinicasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicosClinicasTable
     */
    public $ServicosClinicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.servicos_clinicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServicosClinicas') ? [] : ['className' => 'App\Model\Table\ServicosClinicasTable'];
        $this->ServicosClinicas = TableRegistry::get('ServicosClinicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServicosClinicas);

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
