<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contatos Tipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contatos'), ['controller' => 'Contatos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contatosTipos index large-9 medium-8 columns content">
    <h3><?= __('Contatos Tipos') ?></h3>
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
            <?php foreach ($contatosTipos as $contatosTipo): ?>
            <tr>
                <td><?= $this->Number->format($contatosTipo->id) ?></td>
                <td><?= h($contatosTipo->nome) ?></td>
                <td><?= h($contatosTipo->created) ?></td>
                <td><?= h($contatosTipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contatosTipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contatosTipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contatosTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatosTipo->id)]) ?>
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
