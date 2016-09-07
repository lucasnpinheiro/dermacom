<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Emergencia'), ['action' => 'edit', $pacientesEmergencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Emergencia'), ['action' => 'delete', $pacientesEmergencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesEmergencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parentescos'), ['controller' => 'Parentescos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parentesco'), ['controller' => 'Parentescos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesEmergencias view large-9 medium-8 columns content">
    <h3><?= h($pacientesEmergencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paciente') ?></th>
            <td><?= $pacientesEmergencia->has('paciente') ? $this->Html->link($pacientesEmergencia->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesEmergencia->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($pacientesEmergencia->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Parentesco') ?></th>
            <td><?= $pacientesEmergencia->has('parentesco') ? $this->Html->link($pacientesEmergencia->parentesco->id, ['controller' => 'Parentescos', 'action' => 'view', $pacientesEmergencia->parentesco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($pacientesEmergencia->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesEmergencia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pacientesEmergencia->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pacientesEmergencia->modified) ?></td>
        </tr>
    </table>
</div>
