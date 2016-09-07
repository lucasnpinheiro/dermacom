<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profisso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profissoes index large-9 medium-8 columns content">
    <h3><?= __('Profissoes') ?></h3>
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
            <?php foreach ($profissoes as $profisso): ?>
            <tr>
                <td><?= $this->Number->format($profisso->id) ?></td>
                <td><?= h($profisso->nome) ?></td>
                <td><?= h($profisso->created) ?></td>
                <td><?= h($profisso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profisso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profisso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profisso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profisso->id)]) ?>
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
