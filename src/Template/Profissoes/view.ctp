<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profisso'), ['action' => 'edit', $profisso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profisso'), ['action' => 'delete', $profisso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profisso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profissoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profisso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profissoes view large-9 medium-8 columns content">
    <h3><?= h($profisso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($profisso->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($profisso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($profisso->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($profisso->modified) ?></td>
        </tr>
    </table>
</div>
