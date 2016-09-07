<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tabelas Reajustes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tabelasReajustes form large-9 medium-8 columns content">
    <?= $this->Form->create($tabelasReajuste) ?>
    <fieldset>
        <legend><?= __('Add Tabelas Reajuste') ?></legend>
        <?php
            echo $this->Form->input('tabelas_valor_id');
            echo $this->Form->input('status');
            echo $this->Form->input('anto');
            echo $this->Form->input('mes');
            echo $this->Form->input('tipo_calculo');
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
