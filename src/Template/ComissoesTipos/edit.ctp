<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comissoesTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comissoesTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comissoes Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comissoes'), ['controller' => 'Comissoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comisso'), ['controller' => 'Comissoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comissoesTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($comissoesTipo) ?>
    <fieldset>
        <legend><?= __('Edit Comissoes Tipo') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
