<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Convenio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="convenios index large-9 medium-8 columns content">
    <h3><?= __('Convenios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('razao_social') ?></th>
                <th><?= $this->Paginator->sort('cep') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('complemento') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th><?= $this->Paginator->sort('cidade') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('cnpj') ?></th>
                <th><?= $this->Paginator->sort('inscricao') ?></th>
                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($convenios as $convenio): ?>
            <tr>
                <td><?= $this->Number->format($convenio->id) ?></td>
                <td><?= h($convenio->nome) ?></td>
                <td><?= $this->Number->format($convenio->status) ?></td>
                <td><?= h($convenio->razao_social) ?></td>
                <td><?= h($convenio->cep) ?></td>
                <td><?= h($convenio->endereco) ?></td>
                <td><?= h($convenio->numero) ?></td>
                <td><?= h($convenio->complemento) ?></td>
                <td><?= h($convenio->bairro) ?></td>
                <td><?= h($convenio->cidade) ?></td>
                <td><?= h($convenio->estado) ?></td>
                <td><?= h($convenio->cnpj) ?></td>
                <td><?= h($convenio->inscricao) ?></td>
                <td><?= h($convenio->centro_custo) ?></td>
                <td><?= h($convenio->created) ?></td>
                <td><?= h($convenio->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $convenio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $convenio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $convenio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $convenio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
