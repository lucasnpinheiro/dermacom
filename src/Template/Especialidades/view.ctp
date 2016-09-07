<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Especialidade'), ['action' => 'edit', $especialidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Especialidade'), ['action' => 'delete', $especialidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $especialidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Especialidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especialidade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Acompanhamentos'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prestadores'), ['controller' => 'Prestadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prestadore'), ['controller' => 'Prestadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="especialidades view large-9 medium-8 columns content">
    <h3><?= h($especialidade->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($especialidade->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($especialidade->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($especialidade->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($especialidade->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pacientes Acompanhamentos') ?></h4>
        <?php if (!empty($especialidade->pacientes_acompanhamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Paciente Id') ?></th>
                <th><?= __('Especialidade Id') ?></th>
                <th><?= __('Medico') ?></th>
                <th><?= __('Telefone') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($especialidade->pacientes_acompanhamentos as $pacientesAcompanhamentos): ?>
            <tr>
                <td><?= h($pacientesAcompanhamentos->id) ?></td>
                <td><?= h($pacientesAcompanhamentos->paciente_id) ?></td>
                <td><?= h($pacientesAcompanhamentos->especialidade_id) ?></td>
                <td><?= h($pacientesAcompanhamentos->medico) ?></td>
                <td><?= h($pacientesAcompanhamentos->telefone) ?></td>
                <td><?= h($pacientesAcompanhamentos->created) ?></td>
                <td><?= h($pacientesAcompanhamentos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'view', $pacientesAcompanhamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'edit', $pacientesAcompanhamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'delete', $pacientesAcompanhamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesAcompanhamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pacientes Soube') ?></h4>
        <?php if (!empty($especialidade->pacientes_soube)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Paciente Id') ?></th>
                <th><?= __('Como') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Telefone') ?></th>
                <th><?= __('Especialidade Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($especialidade->pacientes_soube as $pacientesSoube): ?>
            <tr>
                <td><?= h($pacientesSoube->id) ?></td>
                <td><?= h($pacientesSoube->paciente_id) ?></td>
                <td><?= h($pacientesSoube->como) ?></td>
                <td><?= h($pacientesSoube->nome) ?></td>
                <td><?= h($pacientesSoube->telefone) ?></td>
                <td><?= h($pacientesSoube->especialidade_id) ?></td>
                <td><?= h($pacientesSoube->created) ?></td>
                <td><?= h($pacientesSoube->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PacientesSoube', 'action' => 'view', $pacientesSoube->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PacientesSoube', 'action' => 'edit', $pacientesSoube->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PacientesSoube', 'action' => 'delete', $pacientesSoube->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesSoube->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prestadores') ?></h4>
        <?php if (!empty($especialidade->prestadores)): ?>
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
            <?php foreach ($especialidade->prestadores as $prestadores): ?>
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
