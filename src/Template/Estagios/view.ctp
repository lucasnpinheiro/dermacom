<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estagio'), ['action' => 'edit', $estagio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estagio'), ['action' => 'delete', $estagio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estagio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estagios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estagio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estagios view large-9 medium-8 columns content">
    <h3><?= h($estagio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo') ?></th>
            <td><?= h($estagio->codigo) ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($estagio->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($estagio->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso') ?></th>
            <td><?= $this->Number->format($estagio->peso) ?></td>
        </tr>
        <tr>
            <th><?= __('Lesao Id') ?></th>
            <td><?= $this->Number->format($estagio->lesao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Classificacao Id') ?></th>
            <td><?= $this->Number->format($estagio->classificacao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($estagio->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($estagio->modified) ?></td>
        </tr>
    </table>
</div>
