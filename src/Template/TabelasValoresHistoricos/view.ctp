<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tabelas Valores Historico'), ['action' => 'edit', $tabelasValoresHistorico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tabelas Valores Historico'), ['action' => 'delete', $tabelasValoresHistorico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasValoresHistorico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Valores Historicos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Valores Historico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tabelasValoresHistoricos view large-9 medium-8 columns content">
    <h3><?= h($tabelasValoresHistorico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tabelas Preco') ?></th>
            <td><?= $tabelasValoresHistorico->has('tabelas_preco') ? $this->Html->link($tabelasValoresHistorico->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'view', $tabelasValoresHistorico->tabelas_preco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tabelasValoresHistorico->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($tabelasValoresHistorico->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Origem') ?></th>
            <td><?= $this->Number->format($tabelasValoresHistorico->valor_origem) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Repasse') ?></th>
            <td><?= $this->Number->format($tabelasValoresHistorico->valor repasse) ?></td>
        </tr>
        <tr>
            <th><?= __('Reajuste Id') ?></th>
            <td><?= $this->Number->format($tabelasValoresHistorico->reajuste_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Inicio') ?></th>
            <td><?= h($tabelasValoresHistorico->data_inicio) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Fim') ?></th>
            <td><?= h($tabelasValoresHistorico->data_fim) ?></td>
        </tr>
        <tr>
            <th><?= __('Reated') ?></th>
            <td><?= h($tabelasValoresHistorico->reated) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tabelasValoresHistorico->modified) ?></td>
        </tr>
    </table>
</div>
