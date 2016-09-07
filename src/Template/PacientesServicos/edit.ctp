<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pacientesServico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesServico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pacientes Servicos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesServicos form large-9 medium-8 columns content">
    <?= $this->Form->create($pacientesServico) ?>
    <fieldset>
        <legend><?= __('Edit Pacientes Servico') ?></legend>
        <?php
            echo $this->Form->input('paciente_id', ['options' => $pacientes, 'empty' => true]);
            echo $this->Form->input('servico_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
