<?php
if (!empty($paciente->data_nascimento)) {
    $paciente->data_nascimento = $paciente->data_nascimento->format('d/m/Y');
}
if (!$paciente->has('pacientes_acompanhamentos')) {
    $paciente->pacientes_acompanhamentos = [];
}
if (!$paciente->has('pacientes_soube')) {
    $paciente->pacientes_soube = [];
}
if (!$paciente->has('contatos')) {
    $paciente->contatos = [];
}
if (!$paciente->has('pacientes_servicos')) {
    $paciente->pacientes_servicos = [];
}
if (!$paciente->has('pacientes_emergencias')) {
    $paciente->pacientes_emergencias = [];
}
if (!$paciente->has('convenios')) {
    $paciente->convenios = [];
}
if (!$paciente->has('midias')) {
    $paciente->midias = [];
}
//debug($paciente);
?>
<script>
    var data = <?php echo json_encode(['especialidades' => $especialidades, 'paciente' => $paciente, 'sexos' => $sexos, 'estadosCivils' => $estadosCivils, 'escolaridades' => $escolaridades, 'profissaos' => $profissaos, 'nacionalidades' => $nacionalidades, 'religiaos' => $religiaos, 'cors' => $cors, 'convenios' => $convenios, 'midias' => $midias]); ?>;
    data.tabs = {
        'profissional': {label: 'Profissional', active: true, class: 'is-active'},
        'emergencia': {label: 'Emergência', active: false, class: ''},
        'programacao': {label: 'Programação', active: false, class: ''},
        'servicos': {label: 'Serviços', active: false, class: ''},
        'contato': {label: 'Contatos', active: false, class: ''},
        'como': {label: 'Como nos conheceu', active: false, class: ''}
    };
    console.log(data);
</script>

