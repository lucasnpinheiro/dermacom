
<div id="menu-acoes-topo" style="padding: 35px 0px 0px 0px; position: fixed; width: 100%; z-index: 99998;">
    <div class="columns" style="text-align: center; background: #ccc; padding: 0px; margin: 5px 0px;">
        <button class="column" style="padding: 0; margin: 0;" v-on:click="novo">Novo</button>
        <button disabled="disabled" class="column" style="padding: 0; margin: 0;" v-on:click="editar">Editar</button>
        <button class="column" style="padding: 0; margin: 0;" v-on:click="gravar">Gravar</button>
        <button disabled="disabled" class="column" style="padding: 0; margin: 0;" v-on:click="excluir">Excluir</button>
        <button disabled="disabled" class="column" style="padding: 0; margin: 0;" v-on:click="consultar">Consultar</button>
        <button disabled="disabled" class="column" style="padding: 0; margin: 0;" v-on:click="imprimir">Imprimir</button>
    </div>
</div>