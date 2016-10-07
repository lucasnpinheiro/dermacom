<div class="columns">
    <div class="column">
        <input class="input" type="search" v-model="paging.q" @keyup.enter="search()">
    </div>
</div>

<div class="text-center" v-if="isCarregando">
    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    <span>Carregando...</span>
</div>

<table class="table is-striped is-narrow">
    <thead>
        <tr>
            <th class="is-6">Nome</th>
            <th>CPF</th>
            <th>Situação</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="item in list">
            <td>{{item.nome}}</td>
            <td>{{item.cpf}}</td>
            <td>{{item.status}}</td>
            <td>{{item.cidade}}</td>
            <td>{{item.uf}}</td>
        </tr>
    </tbody>
</table>

<nav v-if="isPagination" class="pagination">
    <a class="button" v-on:click.prevent="loadPage(paging.page-1)">Anterior</a>
    <a class="button" v-on:click.prevent="loadPage(paging.page+1)">Próximo</a>
    <ul>
        <li v-for="i in links">
            <a class="button" :class="activePage(i.page)" v-on:click.prevent="loadPage(i.page)">{{i.page}}</a>
        </li>

    </ul>
</nav>

<?php
$this->Html->script('/js/pacientes/index.js', ['block' => 'script']);
?>