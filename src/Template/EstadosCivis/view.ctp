<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estados Civi'), ['action' => 'edit', $estadosCivi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estados Civi'), ['action' => 'delete', $estadosCivi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estadosCivi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estados Civis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estados Civi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estadosCivis view large-9 medium-8 columns content">
    <h3><?= h($estadosCivi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($estadosCivi->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($estadosCivi->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($estadosCivi->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($estadosCivi->modified) ?></td>
        </tr>
    </table>
</div>
