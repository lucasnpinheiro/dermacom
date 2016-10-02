<script>

    var data = <?= json_encode($data) ?>;
    var lesoesList = <?= json_encode($lesoesList) ?>;
    var classificacoesList = [];
</script>

<?php
$this->Html->script('/js/lesoes/index.js', ['block' => 'script']);
$this->Html->css('/css/lesoes/index.css', ['block' => 'css']);
?>
<div class="columns">
    <div class="column" id="listagem-lesoes" style="overflow: auto;">
        <ul class="tree">
            <li v-for="item in lista" class="lista-tree">
                <a v-show="!item.open" class="button" v-on:click="item.open = !item.open" style="margin: 0px; padding: 0px; height: 20px; width: 20px;">
                    <i class="fa fa-plus-circle" style="font-size: 10px;" aria-hidden="true"></i>
                </a>
                <a v-show="item.open" class="button" v-on:click="item.open = !item.open" style="margin: 0px; padding: 0px; height: 20px; width: 20px;">
                    <i class="fa fa-minus-circle" style="font-size: 10px;" aria-hidden="true"></i>
                </a>

                Lesão: {{item.lesao}} 

                <ul v-show="item.open" class="lista-tree">
                    <li v-for="classific in item.classificacoes" class="lista-tree">
                        <a v-show="!classific.open" class="button" v-on:click="classific.open = !classific.open" style="margin: 0px; padding: 0px; height: 20px; width: 20px;">
                            <i class="fa fa-plus-circle" style="font-size: 10px;" aria-hidden="true"></i>
                        </a>
                        <a v-show="classific.open" class="button" v-on:click="classific.open = !classific.open" style="margin: 0px; padding: 0px; height: 20px; width: 20px;">
                            <i class="fa fa-minus-circle" style="font-size: 10px;" aria-hidden="true"></i>
                        </a>

                        Classificação: {{classific.classificacao}}

                        <ul v-show="classific.open" class="lista-tree">
                            <li v-for="est in classific.estagios" class="lista-tree" style="cursor: text;">
                                <a class="button" v-on:click="editarEstagios(est)" style="margin: 0px; padding: 0px; height: 20px; width: 20px;">
                                    <i class="fa fa-edit" style="font-size: 10px;" aria-hidden="true"></i>
                                </a>
                                Estagio: {{est.estagio}} | Peso: {{est.peso}} <br> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descrição: {{est.descricao}} <br>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="column is-4">

        <form>
            <input id="input-id" type="hidden">
            <input id="input-classificacao-id" type="hidden">
            <input id="input-estagio-id" type="hidden">
            <label class="label">Lesão</label>
            <p class="control">
                <input class="input" list="listLesao" id="input-lesao" type="text" autocomplete="off" @keyup="keydown">
                <datalist id="listLesao">
                    <option v-for="i in listaLesao">{{i.nome}}</option>
                </datalist>
            </p>

            <label class="label">Classificação</label>
            <p class="control">
                <input class="input"  list="listClassificacao" id="input-classificacao" type="text" autocomplete="off">
                <datalist id="listClassificacao">
                    <option v-for="i in listaClassificacoes">{{i.nome}}</option>
                </datalist>
            </p>

            <label class="label">Estagio</label>
            <p class="control">
                <input class="input" id="input-estagio" type="text" autocomplete="off">
            </p>

            <label class="label">Descrição</label>
            <p class="control">
                <input class="input" id="input-descricao" type="text" autocomplete="off">
            </p>

            <label class="label">Peso</label>
            <p class="control">
                <input class="input" id="input-peso" type="text" autocomplete="off">
            </p>

        </form>

    </div>

</div>