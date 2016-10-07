<div class="column is-6"><h1 class="title">Pacientes</h1></div>
<div class="column is-6 text-right">
    <a class="button is-info is-small" href="<?= Cake\Routing\Router::url(['controller' => 'Pacientes', 'action' => 'add']) ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Novo</a>
    <a class="button is-info is-small" href="#" v-on:click.prevent="editar()"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;Editar</a>
    <a class="button is-info is-small" href="#" v-on:click.prevent="gravar()"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Gravar</a>
    <a class="button is-info is-small" href="#"><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Excluir</a>
    <a class="button is-info is-small" href="<?= Cake\Routing\Router::url(['controller' => 'Pacientes', 'action' => 'index']) ?>"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Consultar</a>
    <a class="button is-info is-small" href="<?= Cake\Routing\Router::url(['controller' => 'Pacientes', 'action' => 'imprimir']) ?>"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Imprimir</a>
</div>