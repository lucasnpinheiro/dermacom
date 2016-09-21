cake.tableList = {
    selectAll: function (obj) {
        if ($(obj).is(":checked")) {
            $('.selectOne').attr('checked', 'checked');
        } else {
            $('.selectOne').removeAttr('checked');
        }
    },
    enviar : function(obj){
        var href = $(obj).attr('url');
        console.log(href);
    }
};