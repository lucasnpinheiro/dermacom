<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CargosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CargosController Test Case
 */
class CargosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cargos',
        'app.funcionarios',
        'app.conselhos',
        'app.prestadores',
        'app.especialidades',
        'app.pacientes_acompanhamentos',
        'app.pacientes',
        'app.sexos',
        'app.estados_civis',
        'app.escolaridades',
        'app.profissoes',
        'app.nacionalidades',
        'app.religioes',
        'app.cores',
        'app.pacientes_emergencias',
        'app.parentescos',
        'app.contatos',
        'app.contatos_tipos',
        'app.pacientes_servicos',
        'app.servicos',
        'app.pacientes_soube',
        'app.convenios',
        'app.pacientes_convenios',
        'app.midias',
        'app.pacientes_midias',
        'app.tabelas_precos',
        'app.tabelas_valores',
        'app.reajustes',
        'app.tabelas_valores_historicos',
        'app.comissoes'
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
