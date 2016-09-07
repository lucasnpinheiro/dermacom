<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Especialidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Acompanhamentos'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="especialidades index large-9 medium-8 columns content">
    <h3><?= __('Especialidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($especialidades as $especialidade): ?>
            <tr>
                <td><?= $this->Number->format($especialidade->id) ?></td>
                <td><?= h($especialidade->nome) ?></td>
                <td><?= h($especialidade->created) ?></td>
                <td><?= h($especialidade->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $especialidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especialidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especialidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidade->id)]) ?>
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
