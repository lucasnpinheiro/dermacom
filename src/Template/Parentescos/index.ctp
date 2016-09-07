<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Parentesco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contatos'), ['controller' => 'Contatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['controller' => 'PacientesEmergencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['controller' => 'PacientesEmergencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="parentescos index large-9 medium-8 columns content">
    <h3><?= __('Parentescos') ?></h3>
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
            <?php foreach ($parentescos as $parentesco): ?>
            <tr>
                <td><?= $this->Number->format($parentesco->id) ?></td>
                <td><?= h($parentesco->nome) ?></td>
                <td><?= h($parentesco->created) ?></td>
                <td><?= h($parentesco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $parentesco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $parentesco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $parentesco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parentesco->id)]) ?>
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
