var app = new Vue({
    el: '#app',
    data: data,
    computed: {
        dataNascimentoMask: function () {
            var r = extra.input.data(this.paciente);
            console.log(r);
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
                console.log(i);
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
        }
    }
});