<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tabelasPreco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasPreco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Valores'), ['controller' => 'TabelasValores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Valore'), ['controller' => 'TabelasValores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Valores Historicos'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Valores Historico'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabelasPrecos form large-9 medium-8 columns content">
    <?= $this->Form->create($tabelasPreco) ?>
    <fieldset>
        <legend><?= __('Edit Tabelas Preco') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
