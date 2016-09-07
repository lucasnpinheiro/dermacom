<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Leso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Corporais'), ['controller' => 'Corporais', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Corporai'), ['controller' => 'Corporais', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lesoes index large-9 medium-8 columns content">
    <h3><?= __('Lesoes') ?></h3>
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
            <?php foreach ($lesoes as $leso): ?>
            <tr>
                <td><?= $this->Number->format($leso->id) ?></td>
                <td><?= h($leso->nome) ?></td>
                <td><?= h($leso->created) ?></td>
                <td><?= h($leso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $leso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $leso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $leso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leso->id)]) ?>
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
