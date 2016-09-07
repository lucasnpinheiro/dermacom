<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Conselho'), ['action' => 'edit', $conselho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Conselho'), ['action' => 'delete', $conselho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conselho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Conselhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Conselho'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['controller' => 'Funcionarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Funcionario'), ['controller' => 'Funcionarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="conselhos view large-9 medium-8 columns content">
    <h3><?= h($conselho->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($conselho->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($conselho->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($conselho->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($conselho->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Funcionarios') ?></h4>
        <?php if (!empty($conselho->funcionarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Cep') ?></th>
                <th><?= __('Endereco') ?></th>
                <th><?= __('Numero') ?></th>
                <th><?= __('Complemento') ?></th>
                <th><?= __('Bairro') ?></th>
                <th><?= __('Cidade') ?></th>
                <th><?= __('Estado') ?></th>
                <th><?= __('Cpf') ?></th>
                <th><?= __('Rg') ?></th>
                <th><?= __('Data Nascimento') ?></th>
                <th><?= __('Conselho Id') ?></th>
                <th><?= __('Numero Conselho') ?></th>
                <th><?= __('Estado Conselho') ?></th>
                <th><?= __('Data Admissao') ?></th>
                <th><?= __('Cargo Id') ?></th>
                <th><?= __('Recebe Comissao') ?></th>
                <th><?= __('Cargos Salario Id') ?></th>
                <th><?= __('Comissao Id') ?></th>
                <th><?= __('Banco') ?></th>
                <th><?= __('Agencia') ?></th>
                <th><?= __('Conta') ?></th>
                <th><?= __('Centro Custo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($conselho->funcionarios as $funcionarios): ?>
            <tr>
                <td><?= h($funcionarios->id) ?></td>
                <td><?= h($funcionarios->nome) ?></td>
                <td><?= h($funcionarios->status) ?></td>
                <td><?= h($funcionarios->cep) ?></td>
                <td><?= h($funcionarios->endereco) ?></td>
                <td><?= h($funcionarios->numero) ?></td>
                <td><?= h($funcionarios->complemento) ?></td>
                <td><?= h($funcionarios->bairro) ?></td>
                <td><?= h($funcionarios->cidade) ?></td>
                <td><?= h($funcionarios->estado) ?></td>
                <td><?= h($funcionarios->cpf) ?></td>
                <td><?= h($funcionarios->rg) ?></td>
                <td><?= h($funcionarios->data_nascimento) ?></td>
                <td><?= h($funcionarios->conselho_id) ?></td>
                <td><?= h($funcionarios->numero_conselho) ?></td>
                <td><?= h($funcionarios->estado_conselho) ?></td>
                <td><?= h($funcionarios->data_admissao) ?></td>
                <td><?= h($funcionarios->cargo_id) ?></td>
                <td><?= h($funcionarios->recebe_comissao) ?></td>
                <td><?= h($funcionarios->cargos_salario_id) ?></td>
                <td><?= h($funcionarios->comissao_id) ?></td>
                <td><?= h($funcionarios->banco) ?></td>
                <td><?= h($funcionarios->agencia) ?></td>
                <td><?= h($funcionarios->conta) ?></td>
                <td><?= h($funcionarios->centro_custo) ?></td>
                <td><?= h($funcionarios->created) ?></td>
                <td><?= h($funcionarios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Funcionarios', 'action' => 'view', $funcionarios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Funcionarios', 'action' => 'edit', $funcionarios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Funcionarios', 'action' => 'delete', $funcionarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionarios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prestadores') ?></h4>
        <?php if (!empty($conselho->prestadores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Razao Social') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Especialidade Id') ?></th>
                <th><?= __('Cep') ?></th>
                <th><?= __('Endereco') ?></th>
                <th><?= __('Numero') ?></th>
                <th><?= __('Complememnto') ?></th>
                <th><?= __('Bairro') ?></th>
                <th><?= __('Cidade') ?></th>
                <th><?= __('Estado') ?></th>
                <th><?= __('Cnpj') ?></th>
                <th><?= __('Inscricao') ?></th>
                <th><?= __('Cpf') ?></th>
                <th><?= __('Rg') ?></th>
                <th><?= __('Data Nascimento') ?></th>
                <th><?= __('Banco') ?></th>
                <th><?= __('Agencia') ?></th>
                <th><?= __('Conta') ?></th>
                <th><?= __('Tabelas Preco Id') ?></th>
                <th><?= __('Conselho Id') ?></th>
                <th><?= __('Numero Conselho') ?></th>
                <th><?= __('Estado Conselho') ?></th>
                <th><?= __('Centro Custo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($conselho->prestadores as $prestadores): ?>
            <tr>
                <td><?= h($prestadores->id) ?></td>
                <td><?= h($prestadores->nome) ?></td>
                <td><?= h($prestadores->razao_social) ?></td>
                <td><?= h($prestadores->status) ?></td>
                <td><?= h($prestadores->especialidade_id) ?></td>
                <td><?= h($prestadores->cep) ?></td>
                <td><?= h($prestadores->endereco) ?></td>
                <td><?= h($prestadores->numero) ?></td>
                <td><?= h($prestadores->complememnto) ?></td>
                <td><?= h($prestadores->bairro) ?></td>
                <td><?= h($prestadores->cidade) ?></td>
                <td><?= h($prestadores->estado) ?></td>
                <td><?= h($prestadores->cnpj) ?></td>
                <td><?= h($prestadores->inscricao) ?></td>
                <td><?= h($prestadores->cpf) ?></td>
                <td><?= h($prestadores->rg) ?></td>
                <td><?= h($prestadores->data_nascimento) ?></td>
                <td><?= h($prestadores->banco) ?></td>
                <td><?= h($prestadores->agencia) ?></td>
                <td><?= h($prestadores->conta) ?></td>
                <td><?= h($prestadores->tabelas_preco_id) ?></td>
                <td><?= h($prestadores->conselho_id) ?></td>
                <td><?= h($prestadores->numero_conselho) ?></td>
                <td><?= h($prestadores->estado_conselho) ?></td>
                <td><?= h($prestadores->centro_custo) ?></td>
                <td><?= h($prestadores->created) ?></td>
                <td><?= h($prestadores->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Prestadores', 'action' => 'view', $prestadores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Prestadores', 'action' => 'edit', $prestadores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Prestadores', 'action' => 'delete', $prestadores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prestadores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
