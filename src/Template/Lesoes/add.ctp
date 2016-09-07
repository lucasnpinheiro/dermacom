<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lesoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Corporais'), ['controller' => 'Corporais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Corporai'), ['controller' => 'Corporais', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lesoes form large-9 medium-8 columns content">
    <?= $this->Form->create($leso) ?>
    <fieldset>
        <legend><?= __('Add Leso') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('corporais._ids', ['options' => $corporais]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
