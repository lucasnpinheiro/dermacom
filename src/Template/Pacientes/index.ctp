<div class="columns">
    <div class="column is-8">
        <input class="input" type="search" v-model="paging.q" @keyup.enter="search()">
    </div>
    <div class="column">
        <div v-on:click.prevent="dropdown()" class="checkbox-dropdown" :class="isOpenDropdown">
            <i>Colunas</i>
            <ul class="checkbox-dropdown-list">
                <li v-for="(c, index) in colums" v-on:click.prevent="dropdownUl(index)"  :class="c.css">
                    {{c.label}}
                </li>
            </ul>
        </div>
    </div>
    <div class="column">
        <div v-on:click.prevent="dropdownLimit()" class="checkbox-dropdown" :class="isOpenDropdownLimit">
            <i>Limite {{paging.limit}}</i>
            <ul class="checkbox-dropdown-list">
                <li v-on:click.prevent="dropdownUlLimit(5)">5</li>
                <li v-on:click.prevent="dropdownUlLimit(15)">15</li>
                <li v-on:click.prevent="dropdownUlLimit(30)">30</li>
                <li v-on:click.prevent="dropdownUlLimit(50)">50</li>
                <li v-on:click.prevent="dropdownUlLimit(75)">75</li>
                <li v-on:click.prevent="dropdownUlLimit(100)">100</li>
            </ul>
        </div>
    </div>
</div>

<div class="text-center" style="position: absolute; right: 45%; background: #ccc; padding: 50px;" v-show="isCarregando">
    <i class="fa fa-spinner fa-sp in fa-3x fa-fw"></i>
    <span>Carregando...</span>
</div>

<table class="table is-striped is-narrow">
    <thead>
        <tr>
            <th v-for="c in colums" v-if="c.ative" v-on:click.prevent="sort(c.key)" :class="c.css"><i :class="sortCss(c.key)" aria-hidden="true" style="font-size: 13px;margin-top: 4px;"></i>&nbsp;{{c.label}}</th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="(item, key) in list" v-on:click.prevent="linhaSelecionada(key)" :class="item.linha_selecionada">
            <td v-for="c in colums" v-if="c.ative">{{item[c.key]}}</td>
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