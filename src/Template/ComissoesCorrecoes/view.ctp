<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comissoes Correco'), ['action' => 'edit', $comissoesCorreco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comissoes Correco'), ['action' => 'delete', $comissoesCorreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comissoesCorreco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comissoes Correcoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comissoes Correco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comissoesCorrecoes view large-9 medium-8 columns content">
    <h3><?= h($comissoesCorreco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Mes') ?></th>
            <td><?= h($comissoesCorreco->mes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($comissoesCorreco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Comissao Id') ?></th>
            <td><?= $this->Number->format($comissoesCorreco->comissao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ano') ?></th>
            <td><?= $this->Number->format($comissoesCorreco->ano) ?></td>
        </tr>
        <tr>
            <th><?= __('Percentual') ?></th>
            <td><?= $this->Number->format($comissoesCorreco->percentual) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($comissoesCorreco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($comissoesCorreco->modified) ?></td>
        </tr>
    </table>
</div>
