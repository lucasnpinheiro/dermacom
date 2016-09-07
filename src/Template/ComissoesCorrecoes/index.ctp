<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comissoes Correco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comissoesCorrecoes index large-9 medium-8 columns content">
    <h3><?= __('Comissoes Correcoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('comissao_id') ?></th>
                <th><?= $this->Paginator->sort('ano') ?></th>
                <th><?= $this->Paginator->sort('mes') ?></th>
                <th><?= $this->Paginator->sort('percentual') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comissoesCorrecoes as $comissoesCorreco): ?>
            <tr>
                <td><?= $this->Number->format($comissoesCorreco->id) ?></td>
                <td><?= $this->Number->format($comissoesCorreco->comissao_id) ?></td>
                <td><?= $this->Number->format($comissoesCorreco->ano) ?></td>
                <td><?= h($comissoesCorreco->mes) ?></td>
                <td><?= $this->Number->format($comissoesCorreco->percentual) ?></td>
                <td><?= h($comissoesCorreco->created) ?></td>
                <td><?= h($comissoesCorreco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comissoesCorreco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comissoesCorreco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comissoesCorreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comissoesCorreco->id)]) ?>
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
