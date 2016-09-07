<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Corporais Leso'), ['action' => 'edit', $corporaisLeso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Corporais Leso'), ['action' => 'delete', $corporaisLeso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporaisLeso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Corporais Lesoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corporais Leso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="corporaisLesoes view large-9 medium-8 columns content">
    <h3><?= h($corporaisLeso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($corporaisLeso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Lesao Id') ?></th>
            <td><?= $this->Number->format($corporaisLeso->lesao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Corporal Id') ?></th>
            <td><?= $this->Number->format($corporaisLeso->corporal_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($corporaisLeso->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($corporaisLeso->modified) ?></td>
        </tr>
    </table>
</div>
