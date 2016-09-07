<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tabelas Valore'), ['action' => 'edit', $tabelasValore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tabelas Valore'), ['action' => 'delete', $tabelasValore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasValore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Valores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Valore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tabelasValores view large-9 medium-8 columns content">
    <h3><?= h($tabelasValore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tabelas Preco') ?></th>
            <td><?= $tabelasValore->has('tabelas_preco') ? $this->Html->link($tabelasValore->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'view', $tabelasValore->tabelas_preco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tabelasValore->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($tabelasValore->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Origem') ?></th>
            <td><?= $this->Number->format($tabelasValore->valor_origem) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Repasse') ?></th>
            <td><?= $this->Number->format($tabelasValore->valor_repasse) ?></td>
        </tr>
        <tr>
            <th><?= __('Reajuste Id') ?></th>
            <td><?= $this->Number->format($tabelasValore->reajuste_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Inicio') ?></th>
            <td><?= h($tabelasValore->data_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Fim') ?></th>
            <td><?= h($tabelasValore->data_fim) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tabelasValore->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tabelasValore->modified) ?></td>
        </tr>
    </table>
</div>
