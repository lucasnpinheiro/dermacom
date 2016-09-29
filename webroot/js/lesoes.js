cake.lesoes = {};
cake.lesoes.openModal = function (id, classificacao_id, estagio_id) {
    $('#MyModal2').modal('show');
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: router.url + "lesoes/view/" + id + '/' + classificacao_id + '/' + estagio_id,
        success: function (result) {
            $('.modal-body').find('.sr-only').removeClass('sr-only');
            $('.modal-body').find('#acao').val('edit');
            $('.modal-body').find('#nome').val(result.leso.nome);
            $('.modal-body').find('#classificacao-nome').val(result.leso.Classificacoes.nome);
            $('.modal-body').find('#estagio-nome').val(result.leso.Estagios.nome);
            $('.modal-body').find('#estagio-codigo').val(result.leso.Estagios.codigo);
            $('.modal-body').find('#estagio-peso').val(result.leso.Estagios.peso);
            $('.modal-body').find('#id').val(result.leso.id);
            $('.modal-body').find('#classificacao-id').val(result.leso.Classificacoes.id);
            $('.modal-body').find('#estagio-id').val(result.leso.Estagios.id);
            
            var list = [];
            $.each(result.classificacoes, function (k, v) {
                list.push('<option value="' + v + '"> </option>');
            });
            $('.modal-body').find('#dataListclassificacao_nome').html(list.join(' '));
            cake.util.mascara();
        }
    });
};
cake.lesoes.openModalNew = function () {
    $('#MyModal2').modal('show');
    $('.modal-body').find('.sr-only').removeClass('sr-only');
    $('.modal-body').find('#acao').val('novo');
    $('.modal-body').find('#nome').val('');
    $('.modal-body').find('#classificacao-nome').val('');
    $('.modal-body').find('#estagio-nome').val('');
    $('.modal-body').find('#estagio-codigo').val('');
    $('.modal-body').find('#estagio-peso').val('');
    $('.modal-body').find('#id').val('');
    $('.modal-body').find('#classificacao-id').val('');
    $('.modal-body').find('#estagio-id').val('');
    cake.util.mascara();
};

cake.lesoes.save = function () {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: $('.modal-body').find(':input').serialize(),
        url: router.url + "lesoes/add",
        success: function (result, textStatus, jqXHR) {
            $('#MyModal2').modal('hide');
            //cake.lesoes.list(result.comissoesCorreco.comissao_id);
            cake.util.redirect(router.url + "lesoes/index");
        }
    });
};

cake.lesoes.list = function (id) {
    $.ajax({
        type: 'GET',
        dataType: 'json',
        url: router.url + "lesoes/index?comissao_id=" + id,
        success: function (result, textStatus, jqXHR) {
            var list = '';
            $.each(result.comissoesCorrecoes, function (k, v) {
                list += '<tr ondblclick="cake.lesoes.openModal(' + v.id + ')">';
                list += '<td><div><input class="selectOne" type="checkbox" name="selectOne.' + v.id + '" value="' + v.id + '" id="selectone-' + v.id + '"></div></td>';
                list += '<td>' + v.ano + '</td>';
                list += '<td><span class="label label-default">' + cake.util.mes(v.mes) + '</span></td>';
                list += '<td>' + v.percentual + '%</td>';
                list += '</tr>';
            });
            $('#lista-lesoes').html(list);
        }
    });
};