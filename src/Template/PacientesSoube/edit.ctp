<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pacientesSoube->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesSoube->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesSoube form large-9 medium-8 columns content">
    <?= $this->Form->create($pacientesSoube) ?>
    <fieldset>
        <legend><?= __('Edit Pacientes Soube') ?></legend>
        <?php
            echo $this->Form->input('paciente_id', ['options' => $pacientes, 'empty' => true]);
            echo $this->Form->input('como');
            echo $this->Form->input('nome');
            echo $this->Form->input('telefone');
            echo $this->Form->input('especialidade_id', ['options' => $especialidades, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
