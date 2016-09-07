<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Religio'), ['action' => 'edit', $religio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Religio'), ['action' => 'delete', $religio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $religio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Religioes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Religio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="religioes view large-9 medium-8 columns content">
    <h3><?= h($religio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($religio->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($religio->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($religio->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($religio->modified) ?></td>
        </tr>
    </table>
</div>
