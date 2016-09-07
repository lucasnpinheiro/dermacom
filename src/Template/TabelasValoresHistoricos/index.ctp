<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tabelas Valores Historico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabelasValoresHistoricos index large-9 medium-8 columns content">
    <h3><?= __('Tabelas Valores Historicos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tabelas_preco_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('valor_origem') ?></th>
                <th><?= $this->Paginator->sort('valor repasse') ?></th>
                <th><?= $this->Paginator->sort('data_inicio') ?></th>
                <th><?= $this->Paginator->sort('data_fim') ?></th>
                <th><?= $this->Paginator->sort('reajuste_id') ?></th>
                <th><?= $this->Paginator->sort('reated') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tabelasValoresHistoricos as $tabelasValoresHistorico): ?>
            <tr>
                <td><?= $this->Number->format($tabelasValoresHistorico->id) ?></td>
                <td><?= $tabelasValoresHistorico->has('tabelas_preco') ? $this->Html->link($tabelasValoresHistorico->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'view', $tabelasValoresHistorico->tabelas_preco->id]) : '' ?></td>
                <td><?= $this->Number->format($tabelasValoresHistorico->status) ?></td>
                <td><?= $this->Number->format($tabelasValoresHistorico->valor_origem) ?></td>
                <td><?= $this->Number->format($tabelasValoresHistorico->valor repasse) ?></td>
                <td><?= h($tabelasValoresHistorico->data_inicio) ?></td>
                <td><?= h($tabelasValoresHistorico->data_fim) ?></td>
                <td><?= $this->Number->format($tabelasValoresHistorico->reajuste_id) ?></td>
                <td><?= h($tabelasValoresHistorico->reated) ?></td>
                <td><?= h($tabelasValoresHistorico->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tabelasValoresHistorico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tabelasValoresHistorico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tabelasValoresHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasValoresHistorico->id)]) ?>
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
