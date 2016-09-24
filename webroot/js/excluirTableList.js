cake.tableList = {
    selectAll: function (obj) {
        if ($(obj).is(":checked")) {
            $('.selectOne').attr('checked', 'checked');
        } else {
            $('.selectOne').removeAttr('checked');
        }
    },
    enviar: function (obj) {
        var iconLoad = '<i class="fa fa-spinner fa-pulse fa-fw"></i> Excluindo';
        var iconBtn = '<i class="fa fa-trash"></i> Excluir';
        var href = $(obj).attr('url');
        var ids = [];
        $('.selectOne').each(function () {
            if ($(this).is(":checked")) {
                ids.push($(this).val());
            }
        });
        if (ids.length > 0) {
            $(obj).html(iconLoad);
            bootbox.dialog({
                message: "Deseja realmente remover este(s) registro(s)?",
                title: "Remoção de registro",
                buttons: {
                    success: {
                        label: "Sim",
                        className: "btn-success",
                        callback: function () {

                            $.ajax({
                                method: "POST",
                                url: href,
                                dataType: 'JSON',
                                data: {ids: ids},
                                success: function (ret) {
                                    var t = ids.length;
                                    var q = 0;
                                    if (ret.cod == 999) {
                                        $('.selectOne').each(function () {
                                            if ($(this).is(":checked")) {
                                                $(this).closest('tr').css({'background-color': 'red'}).delay(800).slideUp(300);
                                                q++;
                                                if (t === q) {
                                                    $(obj).html(iconBtn);
                                                }
                                            }
                                        });
                                    }

                                }
                            });
                        }
                    },
                    danger: {
                        label: "Não",
                        className: "btn-danger",
                        callback: function () {
                            $(obj).html(iconBtn);
                        }
                    }
                }
            });
        }
    }
};