<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tabelas Preco'), ['action' => 'edit', $tabelasPreco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tabelas Preco'), ['action' => 'delete', $tabelasPreco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasPreco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Precos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Preco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Valores'), ['controller' => 'TabelasValores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Valore'), ['controller' => 'TabelasValores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tabelas Valores Historicos'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabelas Valores Historico'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tabelasPrecos view large-9 medium-8 columns content">
    <h3><?= h($tabelasPreco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($tabelasPreco->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tabelasPreco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tabelasPreco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tabelasPreco->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Prestadores') ?></h4>
        <?php if (!empty($tabelasPreco->prestadores)): ?>
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
            <?php foreach ($tabelasPreco->prestadores as $prestadores): ?>
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
    <div class="related">
        <h4><?= __('Related Tabelas Valores') ?></h4>
        <?php if (!empty($tabelasPreco->tabelas_valores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tabelas Preco Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Valor Origem') ?></th>
                <th><?= __('Valor Repasse') ?></th>
                <th><?= __('Data Inicio') ?></th>
                <th><?= __('Data Fim') ?></th>
                <th><?= __('Reajuste Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tabelasPreco->tabelas_valores as $tabelasValores): ?>
            <tr>
                <td><?= h($tabelasValores->id) ?></td>
                <td><?= h($tabelasValores->tabelas_preco_id) ?></td>
                <td><?= h($tabelasValores->status) ?></td>
                <td><?= h($tabelasValores->valor_origem) ?></td>
                <td><?= h($tabelasValores->valor_repasse) ?></td>
                <td><?= h($tabelasValores->data_inicio) ?></td>
                <td><?= h($tabelasValores->data_fim) ?></td>
                <td><?= h($tabelasValores->reajuste_id) ?></td>
                <td><?= h($tabelasValores->created) ?></td>
                <td><?= h($tabelasValores->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TabelasValores', 'action' => 'view', $tabelasValores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TabelasValores', 'action' => 'edit', $tabelasValores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TabelasValores', 'action' => 'delete', $tabelasValores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasValores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tabelas Valores Historicos') ?></h4>
        <?php if (!empty($tabelasPreco->tabelas_valores_historicos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tabelas Preco Id') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Valor Origem') ?></th>
                <th><?= __('Valor Repasse') ?></th>
                <th><?= __('Data Inicio') ?></th>
                <th><?= __('Data Fim') ?></th>
                <th><?= __('Reajuste Id') ?></th>
                <th><?= __('Reated') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tabelasPreco->tabelas_valores_historicos as $tabelasValoresHistoricos): ?>
            <tr>
                <td><?= h($tabelasValoresHistoricos->id) ?></td>
                <td><?= h($tabelasValoresHistoricos->tabelas_preco_id) ?></td>
                <td><?= h($tabelasValoresHistoricos->status) ?></td>
                <td><?= h($tabelasValoresHistoricos->valor_origem) ?></td>
                <td><?= h($tabelasValoresHistoricos->valor repasse) ?></td>
                <td><?= h($tabelasValoresHistoricos->data_inicio) ?></td>
                <td><?= h($tabelasValoresHistoricos->data_fim) ?></td>
                <td><?= h($tabelasValoresHistoricos->reajuste_id) ?></td>
                <td><?= h($tabelasValoresHistoricos->reated) ?></td>
                <td><?= h($tabelasValoresHistoricos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'view', $tabelasValoresHistoricos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'edit', $tabelasValoresHistoricos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TabelasValoresHistoricos', 'action' => 'delete', $tabelasValoresHistoricos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabelasValoresHistoricos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
