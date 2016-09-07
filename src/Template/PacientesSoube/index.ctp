<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesSoube index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Soube') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('como') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('especialidade_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesSoube as $pacientesSoube): ?>
            <tr>
                <td><?= $this->Number->format($pacientesSoube->id) ?></td>
                <td><?= $pacientesSoube->has('paciente') ? $this->Html->link($pacientesSoube->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesSoube->paciente->id]) : '' ?></td>
                <td><?= h($pacientesSoube->como) ?></td>
                <td><?= h($pacientesSoube->nome) ?></td>
                <td><?= h($pacientesSoube->telefone) ?></td>
                <td><?= $pacientesSoube->has('especialidade') ? $this->Html->link($pacientesSoube->especialidade->id, ['controller' => 'Especialidades', 'action' => 'view', $pacientesSoube->especialidade->id]) : '' ?></td>
                <td><?= h($pacientesSoube->created) ?></td>
                <td><?= h($pacientesSoube->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesSoube->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesSoube->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesSoube->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesSoube->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
