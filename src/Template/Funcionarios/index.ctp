<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conselhos'), ['controller' => 'Conselhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conselho'), ['controller' => 'Conselhos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios index large-9 medium-8 columns content">
    <h3><?= __('Funcionarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('cep') ?></th>
                <th><?= $this->Paginator->sort('endereco') ?></th>
                <th><?= $this->Paginator->sort('numero') ?></th>
                <th><?= $this->Paginator->sort('complemento') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th><?= $this->Paginator->sort('cidade') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th><?= $this->Paginator->sort('cpf') ?></th>
                <th><?= $this->Paginator->sort('rg') ?></th>
                <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                <th><?= $this->Paginator->sort('conselho_id') ?></th>
                <th><?= $this->Paginator->sort('numero_conselho') ?></th>
                <th><?= $this->Paginator->sort('estado_conselho') ?></th>
                <th><?= $this->Paginator->sort('data_admissao') ?></th>
                <th><?= $this->Paginator->sort('cargo_id') ?></th>
                <th><?= $this->Paginator->sort('recebe_comissao') ?></th>
                <th><?= $this->Paginator->sort('cargos_salario_id') ?></th>
                <th><?= $this->Paginator->sort('comissao_id') ?></th>
                <th><?= $this->Paginator->sort('banco') ?></th>
                <th><?= $this->Paginator->sort('agencia') ?></th>
                <th><?= $this->Paginator->sort('conta') ?></th>
                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario): ?>
            <tr>
                <td><?= $this->Number->format($funcionario->id) ?></td>
                <td><?= h($funcionario->nome) ?></td>
                <td><?= $this->Number->format($funcionario->status) ?></td>
                <td><?= h($funcionario->cep) ?></td>
                <td><?= h($funcionario->endereco) ?></td>
                <td><?= h($funcionario->numero) ?></td>
                <td><?= h($funcionario->complemento) ?></td>
                <td><?= h($funcionario->bairro) ?></td>
                <td><?= h($funcionario->cidade) ?></td>
                <td><?= h($funcionario->estado) ?></td>
                <td><?= h($funcionario->cpf) ?></td>
                <td><?= h($funcionario->rg) ?></td>
                <td><?= h($funcionario->data_nascimento) ?></td>
                <td><?= $funcionario->has('conselho') ? $this->Html->link($funcionario->conselho->id, ['controller' => 'Conselhos', 'action' => 'view', $funcionario->conselho->id]) : '' ?></td>
                <td><?= h($funcionario->numero_conselho) ?></td>
                <td><?= h($funcionario->estado_conselho) ?></td>
                <td><?= h($funcionario->data_admissao) ?></td>
                <td><?= $this->Number->format($funcionario->cargo_id) ?></td>
                <td><?= $this->Number->format($funcionario->recebe_comissao) ?></td>
                <td><?= $this->Number->format($funcionario->cargos_salario_id) ?></td>
                <td><?= $this->Number->format($funcionario->comissao_id) ?></td>
                <td><?= h($funcionario->banco) ?></td>
                <td><?= h($funcionario->agencia) ?></td>
                <td><?= h($funcionario->conta) ?></td>
                <td><?= h($funcionario->centro_custo) ?></td>
                <td><?= h($funcionario->created) ?></td>
                <td><?= h($funcionario->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?>
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
