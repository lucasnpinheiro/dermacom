<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prestadore'), ['action' => 'edit', $prestadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prestadore'), ['action' => 'delete', $prestadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prestadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prestadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestadore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Especialidades'), ['controller' => 'Especialidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidade'), ['controller' => 'Especialidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['controller' => 'TabelasPrecos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['controller' => 'TabelasPrecos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Conselhos'), ['controller' => 'Conselhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conselho'), ['controller' => 'Conselhos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prestadores view large-9 medium-8 columns content">
    <h3><?= h($prestadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($prestadore->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Razao Social') ?></th>
            <td><?= h($prestadore->razao_social) ?></td>
        </tr>
        <tr>
            <th><?= __('Especialidade') ?></th>
            <td><?= $prestadore->has('especialidade') ? $this->Html->link($prestadore->especialidade->id, ['controller' => 'Especialidades', 'action' => 'view', $prestadore->especialidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= h($prestadore->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($prestadore->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($prestadore->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Complememnto') ?></th>
            <td><?= h($prestadore->complememnto) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($prestadore->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($prestadore->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($prestadore->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cnpj') ?></th>
            <td><?= h($prestadore->cnpj) ?></td>
        </tr>
        <tr>
            <th><?= __('Inscricao') ?></th>
            <td><?= h($prestadore->inscricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($prestadore->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Rg') ?></th>
            <td><?= h($prestadore->rg) ?></td>
        </tr>
        <tr>
            <th><?= __('Banco') ?></th>
            <td><?= h($prestadore->banco) ?></td>
        </tr>
        <tr>
            <th><?= __('Agencia') ?></th>
            <td><?= h($prestadore->agencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Conta') ?></th>
            <td><?= h($prestadore->conta) ?></td>
        </tr>
        <tr>
            <th><?= __('Tabelas Preco') ?></th>
            <td><?= $prestadore->has('tabelas_preco') ? $this->Html->link($prestadore->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'view', $prestadore->tabelas_preco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Conselho') ?></th>
            <td><?= $prestadore->has('conselho') ? $this->Html->link($prestadore->conselho->id, ['controller' => 'Conselhos', 'action' => 'view', $prestadore->conselho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Numero Conselho') ?></th>
            <td><?= h($prestadore->numero_conselho) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Conselho') ?></th>
            <td><?= h($prestadore->estado_conselho) ?></td>
        </tr>
        <tr>
            <th><?= __('Centro Custo') ?></th>
            <td><?= h($prestadore->centro_custo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($prestadore->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($prestadore->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Nascimento') ?></th>
            <td><?= h($prestadore->data_nascimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($prestadore->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($prestadore->modified) ?></td>
        </tr>
    </table>
</div>
