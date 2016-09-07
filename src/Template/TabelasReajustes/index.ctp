<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tabelas Reajuste'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tabelasReajustes index large-9 medium-8 columns content">
    <h3><?= __('Tabelas Reajustes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tabelas_valor_id') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('anto') ?></th>
                <th><?= $this->Paginator->sort('mes') ?></th>
                <th><?= $this->Paginator->sort('tipo_calculo') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tabelasReajustes as $tabelasReajuste): ?>
            <tr>
                <td><?= $this->Number->format($tabelasReajuste->id) ?></td>
                <td><?= $this->Number->format($tabelasReajuste->tabelas_valor_id) ?></td>
                <td><?= $this->Number->format($tabelasReajuste->status) ?></td>
                <td><?= $this->Number->format($tabelasReajuste->anto) ?></td>
                <td><?= h($tabelasReajuste->mes) ?></td>
                <td><?= $this->Number->format($tabelasReajuste->tipo_calculo) ?></td>
                <td><?= $this->Number->format($tabelasReajuste->valor) ?></td>
                <td><?= h($tabelasReajuste->created) ?></td>
                <td><?= h($tabelasReajuste->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tabelasReajuste->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tabelasReajuste->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tabelasReajuste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasReajuste->id)]) ?>
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
