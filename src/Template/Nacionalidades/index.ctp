<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nacionalidade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nacionalidades index large-9 medium-8 columns content">
    <h3><?= __('Nacionalidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('pais') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nacionalidades as $nacionalidade): ?>
            <tr>
                <td><?= $this->Number->format($nacionalidade->id) ?></td>
                <td><?= h($nacionalidade->nome) ?></td>
                <td><?= h($nacionalidade->pais) ?></td>
                <td><?= h($nacionalidade->created) ?></td>
                <td><?= h($nacionalidade->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nacionalidade->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nacionalidade->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nacionalidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nacionalidade->id)]) ?>
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
