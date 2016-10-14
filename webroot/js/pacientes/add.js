data.pacientes_programacoes_hora = '';
var app = new Vue({
    el: '#app',
    data: data,
    directives: [
        'mask'
    ],
    computed: {
        dataNascimentoMask: function () {
            var r = extra.input.data(this.paciente);
            return r;
        },
        cpfMask: function () {
            var r = extra.input.cpf(this.paciente);
            return r;
        },
        cepMask: function () {
            var r = extra.input.cep(this.paciente, this);
            return r;
        }
    },
    methods: {
        gravar: function () {
            this.$http.post(router.url + 'pacientes/gravar', this.paciente).then(function (resp) {
                this.retorno(resp);
            }, function (resp) {
                this.retorno(resp);
            });
            return true;
        },
        retorno: function (resp) {
            if (resp.status === 200) {
                this.paciente.id = resp.body.result.id;
                return this.paciente.id;
            } else {

            }
        },
        tabActive: function (key) {
            for (var i in this.tabs) {
                this.tabs[i].active = false;
                this.tabs[i].class = '';
            }
            this.tabs[key].active = true;
            this.tabs[key].class = 'is-active';
        },
        remove: function (k, lista) {
            this.paciente[lista] = this.paciente[lista].filter(function (item, chave) {
                return chave !== k;
            });
            return this.paciente;
        },
        clone: function (k, lista) {
            var item = this.paciente[lista][k];
            document.getElementById(lista + '_id').value = k;
            switch (lista) {
                case 'pacientes_acompanhamentos':
                    document.getElementById('pacientes_acompanhamentos_medico').value = item.medico;
                    document.getElementById('pacientes_acompanhamentos_telefone').value = item.telefone;
                    document.getElementById('pacientes_acompanhamentos_especialidade_id').value = item.especialidade_id;
                    break;

                case 'pacientes_emergencias':
                    document.getElementById('pacientes_emergencias_nome').value = item.nome;
                    document.getElementById('pacientes_emergencias_telefone').value = item.telefone;
                    document.getElementById('pacientes_emergencias_parentesco_id').value = item.parentesco_id;
                    break;

                case 'pacientes_programacoes':
                    document.getElementById('pacientes_programacoes_motivo').value = item.motivo;
                    document.getElementById('pacientes_programacoes_data').value = extra.input._data(item.data).split('/').reverse().join('-');
                    document.getElementById('pacientes_programacoes_hora').value = extra.input.hora(item.hora);
                    document.getElementById('pacientes_programacoes_usuario_id').value = item.usuario_id;
                    break;

            }
        },
        add: function (lista) {
            var id = document.getElementById(lista + '_id').value;
            if (id !== '') {
                this.remove(parseInt(id), lista);
            }
            document.getElementById(lista + '_id').value = '';
            switch (lista) {
                case 'pacientes_acompanhamentos':
                    var dados = {
                        medico: document.getElementById('pacientes_acompanhamentos_medico').value,
                        telefone: document.getElementById('pacientes_acompanhamentos_telefone').value,
                        especialidade_id: document.getElementById('pacientes_acompanhamentos_especialidade_id').value,
                        especialidade: {
                            nome: extra.input.getSelectedText('pacientes_acompanhamentos_especialidade_id'),
                            id: document.getElementById('pacientes_acompanhamentos_especialidade_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    document.getElementById('pacientes_acompanhamentos_medico').value = '';
                    document.getElementById('pacientes_acompanhamentos_telefone').value = '';
                    document.getElementById('pacientes_acompanhamentos_especialidade_id').value = '';
                    break;

                case 'pacientes_emergencias':
                    var dados = {
                        nome: document.getElementById('pacientes_emergencias_nome').value,
                        telefone: document.getElementById('pacientes_emergencias_telefone').value,
                        parentesco_id: document.getElementById('pacientes_emergencias_parentesco_id').value,
                        parentesco: {
                            nome: extra.input.getSelectedText('pacientes_emergencias_parentesco_id'),
                            id: document.getElementById('pacientes_emergencias_parentesco_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    document.getElementById('pacientes_emergencias_nome').value = '';
                    document.getElementById('pacientes_emergencias_telefone').value = '';
                    document.getElementById('pacientes_emergencias_parentesco_id').value = '';
                    break;

                case 'pacientes_programacoes':
                    var dados = {
                        motivo: document.getElementById('pacientes_programacoes_motivo').value,
                        data: document.getElementById('pacientes_programacoes_data').value,
                        hora: document.getElementById('pacientes_programacoes_hora').value,
                        usuario_id: document.getElementById('pacientes_programacoes_usuario_id').value,
                        usuario: {
                            nome: extra.input.getSelectedText('pacientes_programacoes_usuario_id'),
                            id: document.getElementById('pacientes_programacoes_usuario_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    document.getElementById('pacientes_programacoes_motivo').value = '';
                    document.getElementById('pacientes_programacoes_data').value = '';
                    document.getElementById('pacientes_programacoes_hora').value = '';
                    document.getElementById('pacientes_programacoes_usuario_id').value = '';
                    break;

            }
        }
    }
});

