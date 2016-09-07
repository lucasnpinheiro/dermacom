<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Servicos Clinica'), ['action' => 'edit', $servicosClinica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Servicos Clinica'), ['action' => 'delete', $servicosClinica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servicosClinica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Servicos Clinicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servicos Clinica'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servicosClinicas view large-9 medium-8 columns content">
    <h3><?= h($servicosClinica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($servicosClinica->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($servicosClinica->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($servicosClinica->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($servicosClinica->modified) ?></td>
        </tr>
    </table>
</div>
