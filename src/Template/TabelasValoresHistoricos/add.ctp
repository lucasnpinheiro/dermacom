<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tabelas Valores Historicos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabelasValoresHistoricos form large-9 medium-8 columns content">
    <?= $this->Form->create($tabelasValoresHistorico) ?>
    <fieldset>
        <legend><?= __('Add Tabelas Valores Historico') ?></legend>
        <?php
            echo $this->Form->input('tabelas_preco_id', ['options' => $tabelasPrecos, 'empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('valor_origem');
            echo $this->Form->input('valor repasse');
            echo $this->Form->input('data_inicio', ['empty' => true]);
            echo $this->Form->input('data_fim', ['empty' => true]);
            echo $this->Form->input('reajuste_id');
            echo $this->Form->input('reated', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
