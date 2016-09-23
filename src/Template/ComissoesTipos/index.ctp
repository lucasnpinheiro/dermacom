<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comissoes Tipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Comissoes'), ['controller' => 'Comissoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comisso'), ['controller' => 'Comissoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comissoesTipos index large-9 medium-8 columns content">
    <h3><?= __('Comissoes Tipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comissoesTipos as $comissoesTipo): ?>
            <tr>
                <td><?= $this->Number->format($comissoesTipo->id) ?></td>
                <td><?= h($comissoesTipo->nome) ?></td>
                <td><?= $this->Number->format($comissoesTipo->status) ?></td>
                <td><?= h($comissoesTipo->created) ?></td>
                <td><?= h($comissoesTipo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comissoesTipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comissoesTipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comissoesTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comissoesTipo->id)]) ?>
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
