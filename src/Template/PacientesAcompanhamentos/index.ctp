<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesAcompanhamentos index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Acompanhamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('especialidade_id') ?></th>
                <th><?= $this->Paginator->sort('medico') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesAcompanhamentos as $pacientesAcompanhamento): ?>
            <tr>
                <td><?= $this->Number->format($pacientesAcompanhamento->id) ?></td>
                <td><?= $pacientesAcompanhamento->has('paciente') ? $this->Html->link($pacientesAcompanhamento->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesAcompanhamento->paciente->id]) : '' ?></td>
                <td><?= $pacientesAcompanhamento->has('especialidade') ? $this->Html->link($pacientesAcompanhamento->especialidade->id, ['controller' => 'Especialidades', 'action' => 'view', $pacientesAcompanhamento->especialidade->id]) : '' ?></td>
                <td><?= h($pacientesAcompanhamento->medico) ?></td>
                <td><?= h($pacientesAcompanhamento->telefone) ?></td>
                <td><?= h($pacientesAcompanhamento->created) ?></td>
                <td><?= h($pacientesAcompanhamento->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesAcompanhamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesAcompanhamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesAcompanhamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesAcompanhamento->id)]) ?>
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
