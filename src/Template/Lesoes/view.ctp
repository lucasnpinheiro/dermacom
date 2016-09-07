<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Leso'), ['action' => 'edit', $leso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Leso'), ['action' => 'delete', $leso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $leso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lesoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Leso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Corporais'), ['controller' => 'Corporais', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corporai'), ['controller' => 'Corporais', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lesoes view large-9 medium-8 columns content">
    <h3><?= h($leso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($leso->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($leso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($leso->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($leso->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Corporais') ?></h4>
        <?php if (!empty($leso->corporais)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($leso->corporais as $corporais): ?>
            <tr>
                <td><?= h($corporais->id) ?></td>
                <td><?= h($corporais->nome) ?></td>
                <td><?= h($corporais->created) ?></td>
                <td><?= h($corporais->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Corporais', 'action' => 'view', $corporais->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Corporais', 'action' => 'edit', $corporais->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Corporais', 'action' => 'delete', $corporais->id], ['confirm' => __('Are you sure you want to delete # {0}?', $corporais->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
