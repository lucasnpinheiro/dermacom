<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Corporais Leso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="corporaisLesoes index large-9 medium-8 columns content">
    <h3><?= __('Corporais Lesoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('lesao_id') ?></th>
                <th><?= $this->Paginator->sort('corporal_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($corporaisLesoes as $corporaisLeso): ?>
            <tr>
                <td><?= $this->Number->format($corporaisLeso->id) ?></td>
                <td><?= $this->Number->format($corporaisLeso->lesao_id) ?></td>
                <td><?= $this->Number->format($corporaisLeso->corporal_id) ?></td>
                <td><?= h($corporaisLeso->created) ?></td>
                <td><?= h($corporaisLeso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $corporaisLeso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $corporaisLeso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $corporaisLeso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporaisLeso->id)]) ?>
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
