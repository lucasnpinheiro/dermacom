<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Valores'), ['controller' => 'TabelasValores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Valore'), ['controller' => 'TabelasValores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Valores Historicos'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Valores Historico'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabelasPrecos index large-9 medium-8 columns content">
    <h3><?= __('Tabelas Precos') ?></h3>
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
            <?php foreach ($tabelasPrecos as $tabelasPreco): ?>
            <tr>
                <td><?= $this->Number->format($tabelasPreco->id) ?></td>
                <td><?= h($tabelasPreco->nome) ?></td>
                <td><?= h($tabelasPreco->created) ?></td>
                <td><?= h($tabelasPreco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tabelasPreco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tabelasPreco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tabelasPreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasPreco->id)]) ?>
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
