data.pacientes_programacoes_hora = '';
var app = new Vue({
    el: '#app',
    data: data,
    directives: [
        'mask'
    ],
    computed: {
        cpfMask: function () {
            this.paciente.cpf = extra.processaMascara(this.paciente.cpf, '###.###.###-##', 'int');
            return;
        },
        cepMask: function () {
            this.paciente.cep = extra.processaMascara(this.paciente.cep, '#####-###', 'int');
            this.paciente = extra.input.cep(this.paciente, this);
            return;
        }
    },
    methods: {
        onFileChange(e) {
            console.log(e);
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
                vm.paciente.foto_url = e.target.result;
                vm.paciente.foto = vm.paciente.foto_url;
            };
            reader.readAsDataURL(file);
        },
        excluir: function () {
            var obj = this;
            if (obj.paciente.id > 0) {
                extra.modalConfirme({msg: 'Deseja realmente excluir este registro?'}, function (a) {
                    if (a === true) {
                        obj.$http.get(router.url + Inflector.dasherize(Inflector.underscore(router.params.controller)) + '/delete/' + linha).then(function (resp) {
                            extra.modal({msg: 'Registro excluido com sucesso.'}, function () {
                                obj.novo();
                            });
                        }, function (resp) {
                            extra.modal({msg: 'Não foi possivel excluir o registro'}, function () {});
                        });
                    }
                });
            } else {
                obj.novo();
            }
            return true;
        },
        gravar: function () {
            this.$http.post(router.url + 'pacientes/gravar', this.paciente).then(function (resp) {
                this.retorno(resp);
            }, function (resp) {
                this.retorno(resp);
            });
            return true;
        },
        editar: function () {
            extra.modal({msg: 'Funcionalidade indisponível nesta tela.'}, function () {});
        },
        novo: function () {
            window.location.href = router.url + Inflector.dasherize(Inflector.underscore(router.params.controller)) + '/add';
        },
        consultar: function () {
            window.location.href = router.url + Inflector.dasherize(Inflector.underscore(router.params.controller));
        },
        imprimir: function () {
            extra.modal({msg: 'Funcionalidade não implementada.'}, function () {});
        },
        retorno: function (resp) {
            if (resp.status === 200) {
                this.paciente.id = resp.body.result.id;
                this.paciente.id;
                extra.modal({msg: 'Os dados foram salvo com sucesso.'}, function () {});
            } else {
                extra.modal({msg: 'Não foi possivel salvar os dados, verifique novamente.'}, function () {});

            }
            return;
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
            console.log(k);
            console.log(item);
            extra.byId(lista + '_id').value = k;
            switch (lista) {
                case 'pacientes_acompanhamentos':
                    extra.byId('pacientes_acompanhamentos_medico').value = item.medico;
                    extra.byId('pacientes_acompanhamentos_telefone').value = extra.processaMascara(item.telefone, '(##) #####-####', 'int');
                    extra.byId('pacientes_acompanhamentos_especialidade_id').value = item.especialidade_id;
                    break;

                case 'pacientes_emergencias':
                    extra.byId('pacientes_emergencias_nome').value = item.nome;
                    extra.byId('pacientes_emergencias_telefone').value = extra.processaMascara(item.telefone, '(##) #####-####', 'int');
                    extra.byId('pacientes_emergencias_parentesco_id').value = item.parentesco_id;
                    break;

                case 'pacientes_programacoes':
                    extra.byId('pacientes_programacoes_motivo').value = item.motivo;
                    extra.byId('pacientes_programacoes_data').value = extra.input._data(item.data).split('/').reverse().join('-');
                    extra.byId('pacientes_programacoes_hora').value = extra.input.hora(item.hora);
                    extra.byId('pacientes_programacoes_usuario_id').value = item.usuario_id;
                    break;

                case 'pacientes_servicos':
                    extra.byId('pacientes_servicos_servicos_clinica_id').value = item.servicos_clinica_id;
                    break;

                case 'pacientes_convenios':
                    extra.byId('pacientes_convenios_convenio_id').value = item.convenio_id;
                    extra.byId('pacientes_convenios_plano').value = item.plano;
                    extra.byId('pacientes_convenios_matricula').value = item.matricula;
                    extra.byId('pacientes_convenios_titular').value = item.titular;
                    break;

                case 'pacientes_soube':
                    extra.byId('pacientes_soube_como').value = item.como;
                    extra.byId('pacientes_soube_nome').value = item.nome;
                    extra.byId('pacientes_soube_telefone').value = extra.processaMascara(item.telefone, '(##) #####-####', 'int');
                    extra.byId('pacientes_soube_especialidade_id').value = item.especialidade_id;
                    break;

                case 'contatos':
                    extra.byId('contatos_contatos_tipo_id').value = item.contatos_tipo_id;
                    extra.byId('contatos_valor').value = item.valor;
                    break;

            }
        },
        changeItem: function (event) {
            extra.byId('contatos_valor').removeAttribute("onkeyup");
            extra.byId('contatos_valor').removeAttribute("maxlength");
            var k = event.target.value;
            var item = this.contatosTipos.filter(function (item, chave) {
                return item.id == k;
            });
            if (item[0].mascara === 'tel') {
                extra.byId('contatos_valor').setAttribute("onkeyup", "mascaraTel(this, '(##) #####-####')");
                extra.byId('contatos_valor').setAttribute("maxlength", 15);
            }
        },
        add: function (lista) {
            var id = extra.byId(lista + '_id').value;
            if (id !== '') {
                this.remove(parseInt(id), lista);
            }
            extra.byId(lista + '_id').value = '';
            switch (lista) {
                case 'pacientes_acompanhamentos':
                    var dados = {
                        medico: extra.byId('pacientes_acompanhamentos_medico').value,
                        telefone: extra.byId('pacientes_acompanhamentos_telefone').value,
                        especialidade_id: extra.byId('pacientes_acompanhamentos_especialidade_id').value,
                        especialidade: {
                            nome: extra.input.getSelectedText('pacientes_acompanhamentos_especialidade_id'),
                            id: extra.byId('pacientes_acompanhamentos_especialidade_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('pacientes_acompanhamentos_medico').value = '';
                    extra.byId('pacientes_acompanhamentos_telefone').value = '';
                    extra.byId('pacientes_acompanhamentos_especialidade_id').value = '';
                    break;

                case 'pacientes_emergencias':
                    var dados = {
                        nome: extra.byId('pacientes_emergencias_nome').value,
                        telefone: extra.byId('pacientes_emergencias_telefone').value,
                        parentesco_id: extra.byId('pacientes_emergencias_parentesco_id').value,
                        parentesco: {
                            nome: extra.input.getSelectedText('pacientes_emergencias_parentesco_id'),
                            id: extra.byId('pacientes_emergencias_parentesco_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('pacientes_emergencias_nome').value = '';
                    extra.byId('pacientes_emergencias_telefone').value = '';
                    extra.byId('pacientes_emergencias_parentesco_id').value = '';
                    break;

                case 'pacientes_programacoes':
                    var dados = {
                        motivo: extra.byId('pacientes_programacoes_motivo').value,
                        data: extra.byId('pacientes_programacoes_data').value,
                        hora: extra.byId('pacientes_programacoes_hora').value,
                        usuario_id: extra.byId('pacientes_programacoes_usuario_id').value,
                        usuario: {
                            nome: extra.input.getSelectedText('pacientes_programacoes_usuario_id'),
                            id: extra.byId('pacientes_programacoes_usuario_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('pacientes_programacoes_motivo').value = '';
                    extra.byId('pacientes_programacoes_data').value = '';
                    extra.byId('pacientes_programacoes_hora').value = '';
                    extra.byId('pacientes_programacoes_usuario_id').value = '';
                    break;

                case 'pacientes_servicos':
                    var dados = {
                        servicos_clinica_id: extra.byId('pacientes_servicos_servicos_clinica_id').value,
                        servicos_clinica: {
                            nome: extra.input.getSelectedText('pacientes_servicos_servicos_clinica_id'),
                            id: extra.byId('pacientes_servicos_servicos_clinica_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('pacientes_servicos_servicos_clinica_id').value = '';
                    break;

                case 'pacientes_soube':
                    var dados = {
                        como: extra.byId('pacientes_soube_como').value,
                        nome: extra.byId('pacientes_soube_nome').value,
                        telefone: extra.byId('pacientes_soube_telefone').value,
                        especialidade_id: extra.byId('pacientes_soube_especialidade_id').value,
                        especialidade: {
                            nome: extra.input.getSelectedText('pacientes_soube_especialidade_id'),
                            id: extra.byId('pacientes_soube_especialidade_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('pacientes_soube_como').value = '';
                    extra.byId('pacientes_soube_nome').value = '';
                    extra.byId('pacientes_soube_telefone').value = '';
                    extra.byId('pacientes_soube_especialidade_id').value = '';
                    break;

                case 'pacientes_convenios':
                    var dados = {
                        titular: extra.byId('pacientes_convenios_titular').value,
                        matricula: extra.byId('pacientes_convenios_matricula').value,
                        plano: extra.byId('pacientes_convenios_plano').value,
                        convenio_id: extra.byId('pacientes_convenios_convenio_id').value,
                        convenio: {
                            nome: extra.input.getSelectedText('pacientes_convenios_convenio_id'),
                            id: extra.byId('pacientes_convenios_convenio_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('pacientes_convenios_titular').value = '';
                    extra.byId('pacientes_convenios_matricula').value = '';
                    extra.byId('pacientes_convenios_plano').value = '';
                    extra.byId('pacientes_convenios_convenio_id').value = '';
                    break;

                case 'contatos':
                    var dados = {
                        contatos_tipo_id: extra.byId('contatos_contatos_tipo_id').value,
                        valor: extra.byId('contatos_valor').value,
                        contatos_tipo: {
                            nome: extra.input.getSelectedText('contatos_contatos_tipo_id'),
                            id: extra.byId('contatos_contatos_tipo_id').value
                        }
                    };
                    this.paciente[lista].push(dados);
                    extra.byId('contatos_contatos_tipo_id').value = '';
                    extra.byId('contatos_valor').value = '';
                    break;

            }
        }
    }
});

