<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sexos'), ['controller' => 'Sexos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Escolaridades'), ['controller' => 'Escolaridades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Escolaridade'), ['controller' => 'Escolaridades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nacionalidades'), ['controller' => 'Nacionalidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nacionalidade'), ['controller' => 'Nacionalidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Acompanhamentos'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['controller' => 'PacientesEmergencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['controller' => 'PacientesEmergencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Servicos'), ['controller' => 'PacientesServicos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Servico'), ['controller' => 'PacientesServicos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Convenios'), ['controller' => 'Convenios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Convenio'), ['controller' => 'Convenios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Midias'), ['controller' => 'Midias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Midia'), ['controller' => 'Midias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes') ?></h3>
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
                <th><?= $this->Paginator->sort('sexo_id') ?></th>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('casrtao_sus') ?></th>
                <th><?= $this->Paginator->sort('estados_civil_id') ?></th>
                <th><?= $this->Paginator->sort('escolaridade_id') ?></th>
                <th><?= $this->Paginator->sort('profissao_id') ?></th>
                <th><?= $this->Paginator->sort('naturalidade') ?></th>
                <th><?= $this->Paginator->sort('nacionalidade_id') ?></th>
                <th><?= $this->Paginator->sort('religiao_id') ?></th>
                <th><?= $this->Paginator->sort('cor_id') ?></th>
                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientes as $paciente): ?>
            <tr>
                <td><?= $this->Number->format($paciente->id) ?></td>
                <td><?= h($paciente->nome) ?></td>
                <td><?= $this->Number->format($paciente->status) ?></td>
                <td><?= h($paciente->cep) ?></td>
                <td><?= h($paciente->endereco) ?></td>
                <td><?= h($paciente->numero) ?></td>
                <td><?= h($paciente->complemento) ?></td>
                <td><?= h($paciente->bairro) ?></td>
                <td><?= h($paciente->cidade) ?></td>
                <td><?= h($paciente->estado) ?></td>
                <td><?= h($paciente->cpf) ?></td>
                <td><?= h($paciente->rg) ?></td>
                <td><?= h($paciente->data_nascimento) ?></td>
                <td><?= $paciente->has('sexo') ? $this->Html->link($paciente->sexo->id, ['controller' => 'Sexos', 'action' => 'view', $paciente->sexo->id]) : '' ?></td>
                <td><?= h($paciente->foto) ?></td>
                <td><?= h($paciente->casrtao_sus) ?></td>
                <td><?= $this->Number->format($paciente->estados_civil_id) ?></td>
                <td><?= $paciente->has('escolaridade') ? $this->Html->link($paciente->escolaridade->id, ['controller' => 'Escolaridades', 'action' => 'view', $paciente->escolaridade->id]) : '' ?></td>
                <td><?= $this->Number->format($paciente->profissao_id) ?></td>
                <td><?= h($paciente->naturalidade) ?></td>
                <td><?= $paciente->has('nacionalidade') ? $this->Html->link($paciente->nacionalidade->id, ['controller' => 'Nacionalidades', 'action' => 'view', $paciente->nacionalidade->id]) : '' ?></td>
                <td><?= $this->Number->format($paciente->religiao_id) ?></td>
                <td><?= $this->Number->format($paciente->cor_id) ?></td>
                <td><?= h($paciente->centro_custo) ?></td>
                <td><?= h($paciente->created) ?></td>
                <td><?= h($paciente->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paciente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paciente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?>
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
