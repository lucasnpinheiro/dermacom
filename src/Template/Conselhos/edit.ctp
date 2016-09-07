<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conselho->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conselho->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Conselhos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conselhos form large-9 medium-8 columns content">
    <?= $this->Form->create($conselho) ?>
    <fieldset>
        <legend><?= __('Edit Conselho') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
