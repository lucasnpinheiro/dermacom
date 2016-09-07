<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contatos Tipo'), ['action' => 'edit', $contatosTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contatos Tipo'), ['action' => 'delete', $contatosTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatosTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contatos Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contatos Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contatos'), ['controller' => 'Contatos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contatosTipos view large-9 medium-8 columns content">
    <h3><?= h($contatosTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($contatosTipo->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contatosTipo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($contatosTipo->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($contatosTipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contatos') ?></h4>
        <?php if (!empty($contatosTipo->contatos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Contatos Tipo Id') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Parentesco Id') ?></th>
                <th><?= __('Tabela') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contatosTipo->contatos as $contatos): ?>
            <tr>
                <td><?= h($contatos->id) ?></td>
                <td><?= h($contatos->contatos_tipo_id) ?></td>
                <td><?= h($contatos->valor) ?></td>
                <td><?= h($contatos->parentesco_id) ?></td>
                <td><?= h($contatos->tabela) ?></td>
                <td><?= h($contatos->created) ?></td>
                <td><?= h($contatos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contatos', 'action' => 'view', $contatos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contatos', 'action' => 'edit', $contatos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contatos', 'action' => 'delete', $contatos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
