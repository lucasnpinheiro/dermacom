<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pacientes Convenios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Convenios'), ['controller' => 'Convenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Convenio'), ['controller' => 'Convenios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesConvenios form large-9 medium-8 columns content">
    <?= $this->Form->create($pacientesConvenio) ?>
    <fieldset>
        <legend><?= __('Add Pacientes Convenio') ?></legend>
        <?php
            echo $this->Form->input('paciente_id', ['options' => $pacientes, 'empty' => true]);
            echo $this->Form->input('convenio_id', ['options' => $convenios, 'empty' => true]);
            echo $this->Form->input('plano');
            echo $this->Form->input('matricula');
            echo $this->Form->input('titular');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
