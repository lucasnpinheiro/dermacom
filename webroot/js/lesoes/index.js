var app = new Vue({
    el: '#app',
    data: {
        lista: data,
        listaLesao: lesoesList,
        listaClassificacoes: classificacoesList
    },
    methods: {
        excluir: function () {
            alert('Não implementado');
        },
        imprimir: function () {
            alert('Não implementado');
        },
        consultar: function () {
            alert('Não implementado');
        },
        editar: function () {
            alert('Não implementado');
        },
        novo: function () {
            var itens = [
                'lesao', 'classificacao', 'estagio', 'descricao', 'peso', 'id', 'classificacao-id', 'estagio-id'
            ];
            for (var i = 0; i < itens.length; i++) {
                document.getElementById('input-' + itens[i]).classList.remove('is-danger');
                document.getElementById('input-' + itens[i]).value = '';
            }
        },
        gravar: function () {
            var itens = [
                'lesao', 'classificacao', 'estagio', 'descricao', 'peso', 'id', 'classificacao-id', 'estagio-id'
            ];

            var dados = {};

            var error = false;

            for (var i = 0; i < itens.length; i++) {
                document.getElementById('input-' + itens[i]).classList.remove('is-danger');
                if (document.getElementById('input-' + itens[i]).value === '') {
                    if (itens[i] != 'id' && itens[i] != 'classificacao-id' && itens[i] != 'estagio-id')
                        error = true;
                    document.getElementById('input-' + itens[i]).classList.add('is-danger');
                }
                dados[itens[i].replace('-', '_')] = document.getElementById('input-' + itens[i]).value;
            }
            if (error === false) {
                this.$http.post(router.url + 'lesoes/gravar', dados).then(function (resp) {
                    var r = JSON.parse(resp.body);
                    this.lista = r.data;
                    this.listaLesao = r.lesoesList;
                    for (var i = 0; i < itens.length; i++) {
                        document.getElementById('input-' + itens[i]).classList.remove('is-danger');
                        document.getElementById('input-' + itens[i]).value = '';
                    }
                }, function (resp) {});
            }


        },
        keydown: function (e) {
            var lesao = document.getElementById('input-lesao').value;
            this.$http.post(router.url + 'lesoes/lista-classificacoes', {q: lesao}).then(function (resp) {
                this.listaClassificacoes = JSON.parse(resp.body);
            }, function (resp) {});
        },
        editarEstagios: function (obj) {
            var itens = [
                'lesao', 'classificacao', 'estagio', 'descricao', 'peso', 'id', 'classificacao-id', 'estagio-id'
            ];
            for (var i = 0; i < itens.length; i++) {
                document.getElementById('input-' + itens[i]).classList.remove('is-danger');
                document.getElementById('input-' + itens[i]).value = obj[itens[i].replace('-', '_')];
            }
            app.keydown(this);
        }
    }
});

var windowHeight = window.innerHeight;
document.getElementById('listagem-lesoes').style.height = (windowHeight - 78) + "px";