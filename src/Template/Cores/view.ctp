<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Core'), ['action' => 'edit', $core->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Core'), ['action' => 'delete', $core->id], ['confirm' => __('Are you sure you want to delete # {0}?', $core->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Core'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cores view large-9 medium-8 columns content">
    <h3><?= h($core->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($core->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($core->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($core->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($core->modified) ?></td>
        </tr>
    </table>
</div>