<form autocomplete="off">

    <div class="columns">
        <div class="column">
            <label class="label">ID</label>
            <p class="control">
                <input class="input" disabled="disabled" type="number" v-model="paciente.id" autocomplete="off" maxlength="11">
            </p>
        </div>
        <div class="column">
            <label class="label">CPF</label>
            <p class="control">
                <input class="input" type="text" autofocus v-model="paciente.cpf" v-bind="cpfMask" autocomplete="off" maxlength="14">
            </p>
        </div>
        <div class="column is-5">
            <label class="label">Nome</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.nome" autocomplete="off" maxlength="255">
            </p>
        </div>
        <div class="column">
            <label class="label">Sexo</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.sexo_id" autocomplete="off">
                    <option>Selecione uma Sexo</option>
                    <option v-for="item in sexos" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
        <div class="column">
            <label class="label">Nascimento</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.data_nascimento" v-bind="dataNascimentoMask"  autocomplete="off" maxlength="8">
            </p>
        </div>
        <div class="column">
            <label class="label">Idade</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.idade" autocomplete="off" disabled="disabled">
            </p>
        </div>

    </div>

    <div class="columns">
        <div class="column">
            <label class="label">Situção</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.status" autocomplete="off">
                    <option>Selecione uma Situação</option>
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select>
            </p>
        </div>
        <div class="column">
            <label class="label">Identidade/Local</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.rg" autocomplete="off" maxlength="45">
            </p>
        </div>
        <div class="column">
            <label class="label">Nº. Cartão SUS</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.cartao_sus" autocomplete="off" maxlength="45">
            </p>
        </div>
        <div class="column">
            <label class="label">Estado Civil</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.estados_civil_id" autocomplete="off">
                    <option>Selecione um Estado Civil</option>
                    <option v-for="item in estadosCivils" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
        <div class="column">
            <label class="label">Escolaridade</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.escolaridade_id" autocomplete="off">
                    <option>Selecione uma Escolaridade</option>
                    <option v-for="item in escolaridades" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
        <div class="column">
            <label class="label">Profissão</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.profissao_id" autocomplete="off">
                    <option>Selecione uma Profissão</option>
                    <option v-for="item in profissaos" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <label class="label">CEP</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.cep" v-bind="cepMask" autocomplete="off" maxlength="9">
            </p>
        </div>
        <div class="column is-5">
            <label class="label">Logradouro</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.endereco" autocomplete="off" maxlength="255">
            </p>
        </div>
        <div class="column">
            <label class="label">Número</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.numero" id="inputNumero" autocomplete="off" maxlength="10">
            </p>
        </div>
        <div class="column is-2">
            <label class="label">Complemento</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.complemento" autocomplete="off" maxlength="45">
            </p>
        </div>
        <div class="column is-2">
            <label class="label">Bairro</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.bairro" autocomplete="off" maxlength="45">
            </p>
        </div>
    </div>

    <div class="columns">
        <div class="column is-3">
            <label class="label">Cidade</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.cidade" autocomplete="off" maxlength="45">
            </p>
        </div>
        <div class="column">
            <label class="label">UF</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.estado" autocomplete="off" maxlength="2">
            </p>
        </div>
        <div class="column is-2">
            <label class="label">Naturalidade</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.naturalidade" autocomplete="off" maxlength="45">
            </p>
        </div>
        <div class="column is-2">
            <label class="label">Nacionalidade</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.nacionalidade_id" autocomplete="off">
                    <option>Selecione uma Nacionalidade</option>
                    <option v-for="item in nacionalidades" v-bind:value="item.id">{{item.nome_pais}}</option>
                </select>
            </p>
        </div>
        <div class="column is-2">
            <label class="label">Religiao</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.religiao_id" autocomplete="off">
                    <option>Selecione uma Religião</option>
                    <option v-for="item in religiaos" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
        <div class="column is-2">
            <label class="label">Cor (IBGE)</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.cor_id" autocomplete="off">
                    <option>Selecione uma Cor</option>
                    <option v-for="item in cors" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
    </div>


    <div class="tabs">
        <ul>
            <li v-for="(item, k) in tabs" :class="item.class" v-on:click="tabActive(k)"><a>{{item.label}}</a></li>
        </ul>
    </div>

    <div v-if="tabs.profissional.active">
        <h3 class="title text-center">Possui acompanhamento de profissional da saúde</h3>
        <div class="columns">

            <div class="column is-3">
                <label class="label">Especialidade</label>
                <p class="control">
                    <select class="select" style="width: 100%;" id="pacientes_acompanhamentos_especialidade_id" autocomplete="off">
                        <option>Selecione uma Profissão</option>
                        <option v-for="item in especialidades" v-bind:value="item.id">{{item.nome}}</option>
                    </select>
                </p>

            </div>
            <div class="column is-6">
                <label class="label">Nome profissional/Entidade</label>
                <p class="control">
                    <input class="input" type="text" id="pacientes_acompanhamentos_medico" autocomplete="off">
                </p>
            </div>
            <div class="column is-2">
                <label class="label">Telefone</label>
                <p class="control">
                    <input class="input" type="text" id="pacientes_acompanhamentos_telefone" autocomplete="off">
                </p>
            </div>
            <div class="column text-center">
                <label class="label">&nbsp;</label>
                <button class="button"><i class="fa fa-plus-circle"></i></button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Especialidade</th>
                    <th>Nome profissional/Entidade</th>
                    <th>Telefone</th>
                    <th style="text-align: center;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, k) in paciente.pacientes_acompanhamentos">
                    <td>{{item.especialidade.nome}}</td>
                    <td>{{item.medico}}</td>
                    <td>{{item.telefone}}</td>
                    <td class="text-center"><i v-on:click="remove(k, 'pacientes_acompanhamentos')" class="fa fa-eraser"></i></td>
                </tr>
            </tbody>
        </table>

    </div>

    <div v-if="tabs.emergencia.active">
        <h3>Em caso de emergência avisar</h3>
    </div>
    <div v-if="tabs.programacao.active">
        <h3>Programação de retorno do Paciente</h3>  
    </div>
    <div v-if="tabs.servicos.active">
        <h3>Tipos de serviços</h3>
    </div>
    <div v-if="tabs.contato.active">
        <h3>Tipos de Contatos</h3> 
    </div>
    <div v-if="tabs.como.active">
        <h3>Nos conheceu como</h3>
    </div>

</form>


<?php
$this->Html->script('/js/componentes/filters.js', ['block' => 'script']);
$this->Html->script('/js/pacientes/add.js', ['block' => 'script']);
?>