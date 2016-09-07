<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Corporai'), ['action' => 'edit', $corporai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Corporai'), ['action' => 'delete', $corporai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Corporais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corporai'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lesoes'), ['controller' => 'Lesoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leso'), ['controller' => 'Lesoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="corporais view large-9 medium-8 columns content">
    <h3><?= h($corporai->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($corporai->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($corporai->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($corporai->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($corporai->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lesoes') ?></h4>
        <?php if (!empty($corporai->lesoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($corporai->lesoes as $lesoes): ?>
            <tr>
                <td><?= h($lesoes->id) ?></td>
                <td><?= h($lesoes->nome) ?></td>
                <td><?= h($lesoes->created) ?></td>
                <td><?= h($lesoes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lesoes', 'action' => 'view', $lesoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lesoes', 'action' => 'edit', $lesoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lesoes', 'action' => 'delete', $lesoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lesoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
