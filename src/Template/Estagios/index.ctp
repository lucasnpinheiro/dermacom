<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estagio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estagios index large-9 medium-8 columns content">
    <h3><?= __('Estagios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('codigo') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('peso') ?></th>
                <th><?= $this->Paginator->sort('lesao_id') ?></th>
                <th><?= $this->Paginator->sort('classificacao_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estagios as $estagio): ?>
            <tr>
                <td><?= $this->Number->format($estagio->id) ?></td>
                <td><?= h($estagio->codigo) ?></td>
                <td><?= h($estagio->nome) ?></td>
                <td><?= $this->Number->format($estagio->peso) ?></td>
                <td><?= $this->Number->format($estagio->lesao_id) ?></td>
                <td><?= $this->Number->format($estagio->classificacao_id) ?></td>
                <td><?= h($estagio->created) ?></td>
                <td><?= h($estagio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estagio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estagio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estagio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estagio->id)]) ?>
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
