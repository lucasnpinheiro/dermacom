<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pacientesEmergencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesEmergencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parentescos'), ['controller' => 'Parentescos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parentesco'), ['controller' => 'Parentescos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesEmergencias form large-9 medium-8 columns content">
    <?= $this->Form->create($pacientesEmergencia) ?>
    <fieldset>
        <legend><?= __('Edit Pacientes Emergencia') ?></legend>
        <?php
            echo $this->Form->input('paciente_id', ['options' => $pacientes, 'empty' => true]);
            echo $this->Form->input('nome');
            echo $this->Form->input('parentesco_id', ['options' => $parentescos, 'empty' => true]);
            echo $this->Form->input('telefone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
