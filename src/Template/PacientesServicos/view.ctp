<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Servico'), ['action' => 'edit', $pacientesServico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Servico'), ['action' => 'delete', $pacientesServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesServico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Servicos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Servico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesServicos view large-9 medium-8 columns content">
    <h3><?= h($pacientesServico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paciente') ?></th>
            <td><?= $pacientesServico->has('paciente') ? $this->Html->link($pacientesServico->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesServico->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesServico->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Servico Id') ?></th>
            <td><?= $this->Number->format($pacientesServico->servico_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pacientesServico->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pacientesServico->modified) ?></td>
        </tr>
    </table>
</div>
