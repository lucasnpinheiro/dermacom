<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prestadore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conselhos'), ['controller' => 'Conselhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conselho'), ['controller' => 'Conselhos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prestadores index large-9 medium-8 columns content">
    <h3><?= __('Prestadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('razao_social') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('especialidade_id') ?></th>
                <th><?= $this->Paginator->sort('cep') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('complememnto') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th><?= $this->Paginator->sort('cidade') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('cnpj') ?></th>
                <th><?= $this->Paginator->sort('inscricao') ?></th>
                <th><?= $this->Paginator->sort('cpf') ?></th>
                <th><?= $this->Paginator->sort('rg') ?></th>
                <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                <th><?= $this->Paginator->sort('banco') ?></th>
                <th><?= $this->Paginator->sort('agencia') ?></th>
                <th><?= $this->Paginator->sort('conta') ?></th>
                <th><?= $this->Paginator->sort('tabelas_preco_id') ?></th>
                <th><?= $this->Paginator->sort('conselho_id') ?></th>
                <th><?= $this->Paginator->sort('numero_conselho') ?></th>
                <th><?= $this->Paginator->sort('estado_conselho') ?></th>
                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prestadores as $prestadore): ?>
            <tr>
                <td><?= $this->Number->format($prestadore->id) ?></td>
                <td><?= h($prestadore->nome) ?></td>
                <td><?= h($prestadore->razao_social) ?></td>
                <td><?= $this->Number->format($prestadore->status) ?></td>
                <td><?= $prestadore->has('especialidade') ? $this->Html->link($prestadore->especialidade->id, ['controller' => 'Especialidades', 'action' => 'view', $prestadore->especialidade->id]) : '' ?></td>
                <td><?= h($prestadore->cep) ?></td>
                <td><?= h($prestadore->endereco) ?></td>
                <td><?= h($prestadore->numero) ?></td>
                <td><?= h($prestadore->complememnto) ?></td>
                <td><?= h($prestadore->bairro) ?></td>
                <td><?= h($prestadore->cidade) ?></td>
                <td><?= h($prestadore->estado) ?></td>
                <td><?= h($prestadore->cnpj) ?></td>
                <td><?= h($prestadore->inscricao) ?></td>
                <td><?= h($prestadore->cpf) ?></td>
                <td><?= h($prestadore->rg) ?></td>
                <td><?= h($prestadore->data_nascimento) ?></td>
                <td><?= h($prestadore->banco) ?></td>
                <td><?= h($prestadore->agencia) ?></td>
                <td><?= h($prestadore->conta) ?></td>
                <td><?= $prestadore->has('tabelas_preco') ? $this->Html->link($prestadore->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'view', $prestadore->tabelas_preco->id]) : '' ?></td>
                <td><?= $prestadore->has('conselho') ? $this->Html->link($prestadore->conselho->id, ['controller' => 'Conselhos', 'action' => 'view', $prestadore->conselho->id]) : '' ?></td>
                <td><?= h($prestadore->numero_conselho) ?></td>
                <td><?= h($prestadore->estado_conselho) ?></td>
                <td><?= h($prestadore->centro_custo) ?></td>
                <td><?= h($prestadore->created) ?></td>
                <td><?= h($prestadore->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prestadore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prestadore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prestadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prestadore->id)]) ?>
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
