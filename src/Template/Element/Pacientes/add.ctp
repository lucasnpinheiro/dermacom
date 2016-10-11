<?php
if (!empty($paciente->data_nascimento)) {
    $paciente->data_nascimento = $paciente->data_nascimento->format('d/m/Y');
}
?>
<script>
    var data = <?php echo json_encode(['paciente' => $paciente, 'sexos' => $sexos, 'estadosCivils' => $estadosCivils, 'escolaridades' => $escolaridades, 'profissaos' => $profissaos, 'nacionalidades' => $nacionalidades, 'religiaos' => $religiaos, 'cors' => $cors, 'convenios' => $convenios, 'midias' => $midias]); ?>;
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

    <h3>Possui acompanhamento de profissional da saúde</h3>

    <div class="columns">

        <div class="column">
            <label class="label">Especialidade</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Nome profissional/Entidade</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Telefone</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>

    <h3>Em caso de emergência avisar</h3>

    <div class="columns">

        <div class="column">
            <label class="label">Parentesco</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Nome</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Telefone</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <label class="label">Convênio</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Plano</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Número da Matricula</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Titular do Plano</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>

    <h3>Programação de retorno do Paciente</h3>

    <div class="columns">

        <div class="column">
            <label class="label">Data</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Hora</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Motivo</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Usuário</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>

    <h3>Tipos de serviços</h3>

    <div class="columns">

        <div class="column">
            <label class="label">ID</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Tipo de serviço procurado para atendimento</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>

    <h3>Nos conheceu como</h3>

    <div class="columns">

        <div class="column">
            <label class="label">Por</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Nome do profissional</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Telefone</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>


</form>


<?php
$this->Html->script('/js/componentes/filters.js', ['block' => 'script']);
$this->Html->script('/js/pacientes/add.js', ['block' => 'script']);
?>