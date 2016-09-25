cake.comissoes = {};
cake.comissoes.openModal = function (id) {
    $('#MyModal2').modal('show');
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: router.url + "comissoes-correcoes/view/" + id,
        success: function (result) {
            $('.modal-body').find('#ano').val(result.comissoesCorreco.ano);
            $('.modal-body').find('#percentual').val(result.comissoesCorreco.percentual);
            $('.modal-body').find('#mes').val(result.comissoesCorreco.mes);
            $('.modal-body').find('#id').val(result.comissoesCorreco.id);
            cake.util.mascara();
        }
    });
};
cake.comissoes.openModalNew = function () {
    $('#MyModal2').modal('show');
    $('.modal-body').find('#ano').val('');
    $('.modal-body').find('#percentual').val('');
    $('.modal-body').find('#mes').val('');
    $('.modal-body').find('#id').val('');
    cake.util.mascara();
};

cake.comissoes.save = function () {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {
            comissao_id: $('.modal-body').find('#comissao-id').val(),
            ano: $('.modal-body').find('#ano').val(),
            percentual: $('.modal-body').find('#percentual').val(),
            mes: $('.modal-body').find('#mes').val(),
            id: $('.modal-body').find('#id').val()
        },
        url: router.url + "comissoes-correcoes/add",
        success: function (result, textStatus, jqXHR) {
            $('#MyModal2').modal('hide');
            cake.comissoes.list(result.comissoesCorreco.comissao_id);
        }
    });
};

cake.comissoes.list = function (id) {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: router.url + "comissoes-correcoes/index?comissao_id=" + id,
        success: function (result, textStatus, jqXHR) {
            var list = '';
            $.each(result.comissoesCorrecoes, function (k, v) {
                list += '<tr ondblclick="cake.comissoes.openModal(' + v.id + ')">';
                list += '<td><div><input class="selectOne" type="checkbox" name="selectOne.' + v.id + '" value="' + v.id + '" id="selectone-' + v.id + '"></div></td>';
                list += '<td>' + v.ano + '</td>';
                list += '<td><span class="label label-default">' + cake.util.mes(v.mes) + '</span></td>';
                list += '<td>' + v.percentual + '%</td>';
                list += '</tr>';
            });
            $('#lista-comissoes-correcoes').html(list);
        }
    });
};