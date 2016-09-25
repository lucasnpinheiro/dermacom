cake = {};
cake.html = {};
cake.util = {};
cake.util.exec = function (obj, name) {
    var f = new Function($(obj).attr(name));
    f.call(this);
};
cake.util.explodeDate = function (str) {
    var t = str.split('T');
    var d = t[0].split('-');

    var h = t[1].split('-');

    return d[2] + '/' + d[1] + '/' + d[0] + ' ' + h[0];
};
cake.util.currency = function (str) {
    if (str === null) {
        return '';
    }
    return 'R$ ' + cake.util.number_format(str, 2, ',', '.');

};
cake.util.toPercentage = function (str) {
    if (str === null) {
        return '';
    }
    return cake.util.number_format(str, 2, ',', '') + '%';

};
cake.util.quantidade = function (str) {
    return cake.util.number_format(str, 3, '.', '');
};
cake.util.number_format = function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '')
            .replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + (Math.round(n * k) / k)
                        .toFixed(prec);
            };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
            .split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '')
            .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
                .join('0');
    }
    return s.join(dec);
};
cake.util.replace = function (search, replace, subject, count) {
    var i = 0,
            j = 0,
            temp = '',
            repl = '',
            sl = 0,
            fl = 0,
            f = [].concat(search),
            r = [].concat(replace),
            s = subject,
            ra = Object.prototype.toString.call(r) === '[object Array]',
            sa = Object.prototype.toString.call(s) === '[object Array]';
    s = [].concat(s);

    if (typeof (search) === 'object' && typeof (replace) === 'string') {
        temp = replace;
        replace = new Array();
        for (i = 0; i < search.length; i += 1) {
            replace[i] = temp;
        }
        temp = '';
        r = [].concat(replace);
        ra = Object.prototype.toString.call(r) === '[object Array]';
    }

    if (count) {
        this.window[count] = 0;
    }

    for (i = 0, sl = s.length; i < sl; i++) {
        if (s[i] === '') {
            continue;
        }
        for (j = 0, fl = f.length; j < fl; j++) {
            temp = s[i] + '';
            repl = ra ? (r[j] !== undefined ? r[j] : '') : r[0];
            s[i] = (temp)
                    .split(f[j])
                    .join(repl);
            if (count) {
                this.window[count] += ((temp.split(f[j]))
                        .length - 1);
            }
        }
    }
    return sa ? s : s[0];
};
cake.util.rand = function (max, min) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}
cake.util.cep = function (obj) {
    $.ajax({
        url: router.url + "util/cep/" + $(obj).val() + '.json',
        success: function (result) {
            if (result.retorno.status == 'OK') {
                var campos = JSON.parse($(obj).attr('data-campos'));
                $.each(campos, function (a, b) {
                    $(a).val(result.retorno.Cep[b]);
                });
                $($(obj).attr('data-focus')).focus();
                if ($(obj).attr('data-load-function') != '') {
                    cake.util.exec(obj, 'data-load-function');
                }
            }
        }
    });
}
cake.util.cepNumero = function (obj) {
    var cep = $($(obj).attr('data-cep')).val();
    $.ajax({
        url: router.url + "util/posicao/" + cep + '/' + $(obj).val() + '.json',
        success: function (result) {
            var campos = JSON.parse($(obj).attr('data-campos'));
            $.each(campos, function (a, b) {
                $(a).val(result.retorno[b]);
            });
        }
    });
}
cake.util.cidades = function (obj, campo) {
    $.ajax({
        url: router.url + 'util/lista-cidades/' + $(obj).val() + '.json',
        dataType: 'json',
        success: function (result) {
            var options = '<option value="">Selecione uma Cidade</option>';
            $.each(result, function (a, b) {
                options += '<option value="' + a + '">' + b + '</option>';
            });
            $(campo).html(options);
        }
    });
}
cake.util.mascara = function () {
    $('input.cep').mask('99999-999');
    $('input.telefone').mask('(99) 99999-999?9');
    $('input.cpf').mask('999.999.999-99');
    $('input.cnpj').mask('99.999.999/9999-99');
    $('input.numero').each(function () {
        $(this).unmask();
        $(this).mask($(this).attr('data-mask'), {placeholder: $(this).attr('data-placeholder')});
    });
    $('input.data_hora').each(function () {
        $(this).unmask();
        $(this).mask($(this).attr('data-mask'), {placeholder: $(this).attr('data-placeholder')});
    });
    $('input.data').each(function () {
        $(this).unmask();
        $(this).mask($(this).attr('data-mask'), {placeholder: $(this).attr('data-placeholder')});
    });
    $('input.moeda').each(function () {
        $(this).maskMoney('destroy');
        $(this).maskMoney({allowZero: $(this).attr('data-allowZero'), prefix: $(this).attr('data-prefix'), allowNegative: $(this).attr('data-allowNegative'), thousands: $(this).attr('data-thousands'), decimal: $(this).attr('data-decimal'), affixesStay: $(this).attr('data-affixesStay')});
    });
    $('input.porcentagem').each(function () {
        $(this).maskMoney('destroy');
        $(this).maskMoney({allowZero: $(this).attr('data-allowZero'), prefix: $(this).attr('data-prefix'), allowNegative: $(this).attr('data-allowNegative'), thousands: $(this).attr('data-thousands'), decimal: $(this).attr('data-decimal'), affixesStay: $(this).attr('data-affixesStay')});
    });
    $('input.quantidade').each(function () {
        $(this).maskMoney('destroy');
        $(this).maskMoney({prefix: $(this).attr('data-prefix'), allowNegative: $(this).attr('data-allowNegative'), thousands: $(this).attr('data-thousands'), decimal: $(this).attr('data-decimal'), affixesStay: $(this).attr('data-affixesStay')});
    });
    $('input.posicao').each(function () {
        $(this).maskMoney('destroy');
        $(this).maskMoney({precision: $(this).attr('data-precision'), prefix: $(this).attr('data-prefix'), allowNegative: $(this).attr('data-allowNegative'), thousands: $(this).attr('data-thousands'), decimal: $(this).attr('data-decimal'), affixesStay: $(this).attr('data-affixesStay')});
    });

    $('input.cpf_cnpj').focus(function () {
        try {
            $(this).unmask();
        } catch (e) {
        }
    }).change(function () {
        var obj = $(this);
        var valor = $(obj).val();
        try {
            $(obj).unmask();
        } catch (e) {
        }
        valor = cake.util.replace('.', '', valor);
        valor = cake.util.replace('-', '', valor);
        valor = cake.util.replace('/', '', valor);
        var tamanho = valor.length;
        $(obj).val(valor);
        if (tamanho <= 11) {
            $(obj).mask("999.999.999-99");
        } else {
            $(obj).mask("99.999.999/9999-99");
        }
    });
}
cake.util.slug = function (str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to = "aaaaeeeeiiiioooouuuunc------";
    for (var i = 0, l = from.length; i < l; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

    return str;
}
cake.util.mes = function (id) {
    var m = [];
    m[1] = 'Janeiro';
    m[2] = 'Fevereiro';
    m[3] = 'Março';
    m[4] = 'Abrirl';
    m[5] = 'Maio';
    m[6] = 'Junho';
    m[7] = 'Julho';
    m[8] = 'Agosto';
    m[9] = 'Setembro';
    m[10] = 'Outubro';
    m[11] = 'Novembro';
    m[12] = 'Dezembro';
    return m[id];
}
cake.util.convertFloat = function (valor) {
    if (!valor) {
        valor = 0;
    } else {
        valor = cake.util.replace('R$', '', valor);
        valor = cake.util.replace('.', '', valor);
        valor = cake.util.replace(' ', '', valor);
        valor = cake.util.replace(',', '.', valor);
        valor = $.trim(valor);
    }
    return parseFloat(valor);
};
cake.html.dblclick = function (obj) {
    window.location.href = $(obj).attr('href');
    console.log(obj)
};
cake.html.label = function (str, css) {
    return '<span class="label label-' + css + '">' + str + '</span>';
};
cake.html.myAlert = function (str, css) {
    var t = '<div class="alert alert-' + css + ' fade in"> <button class="close" data-dismiss="alert"><span>×</span></button> ' + str + ' </div>';
    $('div.my-alert').html(t);
    $('div.my-alert').show();
};

$(document).ready(function () {
    cake.util.mascara();
    $('.dbClick').dblclick(function () {
        cake.html.dblclick($(this));
    });
});