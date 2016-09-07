<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Conselho'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="conselhos index large-9 medium-8 columns content">
    <h3><?= __('Conselhos') ?></h3>
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
            <?php foreach ($conselhos as $conselho): ?>
            <tr>
                <td><?= $this->Number->format($conselho->id) ?></td>
                <td><?= h($conselho->nome) ?></td>
                <td><?= h($conselho->created) ?></td>
                <td><?= h($conselho->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $conselho->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conselho->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conselho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conselho->id)]) ?>
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
