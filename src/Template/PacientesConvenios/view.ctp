<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Convenio'), ['action' => 'edit', $pacientesConvenio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Convenio'), ['action' => 'delete', $pacientesConvenio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesConvenio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Convenios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Convenio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Convenios'), ['controller' => 'Convenios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Convenio'), ['controller' => 'Convenios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesConvenios view large-9 medium-8 columns content">
    <h3><?= h($pacientesConvenio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Paciente') ?></th>
            <td><?= $pacientesConvenio->has('paciente') ? $this->Html->link($pacientesConvenio->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesConvenio->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Convenio') ?></th>
            <td><?= $pacientesConvenio->has('convenio') ? $this->Html->link($pacientesConvenio->convenio->id, ['controller' => 'Convenios', 'action' => 'view', $pacientesConvenio->convenio->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Plano') ?></th>
            <td><?= h($pacientesConvenio->plano) ?></td>
        </tr>
        <tr>
            <th><?= __('Matricula') ?></th>
            <td><?= h($pacientesConvenio->matricula) ?></td>
        </tr>
        <tr>
            <th><?= __('Titular') ?></th>
            <td><?= h($pacientesConvenio->titular) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesConvenio->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pacientesConvenio->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pacientesConvenio->modified) ?></td>
        </tr>
    </table>
</div>
