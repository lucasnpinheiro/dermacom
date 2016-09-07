<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Midia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Midias'), ['controller' => 'Midias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Midia'), ['controller' => 'Midias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesMidias index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Midias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('midia_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesMidias as $pacientesMidia): ?>
            <tr>
                <td><?= $this->Number->format($pacientesMidia->id) ?></td>
                <td><?= $pacientesMidia->has('paciente') ? $this->Html->link($pacientesMidia->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesMidia->paciente->id]) : '' ?></td>
                <td><?= $pacientesMidia->has('midia') ? $this->Html->link($pacientesMidia->midia->id, ['controller' => 'Midias', 'action' => 'view', $pacientesMidia->midia->id]) : '' ?></td>
                <td><?= h($pacientesMidia->created) ?></td>
                <td><?= h($pacientesMidia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesMidia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesMidia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesMidia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesMidia->id)]) ?>
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
