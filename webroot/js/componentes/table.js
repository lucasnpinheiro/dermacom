var app = new Vue({
    el: '#app',
    data: {
        url: params.url,
        paging: {
            count: 0,
            page: 1,
            pageCount: 0,
            sort: '',
            q: '',
            direction: '',
            limit: 20
        },
        links: [],
        isPagination: false,
        isCarregando: true,
        isOpenDropdown: '',
        isOpenDropdownLimit: '',
        list: [],
        colums: params.colums
    },
    mounted: function(){
        this.load();
    },
    methods: {
        preLoad: function () {
            for (s in this.links) {
                if (this.links[s].page === this.paging.page) {
                    this.links[s].css = 'is-loading';
                }
            }
            //fa fa-spinner fa-sp in fa-3x fa-fw   
            this.load();
        },
        load: function () {
            this.$http.get(router.url + this.url, {params: this.paging}).then(function (resp) {
                this.retorno(resp);
            }, function (resp) {
                this.retorno(resp);
            });
        },
        retorno: function (resp) {
            if (resp.status === 200) {
                this.list = [];
                for (var i in resp.body.result) {
                    resp.body.result[i].linha_selecionada = '';
                    this.list.push(resp.body.result[i]);
                }
                this.paging.page = resp.body.paging.page;
                this.paging.pageCount = resp.body.paging.pageCount;
                this.paging.count = resp.body.paging.count;
                this.gerarPagination();
            }
            this.isCarregando = false;
        },
        gerarPagination: function () {
            var t = Math.ceil(this.paging.count / this.paging.limit);
            if (t > 0) {
                var i = this.paging.page - 4;
                if (i < 1) {
                    i = 1;
                }
                var f = this.paging.page + 4;
                if (f > t) {
                    f = t;
                }
                this.links = [];
                for (i; i <= f; i++) {
                    this.links.push({page: i, css: ''});
                }
            }

            this.isPagination = t > 0 ? true : false;
        },
        loadPage: function (page) {
            if (page <= this.paging.pageCount && page >= 1) {
                if (page != this.paging.page) {
                    this.paging.page = page;
                    this.preLoad();
                }
            }
        },
        search: function (page) {
            this.paging.page = 1;
            this.preLoad();
        },
        activePage: function (page) {
            if (this.paging.page == page) {
                return 'is-primary';
            } else {
                return '';
            }
        },
        dropdown: function () {
            this.isOpenDropdown = this.isOpenDropdown === '' ? 'is-active' : '';
            return;
        },
        dropdownUl: function (index) {
            this.colums[index].ative = !this.colums[index].ative;
            this.colums[index].css = this.colums[index].css === '' ? 'active' : '';
        },
        dropdownLimit: function () {
            this.isOpenDropdownLimit = this.isOpenDropdownLimit === '' ? 'is-active' : '';
            return;
        },
        dropdownUlLimit: function (limit) {
            this.paging.page = 1;
            this.paging.limit = limit;
            this.preLoad();
        },
        sort: function (key) {
            if (this.paging.sort === key) {
                this.paging.direction = this.paging.direction === 'asc' ? 'desc' : 'asc';
            } else {
                this.paging.direction = 'asc';
            }
            this.paging.sort = key;
            this.sortCss(key);
            this.preLoad();
        },
        sortCss: function (key) {
            if (this.paging.sort === key) {
                return 'fa fa-sort-' + this.paging.direction;
            } else {
                return '';
            }
        },
        linhaSelecionada: function (key) {

            for (var i in this.list) {
                this.list[i].linha_selecionada = '';
            }

            this.list[key].linha_selecionada = 'linha-selecionada';
        },
        gravar: function () {
            alert('Função indisponivel nesta tela.');
        },
        editar: function () {
            var linha = null;
            for (var i in this.list) {
                if (this.list[i].linha_selecionada !== '') {
                    linha = this.list[i].id;
                }
            }
            if (linha > 0) {
                window.location.href = router.url + 'pacientes/edit/' + linha;
            } else {
                alert('Selecione um registro para ser editado.');
            }
        }
    }
});
