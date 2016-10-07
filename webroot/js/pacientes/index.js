var app = new Vue({
    el: '#app',
    data: {
        paging: {
            count: 0,
            page: 1,
            sort: '',
            q: '',
            direction: '',
            limit: 1
        },
        links: [],
        isPagination: false,
        isCarregando: true,
        list: []
    },
    methods: {
        load: function () {
            this.isCarregando = true;
            this.$http.get(router.url + 'pacientes/index-load', {params: this.paging}).then(function (resp) {
                this.retorno(resp);
            }, function (resp) {
                this.retorno(resp);
            });
        },
        retorno: function (resp) {
            if (resp.status === 200) {
                this.list = resp.body.result;
                this.paging.page = resp.body.paging.page;
                this.paging.count = resp.body.paging.count;
                this.gerarPagination();
            }
            this.isCarregando = false;
        },
        gerarPagination: function () {
            var t = Math.round(this.paging.count / this.paging.limit);
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
                    this.links.push({page: i});
                }
            }

            this.isPagination = t > 0 ? true : false;
        },
        loadPage: function (page) {
            this.paging.page = page;
            this.load();
        },
        search: function (page) {
            this.paging.page = 1;
            this.load();
        },
        activePage: function (page) {
            if (this.paging.page == page) {
                return 'is-primary';
            } else {
                return '';
            }
        }


    }
});
app.load();