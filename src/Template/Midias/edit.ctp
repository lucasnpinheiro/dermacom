<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $midia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $midia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Midias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="midias form large-9 medium-8 columns content">
    <?= $this->Form->create($midia) ?>
    <fieldset>
        <legend><?= __('Edit Midia') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('contatotipo_id');
            echo $this->Form->input('pacientes._ids', ['options' => $pacientes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
