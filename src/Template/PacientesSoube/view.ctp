<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Soube'), ['action' => 'edit', $pacientesSoube->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Soube'), ['action' => 'delete', $pacientesSoube->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesSoube->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesSoube view large-9 medium-8 columns content">
    <h3><?= h($pacientesSoube->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paciente') ?></th>
            <td><?= $pacientesSoube->has('paciente') ? $this->Html->link($pacientesSoube->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesSoube->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Como') ?></th>
            <td><?= h($pacientesSoube->como) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($pacientesSoube->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($pacientesSoube->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Especialidade') ?></th>
            <td><?= $pacientesSoube->has('especialidade') ? $this->Html->link($pacientesSoube->especialidade->id, ['controller' => 'Especialidades', 'action' => 'view', $pacientesSoube->especialidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesSoube->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pacientesSoube->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pacientesSoube->modified) ?></td>
        </tr>
    </table>
</div>
