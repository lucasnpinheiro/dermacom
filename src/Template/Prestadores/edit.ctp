<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prestadore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prestadore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conselhos'), ['controller' => 'Conselhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conselho'), ['controller' => 'Conselhos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prestadores form large-9 medium-8 columns content">
    <?= $this->Form->create($prestadore) ?>
    <fieldset>
        <legend><?= __('Edit Prestadore') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('razao_social');
            echo $this->Form->input('status');
            echo $this->Form->input('especialidade_id', ['options' => $especialidades, 'empty' => true]);
            echo $this->Form->input('cep');
            echo $this->Form->input('endereco');
            echo $this->Form->input('numero');
            echo $this->Form->input('complememnto');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cidade');
            echo $this->Form->input('estado');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('inscricao');
            echo $this->Form->input('cpf');
            echo $this->Form->input('rg');
            echo $this->Form->input('data_nascimento', ['empty' => true]);
            echo $this->Form->input('banco');
            echo $this->Form->input('agencia');
            echo $this->Form->input('conta');
            echo $this->Form->input('tabelas_preco_id', ['options' => $tabelasPrecos, 'empty' => true]);
            echo $this->Form->input('conselho_id', ['options' => $conselhos, 'empty' => true]);
            echo $this->Form->input('numero_conselho');
            echo $this->Form->input('estado_conselho');
            echo $this->Form->input('centro_custo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
