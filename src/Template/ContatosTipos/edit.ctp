<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contatosTipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contatosTipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contatos Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contatos'), ['controller' => 'Contatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contatosTipos form large-9 medium-8 columns content">
    <?= $this->Form->create($contatosTipo) ?>
    <fieldset>
        <legend><?= __('Edit Contatos Tipo') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
