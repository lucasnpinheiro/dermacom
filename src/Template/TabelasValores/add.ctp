<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tabelas Valores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabelasValores form large-9 medium-8 columns content">
    <?= $this->Form->create($tabelasValore) ?>
    <fieldset>
        <legend><?= __('Add Tabelas Valore') ?></legend>
        <?php
            echo $this->Form->input('tabelas_preco_id', ['options' => $tabelasPrecos, 'empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('valor_origem');
            echo $this->Form->input('valor_repasse');
            echo $this->Form->input('data_inicio', ['empty' => true]);
            echo $this->Form->input('data_fim', ['empty' => true]);
            echo $this->Form->input('reajuste_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
