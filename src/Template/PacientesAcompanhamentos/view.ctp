<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Acompanhamento'), ['action' => 'edit', $pacientesAcompanhamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Acompanhamento'), ['action' => 'delete', $pacientesAcompanhamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesAcompanhamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Acompanhamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesAcompanhamentos view large-9 medium-8 columns content">
    <h3><?= h($pacientesAcompanhamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paciente') ?></th>
            <td><?= $pacientesAcompanhamento->has('paciente') ? $this->Html->link($pacientesAcompanhamento->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesAcompanhamento->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Especialidade') ?></th>
            <td><?= $pacientesAcompanhamento->has('especialidade') ? $this->Html->link($pacientesAcompanhamento->especialidade->id, ['controller' => 'Especialidades', 'action' => 'view', $pacientesAcompanhamento->especialidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Medico') ?></th>
            <td><?= h($pacientesAcompanhamento->medico) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefone') ?></th>
            <td><?= h($pacientesAcompanhamento->telefone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesAcompanhamento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pacientesAcompanhamento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pacientesAcompanhamento->modified) ?></td>
        </tr>
    </table>
</div>
