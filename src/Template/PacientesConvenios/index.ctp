<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Convenio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Convenios'), ['controller' => 'Convenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Convenio'), ['controller' => 'Convenios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesConvenios index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Convenios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('paciente_id') ?></th>
                <th><?= $this->Paginator->sort('convenio_id') ?></th>
                <th><?= $this->Paginator->sort('plano') ?></th>
                <th><?= $this->Paginator->sort('matricula') ?></th>
                <th><?= $this->Paginator->sort('titular') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesConvenios as $pacientesConvenio): ?>
            <tr>
                <td><?= $this->Number->format($pacientesConvenio->id) ?></td>
                <td><?= $pacientesConvenio->has('paciente') ? $this->Html->link($pacientesConvenio->paciente->id, ['controller' => 'Pacientes', 'action' => 'view', $pacientesConvenio->paciente->id]) : '' ?></td>
                <td><?= $pacientesConvenio->has('convenio') ? $this->Html->link($pacientesConvenio->convenio->id, ['controller' => 'Convenios', 'action' => 'view', $pacientesConvenio->convenio->id]) : '' ?></td>
                <td><?= h($pacientesConvenio->plano) ?></td>
                <td><?= h($pacientesConvenio->matricula) ?></td>
                <td><?= h($pacientesConvenio->titular) ?></td>
                <td><?= h($pacientesConvenio->created) ?></td>
                <td><?= h($pacientesConvenio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesConvenio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesConvenio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesConvenio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesConvenio->id)]) ?>
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
