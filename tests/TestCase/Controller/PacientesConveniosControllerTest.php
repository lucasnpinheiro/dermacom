<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PacientesConveniosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PacientesConveniosController Test Case
 */
class PacientesConveniosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pacientes_convenios',
        'app.pacientes',
        'app.sexos',
        'app.estados_civils',
        'app.escolaridades',
        'app.profissaos',
        'app.nacionalidades',
        'app.religiaos',
        'app.cors',
        'app.pacientes_acompanhamentos',
        'app.especialidades',
        'app.pacientes_soube',
        'app.prestadores',
        'app.pacientes_emergencias',
        'app.pacientes_servicos',
        'app.convenios',
        'app.midias',
        'app.contatotipos',
        'app.pacientes_midias'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
