<div class="column is-6"><h1 class="title">Pacientes</h1></div>
<div class="column is-6 text-right">
    <button class="button is-info is-small" @click="novo()"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Novo</button>
    <button class="button is-info is-small" @click.prevent="editar()"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;Editar</button>
    <button class="button is-info is-small" @click="gravar()"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Gravar</button>
    <button class="button is-info is-small" @click="excluir()"><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Excluir</button>
    <button class="button is-info is-small" @click="consultar()"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Consultar</button>
    <button class="button is-info is-small" @click="imprimir()"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Imprimir</button>
</div>