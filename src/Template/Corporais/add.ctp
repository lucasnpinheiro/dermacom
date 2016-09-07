<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Corporais'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lesoes'), ['controller' => 'Lesoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Leso'), ['controller' => 'Lesoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="corporais form large-9 medium-8 columns content">
    <?= $this->Form->create($corporai) ?>
    <fieldset>
        <legend><?= __('Add Corporai') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('lesoes._ids', ['options' => $lesoes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
