<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contato->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contatos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contatos Tipos'), ['controller' => 'ContatosTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contatos Tipo'), ['controller' => 'ContatosTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parentescos'), ['controller' => 'Parentescos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parentesco'), ['controller' => 'Parentescos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contatos form large-9 medium-8 columns content">
    <?= $this->Form->create($contato) ?>
    <fieldset>
        <legend><?= __('Edit Contato') ?></legend>
        <?php
            echo $this->Form->input('contatos_tipo_id', ['options' => $contatosTipos, 'empty' => true]);
            echo $this->Form->input('valor');
            echo $this->Form->input('parentesco_id', ['options' => $parentescos, 'empty' => true]);
            echo $this->Form->input('tabela');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
