<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Servico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesServicos index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Servicos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('servico_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesServicos as $pacientesServico): ?>
            <tr>
                <td><?= $this->Number->format($pacientesServico->id) ?></td>
                <td><?= $pacientesServico->has('paciente') ? $this->Html->link($pacientesServico->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesServico->paciente->id]) : '' ?></td>
                <td><?= $this->Number->format($pacientesServico->servico_id) ?></td>
                <td><?= h($pacientesServico->created) ?></td>
                <td><?= h($pacientesServico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesServico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesServico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesServico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesServico->id)]) ?>
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
