<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Funcionario'), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conselhos'), ['controller' => 'Conselhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conselho'), ['controller' => 'Conselhos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= h($funcionario->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($funcionario->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($funcionario->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento') ?></th>
            <td><?= h($funcionario->complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($funcionario->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($funcionario->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($funcionario->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($funcionario->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Rg') ?></th>
            <td><?= h($funcionario->rg) ?></td>
        </tr>
        <tr>
            <th><?= __('Conselho') ?></th>
            <td><?= $funcionario->has('conselho') ? $this->Html->link($funcionario->conselho->id, ['controller' => 'Conselhos', 'action' => 'view', $funcionario->conselho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Conselho') ?></th>
            <td><?= h($funcionario->numero_conselho) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Conselho') ?></th>
            <td><?= h($funcionario->estado_conselho) ?></td>
        </tr>
        <tr>
            <th><?= __('Banco') ?></th>
            <td><?= h($funcionario->banco) ?></td>
        </tr>
        <tr>
            <th><?= __('Agencia') ?></th>
            <td><?= h($funcionario->agencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Conta') ?></th>
            <td><?= h($funcionario->conta) ?></td>
        </tr>
        <tr>
            <th><?= __('Centro Custo') ?></th>
            <td><?= h($funcionario->centro_custo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($funcionario->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo Id') ?></th>
            <td><?= $this->Number->format($funcionario->cargo_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Recebe Comissao') ?></th>
            <td><?= $this->Number->format($funcionario->recebe_comissao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cargos Salario Id') ?></th>
            <td><?= $this->Number->format($funcionario->cargos_salario_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Comissao Id') ?></th>
            <td><?= $this->Number->format($funcionario->comissao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Nascimento') ?></th>
            <td><?= h($funcionario->data_nascimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Admissao') ?></th>
            <td><?= h($funcionario->data_admissao) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($funcionario->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($funcionario->modified) ?></td>
        </tr>
    </table>
</div>
