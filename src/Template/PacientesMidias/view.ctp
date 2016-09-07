<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Midia'), ['action' => 'edit', $pacientesMidia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Midia'), ['action' => 'delete', $pacientesMidia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesMidia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Midias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Midia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Midias'), ['controller' => 'Midias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Midia'), ['controller' => 'Midias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesMidias view large-9 medium-8 columns content">
    <h3><?= h($pacientesMidia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paciente') ?></th>
            <td><?= $pacientesMidia->has('paciente') ? $this->Html->link($pacientesMidia->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesMidia->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Midia') ?></th>
            <td><?= $pacientesMidia->has('midia') ? $this->Html->link($pacientesMidia->midia->id, ['controller' => 'Midias', 'action' => 'view', $pacientesMidia->midia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesMidia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pacientesMidia->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pacientesMidia->modified) ?></td>
        </tr>
    </table>
</div>
