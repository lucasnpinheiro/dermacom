Vue.filter('reverse', function (value) {
    return value.split('').reverse().join('')
});

Vue.filter('cpf', function (value) {
    value = value.replace(/\D/g, '');
    return value.subtring(0, 3) + '.' + value.subtring(3, 3) + '.' + value.subtring(6, 3) + '-' + value.subtring(9, 2)
});