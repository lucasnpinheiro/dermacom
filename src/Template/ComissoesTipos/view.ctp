<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comissoes Tipo'), ['action' => 'edit', $comissoesTipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comissoes Tipo'), ['action' => 'delete', $comissoesTipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comissoesTipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comissoes Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comissoes Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Comissoes'), ['controller' => 'Comissoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comisso'), ['controller' => 'Comissoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comissoesTipos view large-9 medium-8 columns content">
    <h3><?= h($comissoesTipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($comissoesTipo->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($comissoesTipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($comissoesTipo->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($comissoesTipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($comissoesTipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Comissoes') ?></h4>
        <?php if (!empty($comissoesTipo->comissoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Valor Maximo') ?></th>
                <th scope="col"><?= __('Comissao') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Crated') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Comissoes Tipo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($comissoesTipo->comissoes as $comissoes): ?>
            <tr>
                <td><?= h($comissoes->id) ?></td>
                <td><?= h($comissoes->nome) ?></td>
                <td><?= h($comissoes->valor_maximo) ?></td>
                <td><?= h($comissoes->comissao) ?></td>
                <td><?= h($comissoes->status) ?></td>
                <td><?= h($comissoes->crated) ?></td>
                <td><?= h($comissoes->modified) ?></td>
                <td><?= h($comissoes->comissoes_tipo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comissoes', 'action' => 'view', $comissoes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comissoes', 'action' => 'edit', $comissoes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comissoes', 'action' => 'delete', $comissoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comissoes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
