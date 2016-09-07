<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Acompanhamentos'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="especialidades form large-9 medium-8 columns content">
    <?= $this->Form->create($especialidade) ?>
    <fieldset>
        <legend><?= __('Add Especialidade') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
