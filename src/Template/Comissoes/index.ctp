<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Comisso'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="comissoes index large-9 medium-8 columns content">
    <h3><?= __('Comissoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('valor_maximo') ?></th>
                <th><?= $this->Paginator->sort('comissao') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('crated') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comissoes as $comisso): ?>
            <tr>
                <td><?= $this->Number->format($comisso->id) ?></td>
                <td><?= h($comisso->nome) ?></td>
                <td><?= $this->Number->format($comisso->valor_maximo) ?></td>
                <td><?= $this->Number->format($comisso->comissao) ?></td>
                <td><?= $this->Number->format($comisso->status) ?></td>
                <td><?= h($comisso->crated) ?></td>
                <td><?= h($comisso->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comisso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comisso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comisso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comisso->id)]) ?>
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
