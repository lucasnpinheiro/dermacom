var extra = {};
extra.input = {};
extra.input.data = function (val) {
    var d = val.data_nascimento;
    var data = val.data_nascimento;
    if (!!d) {
        d = d.replace(/\D/g, '');
        data = data.replace(/\D/g, '');
        if (d.length > 7) {
            d = data.substr(0, 2);
            d += '/' + data.substr(2, 2);
            d += '/' + data.substr(4, 4);
            var a = moment(d.split('/').reverse().join('-'));
            var b = moment(new Date());
            var dfa = b.diff(a, 'years');
            var dfm = a.format('MM');
            var ma = moment().format('MM');
            var mad = parseInt(ma) - parseInt(dfm);
            mad = mad < 0 ? mad * -1 : mad;

            var dfd = a.format('DD');
            var md = moment().format('DD');
            var mdd = parseInt(md) - parseInt(dfd);
            mdd = mdd < 0 ? mdd * -1 : mdd;

            val.idade = dfa + ' A, ' + mad + ' M e ' + mdd + ' D';
        }
    }
    val.data_nascimento = d;
    return val;
};
extra.input.hora = function (value) {
    var v = value.split('T');
    if (v.length > 1) {
        v = v[1].split('-');
    }
    value = v[0];
    return value;
};
extra.input._data = function (value) {
    var v = value.split('T');
    value = v[0];
    return value;
};
extra.input.cpf = function (val) {
    var d = val.cpf;
    if (!!d) {
        d = d.replace(/\D/g, '');
        if (d.length > 10) {
            d = d.substr(0, 3) + '.' + d.substr(3, 3) + '.' + d.substr(6, 3) + '-' + d.substr(9, 2);
        }
    }
    val.cpf = d;
    return val;
};
extra.input.cep = function (val, obj) {
    var d = val.cep;
    if (!!d) {
        d = d.replace(/\D/g, '');
        if (d.length > 7) {
            d = d.substr(0, 5) + '-' + d.substr(5, 3);

            obj.$http.post(router.url + 'utilits/cep/' + d).then(function (resp) {
                resp = resp.body.retorno.result;
                if (resp.status === 'OK') {
                    val.bairro = resp.Cep.bairro;
                    val.cidade = resp.Cep.cidade;
                    val.estado = resp.Cep.uf;
                    val.endereco = resp.Cep.logradouro;
                    val.nacionalidade_id = 1;
                    document.getElementById("inputNumero").focus();
                }
            }, function (resp) {});

        }
    }
    val.cep = d;
    return val;
};


extra.input.getSelectedText = function (elementId) {
    var elt = document.getElementById(elementId);

    if (elt.selectedIndex == -1)
        return null;

    return elt.options[elt.selectedIndex].text;
};

Vue.directive('mask', {
    update: function (el, binding, vnode, oldVnode) {
        var parse = function (input, mask) {
            var maskared = '';
            var k = 0;
            for (var i = 0; i <= mask.length - 1; i++) {
                if (mask[i] === '#') {
                    if (input[k] !== undefined)
                        maskared += input[k++];
                } else {
                    if (mask[i] !== undefined)
                        maskared += mask[i];
                }
            }
            return maskared;
        };
        vnode.elm.value = parse(oldVnode.elm.value, binding.expression);
    }
});

Vue.filter('cpf', function (value) {
    value = value.replace(/\D/g, '');
    return value.substr(0, 3) + '.' + value.substr(3, 3) + '.' + value.substr(6, 3) + '-' + value.substr(9, 2);
});

Vue.filter('data', function (value) {
    return extra.input._data(value).split('-').reverse().join('/');
});
Vue.filter('hora', function (value) {
    return extra.input.hora(value);
});