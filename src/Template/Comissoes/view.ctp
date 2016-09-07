<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comisso'), ['action' => 'edit', $comisso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comisso'), ['action' => 'delete', $comisso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comisso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comissoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comisso'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comissoes view large-9 medium-8 columns content">
    <h3><?= h($comisso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($comisso->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($comisso->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Maximo') ?></th>
            <td><?= $this->Number->format($comisso->valor_maximo) ?></td>
        </tr>
        <tr>
            <th><?= __('Comissao') ?></th>
            <td><?= $this->Number->format($comisso->comissao) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($comisso->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Crated') ?></th>
            <td><?= h($comisso->crated) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($comisso->modified) ?></td>
        </tr>
    </table>
</div>
