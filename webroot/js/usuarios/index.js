new Vue({
    el: '#app',
    data: {
        columns: [
            'id', 'nome', 'login', 'senha', 'status', 'created', 'modified'
        ],
        itemActions: [
            {name: 'view-item', label: '', icon: 'zoom icon', class: 'ui teal button'},
            {name: 'edit-item', label: '', icon: 'edit icon', class: 'ui orange button'},
            {name: 'delete-item', label: '', icon: 'delete icon', class: 'ui red button'}
        ]
    },
    methods: {
        viewProfile: function (id) {
            console.log('view profile with id:', id)
        }
    },
    events: {
        'vuetable:action': function (action, data) {
            console.log('vuetable:action', action, data)
            if (action == 'view-item') {
                this.viewProfile(data.id)
            }
        },
        'vuetable:load-error': function (response) {
            console.log('Load Error: ', response)
        }
    }
});