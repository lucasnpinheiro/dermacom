<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Servicos Clinica'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servicosClinicas index large-9 medium-8 columns content">
    <h3><?= __('Servicos Clinicas') ?></h3>
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
            <?php foreach ($servicosClinicas as $servicosClinica): ?>
            <tr>
                <td><?= $this->Number->format($servicosClinica->id) ?></td>
                <td><?= h($servicosClinica->nome) ?></td>
                <td><?= h($servicosClinica->created) ?></td>
                <td><?= h($servicosClinica->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servicosClinica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servicosClinica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servicosClinica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicosClinica->id)]) ?>
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
