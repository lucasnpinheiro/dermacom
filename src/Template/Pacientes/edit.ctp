<script>
    var data = <?php echo json_encode(['paciente' => $paciente, 'sexos' => $sexos, 'estadosCivils' => $estadosCivils, 'escolaridades' => $escolaridades, 'profissaos' => $profissaos, 'nacionalidades' => $nacionalidades, 'religiaos' => $religiaos, 'cors' => $cors, 'convenios' => $convenios, 'midias' => $midias]); ?>;
    console.log(data);
</script>

<form autocomplete="off">

    <div class="columns">
        <div class="column">
            <label class="label">ID</label>
            <p class="control">
                <input class="input" disabled="disabled" type="text" v-model="paciente.id" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">CPF</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.cpf" autocomplete="off">
            </p>
        </div>
        <div class="column is-6">
            <label class="label">Nome</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.nome" autocomplete="off">
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
                <input class="input" type="text" v-model="paciente.data_nascimento" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Idade</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.idade" autocomplete="off">
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
                <input class="input" type="text" v-model="paciente.rg" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Nº. Cartão SUS</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.cartao_sus" autocomplete="off">
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
                <input class="input" type="text" v-model="paciente.cep" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Tipo de Logradouro</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.tipo_logradouro" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Logradouro</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.logradouro" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Número</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.numero" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Complemento</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.complemento" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Bairro</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.bairro" autocomplete="off">
            </p>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <label class="label">Cidade</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.cidade" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">UF</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.estado" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Naturalidade</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.naturalidade" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Nacionalidade</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.nacionalidade_id" autocomplete="off">
                    <option>Selecione uma Nacionalidade</option>
                    <option v-for="item in nacionalidades" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
        <div class="column">
            <label class="label">Pais</label>
            <p class="control">
                <input class="input" type="text" v-model="paciente.pais" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Telefone</label>
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
        <div class="column">
            <label class="label">Celular</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <label class="label">Comunicação por SMS/WhatsApp</label>
            <p class="control">
                <input class="input" type="text"  autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">E-mail</label>
            <p class="control">
                <input class="input" type="text" autocomplete="off">
            </p>
        </div>
        <div class="column">
            <label class="label">Religiao</label>
            <p class="control">
                <select class="select" style="width: 100%;" v-model="paciente.religiao_id" autocomplete="off">
                    <option>Selecione uma Religião</option>
                    <option v-for="item in religiaos" v-bind:value="item.id">{{item.nome}}</option>
                </select>
            </p>
        </div>
        <div class="column">
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
$this->Html->script('/js/pacientes/add.js', ['block' => 'script']);
?>