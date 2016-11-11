function mascara(t, mask) {
    t.value = extra.processaMascara(t.value, mask);
}
function mascaraTel(t, mask) {
    t.value = t.value.replace(/\D/g, '');
    if (t.value.length > 0) {
        mascara(t, mask);
    } else {
        t.value = '';
    }
}

var extra = {};

extra.modal = function (config, callback) {
    config = _.merge({msg: '', title: 'Aviso!',  ok: 'OK'}, config);
    var template = ' <div id="modal-alert" class="modal"> <div class="modal-background"></div> <div class="modal-card"> <header class="modal-card-head"> <p class="modal-card-title">' + config.title + '</p> <button class="delete"></button> </header> <section class="modal-card-body">' + config.msg + '</section> <footer class="modal-card-foot"> <a class="button is-primary ok">' + config.ok + '</a> </footer> </div> </div>';

    $('#item-extras').html(template);
    $('html').addClass('is-clipped');
    $('#modal-alert').addClass('is-active');

    $('#modal-alert .ok').click(function () {
        $('html').removeClass('is-clipped');
        $(this).parent().removeClass('is-active');
        $('#item-extras').html('');
        callback(true);
    });
}

extra.modalConfirme = function (config, callback) {
    config = _.merge({msg: '', title: 'Aviso!', cancel: 'Cancelar', ok: 'OK'}, config);
    var template = ' <div id="modal-confirme" class="modal"> <div class="modal-background"></div> <div class="modal-card"> <header class="modal-card-head"> <p class="modal-card-title">' + config.title + '</p> <button class="delete"></button> </header> <section class="modal-card-body">' + config.msg + '</section> <footer class="modal-card-foot"> <a class="button is-primary ok">' + config.ok + '</a> <a class="button is-danger cancel">' + config.cancel + '</a> </footer> </div> </div>';

    $('#item-extras').html(template);
    $('html').addClass('is-clipped');
    $('#modal-confirme').addClass('is-active');

    $('#modal-confirme .ok').click(function () {
        $('html').removeClass('is-clipped');
        $(this).parent().removeClass('is-active');
        $('#item-extras').html('');
        callback(true);
    });

    $('#modal-confirme .cancel').click(function () {
        $('html').removeClass('is-clipped');
        $(this).parent().removeClass('is-active');
        $('#item-extras').html('');
        callback(false);
    });
}

extra.readURL = function (input, obj) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            //extra.byId(id).setAttribute('src', e.target.result);
            obj = e.target.result;
        };

        reader.readAsDataURL(input.files[0]);
    }
}

extra.processaMascara = function (input, mask, remove) {
    if (!!input) {
        if (remove === 'int') {
            input = input.replace(/\D/g, '');
        }
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
    } else {
        return '';
    }
};
extra.byId = function (name) {
    return document.getElementById(name);
};
extra.byClass = function (name) {
    return document.getElementsByClassName(name);
};
extra.byName = function (name) {
    return document.getElementsByTagName(name);
};
extra.input = {};
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
    if (!!val) {
        d = d.replace(/\D/g, '');
        if (d.length > 7) {
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

Vue.filter('telefone', function (value) {
    return extra.processaMascara(value, '(##) #####-####', 'int');
});

Vue.filter('idade', function (value) {
    var d = value;
    if (!!d) {
        d = d.replace(/\D/g, '');
        if (d.length > 7) {
            var data = moment(value).format('DD/MM/YYYY');
            d = data.substr(0, 2);
            d += '/' + data.substr(2, 2);
            d += '/' + data.substr(4, 4);
            var a = moment(value);
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

            d = dfa + ' A, ' + mad + ' M e ' + mdd + ' D';
        }
    }
    return d;
});

Vue.filter('hora', function (value) {
    return extra.input.hora(value);
});

Vue.component('my-component', {
    template: '<p class="control has-addons"> <span class="select"> <select> <option>$</option> <option>£</option> <option>€</option> </select> </span> <input class="input" type="text" placeholder="Amount of money"> <a class="button is-primary"> Transfer </a> </p>'
})