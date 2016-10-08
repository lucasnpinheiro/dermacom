<script>
    var params = {
        url: 'pacientes/index-load',
        colums: [
            {
                label: 'Nome',
                key: 'nome',
                chave: 'nome',
                ative: true,
                css: 'active is-6'
            },
            {
                label: 'CPF',
                key: 'cpf',
                chave: 'cpf_mask',
                ative: true,
                css: 'active'
            },
            {
                label: 'Cartão do SUS',
                key: 'cartao_sus',
                chave: 'cartao_sus',
                ative: false,
                css: ''
            },
            {
                label: 'Situação',
                key: 'status',
                chave: 'status',
                ative: true,
                css: 'active'
            },
            {
                label: 'Cidade',
                key: 'cidade',
                chave: 'cidade',
                ative: true,
                css: 'active'
            },
            {
                label: 'Estado',
                key: 'uf',
                chave: 'uf',
                ative: true,
                css: 'active'
            }

        ]
    };
</script>

<?= $this->element('Pagination/table'); ?>