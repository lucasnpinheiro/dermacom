<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tabelas Reajuste'), ['action' => 'edit', $tabelasReajuste->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tabelas Reajuste'), ['action' => 'delete', $tabelasReajuste->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasReajuste->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Reajustes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Reajuste'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tabelasReajustes view large-9 medium-8 columns content">
    <h3><?= h($tabelasReajuste->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Mes') ?></th>
            <td><?= h($tabelasReajuste->mes) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tabelasReajuste->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Tabelas Valor Id') ?></th>
            <td><?= $this->Number->format($tabelasReajuste->tabelas_valor_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($tabelasReajuste->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Anto') ?></th>
            <td><?= $this->Number->format($tabelasReajuste->anto) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Calculo') ?></th>
            <td><?= $this->Number->format($tabelasReajuste->tipo_calculo) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($tabelasReajuste->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tabelasReajuste->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tabelasReajuste->modified) ?></td>
        </tr>
    </table>
</div>
