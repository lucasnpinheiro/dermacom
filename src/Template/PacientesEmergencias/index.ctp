<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parentescos'), ['controller' => 'Parentescos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parentesco'), ['controller' => 'Parentescos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesEmergencias index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Emergencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('parentesco_id') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesEmergencias as $pacientesEmergencia): ?>
            <tr>
                <td><?= $this->Number->format($pacientesEmergencia->id) ?></td>
                <td><?= $pacientesEmergencia->has('paciente') ? $this->Html->link($pacientesEmergencia->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesEmergencia->paciente->id]) : '' ?></td>
                <td><?= h($pacientesEmergencia->nome) ?></td>
                <td><?= $pacientesEmergencia->has('parentesco') ? $this->Html->link($pacientesEmergencia->parentesco->id, ['controller' => 'Parentescos', 'action' => 'view', $pacientesEmergencia->parentesco->id]) : '' ?></td>
                <td><?= h($pacientesEmergencia->telefone) ?></td>
                <td><?= h($pacientesEmergencia->created) ?></td>
                <td><?= h($pacientesEmergencia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesEmergencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesEmergencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesEmergencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesEmergencia->id)]) ?>
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
