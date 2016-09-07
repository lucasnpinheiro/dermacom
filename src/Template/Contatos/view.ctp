<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contato'), ['action' => 'edit', $contato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contato'), ['action' => 'delete', $contato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contatos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contatos Tipos'), ['controller' => 'ContatosTipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contatos Tipo'), ['controller' => 'ContatosTipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parentescos'), ['controller' => 'Parentescos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parentesco'), ['controller' => 'Parentescos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contatos view large-9 medium-8 columns content">
    <h3><?= h($contato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Contatos Tipo') ?></th>
            <td><?= $contato->has('contatos_tipo') ? $this->Html->link($contato->contatos_tipo->id, ['controller' => 'ContatosTipos', 'action' => 'view', $contato->contatos_tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= h($contato->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Parentesco') ?></th>
            <td><?= $contato->has('parentesco') ? $this->Html->link($contato->parentesco->id, ['controller' => 'Parentescos', 'action' => 'view', $contato->parentesco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($contato->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tabela') ?></th>
            <td><?= $this->Number->format($contato->tabela) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($contato->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($contato->modified) ?></td>
        </tr>
    </table>
</div>
