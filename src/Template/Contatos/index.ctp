<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contato'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contatos Tipos'), ['controller' => 'ContatosTipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contatos Tipo'), ['controller' => 'ContatosTipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parentescos'), ['controller' => 'Parentescos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parentesco'), ['controller' => 'Parentescos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contatos index large-9 medium-8 columns content">
    <h3><?= __('Contatos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('contatos_tipo_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('parentesco_id') ?></th>
                <th><?= $this->Paginator->sort('tabela') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contatos as $contato): ?>
            <tr>
                <td><?= $this->Number->format($contato->id) ?></td>
                <td><?= $contato->has('contatos_tipo') ? $this->Html->link($contato->contatos_tipo->id, ['controller' => 'ContatosTipos', 'action' => 'view', $contato->contatos_tipo->id]) : '' ?></td>
                <td><?= h($contato->valor) ?></td>
                <td><?= $contato->has('parentesco') ? $this->Html->link($contato->parentesco->id, ['controller' => 'Parentescos', 'action' => 'view', $contato->parentesco->id]) : '' ?></td>
                <td><?= $this->Number->format($contato->tabela) ?></td>
                <td><?= h($contato->created) ?></td>
                <td><?= h($contato->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contato->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contato->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?>
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
