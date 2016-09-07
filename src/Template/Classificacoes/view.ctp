<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Classificaco'), ['action' => 'edit', $classificaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Classificaco'), ['action' => 'delete', $classificaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classificaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Classificacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classificaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classificacoes view large-9 medium-8 columns content">
    <h3><?= h($classificaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($classificaco->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($classificaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lesao Id') ?></th>
            <td><?= $this->Number->format($classificaco->lesao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($classificaco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($classificaco->modified) ?></td>
        </tr>
    </table>
</div>
