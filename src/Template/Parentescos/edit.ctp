<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $parentesco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $parentesco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Parentescos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contatos'), ['controller' => 'Contatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['controller' => 'PacientesEmergencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['controller' => 'PacientesEmergencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parentescos form large-9 medium-8 columns content">
    <?= $this->Form->create($parentesco) ?>
    <fieldset>
        <legend><?= __('Edit Parentesco') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
