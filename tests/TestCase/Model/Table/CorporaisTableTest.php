<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorporaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorporaisTable Test Case
 */
class CorporaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CorporaisTable
     */
    public $Corporais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.corporais',
        'app.lesoes',
        'app.corporais_lesoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Corporais') ? [] : ['className' => 'App\Model\Table\CorporaisTable'];
        $this->Corporais = TableRegistry::get('Corporais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Corporais);

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
