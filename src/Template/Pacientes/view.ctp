<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paciente'), ['action' => 'edit', $paciente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paciente'), ['action' => 'delete', $paciente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sexos'), ['controller' => 'Sexos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Escolaridades'), ['controller' => 'Escolaridades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Escolaridade'), ['controller' => 'Escolaridades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nacionalidades'), ['controller' => 'Nacionalidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nacionalidade'), ['controller' => 'Nacionalidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Acompanhamentos'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Acompanhamento'), ['controller' => 'PacientesAcompanhamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['controller' => 'PacientesEmergencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['controller' => 'PacientesEmergencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Servicos'), ['controller' => 'PacientesServicos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Servico'), ['controller' => 'PacientesServicos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Soube'), ['controller' => 'PacientesSoube', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Convenios'), ['controller' => 'Convenios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Convenio'), ['controller' => 'Convenios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Midias'), ['controller' => 'Midias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Midia'), ['controller' => 'Midias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientes view large-9 medium-8 columns content">
    <h3><?= h($paciente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($paciente->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Cep') ?></th>
            <td><?= h($paciente->cep) ?></td>
        </tr>
        <tr>
            <th><?= __('Endereco') ?></th>
            <td><?= h($paciente->endereco) ?></td>
        </tr>
        <tr>
            <th><?= __('Numero') ?></th>
            <td><?= h($paciente->numero) ?></td>
        </tr>
        <tr>
            <th><?= __('Complemento') ?></th>
            <td><?= h($paciente->complemento) ?></td>
        </tr>
        <tr>
            <th><?= __('Bairro') ?></th>
            <td><?= h($paciente->bairro) ?></td>
        </tr>
        <tr>
            <th><?= __('Cidade') ?></th>
            <td><?= h($paciente->cidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($paciente->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Cpf') ?></th>
            <td><?= h($paciente->cpf) ?></td>
        </tr>
        <tr>
            <th><?= __('Rg') ?></th>
            <td><?= h($paciente->rg) ?></td>
        </tr>
        <tr>
            <th><?= __('Sexo') ?></th>
            <td><?= $paciente->has('sexo') ? $this->Html->link($paciente->sexo->id, ['controller' => 'Sexos', 'action' => 'view', $paciente->sexo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Foto') ?></th>
            <td><?= h($paciente->foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Casrtao Sus') ?></th>
            <td><?= h($paciente->casrtao_sus) ?></td>
        </tr>
        <tr>
            <th><?= __('Escolaridade') ?></th>
            <td><?= $paciente->has('escolaridade') ? $this->Html->link($paciente->escolaridade->id, ['controller' => 'Escolaridades', 'action' => 'view', $paciente->escolaridade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Naturalidade') ?></th>
            <td><?= h($paciente->naturalidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Nacionalidade') ?></th>
            <td><?= $paciente->has('nacionalidade') ? $this->Html->link($paciente->nacionalidade->id, ['controller' => 'Nacionalidades', 'action' => 'view', $paciente->nacionalidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Centro Custo') ?></th>
            <td><?= h($paciente->centro_custo) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($paciente->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($paciente->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Estados Civil Id') ?></th>
            <td><?= $this->Number->format($paciente->estados_civil_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Profissao Id') ?></th>
            <td><?= $this->Number->format($paciente->profissao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Religiao Id') ?></th>
            <td><?= $this->Number->format($paciente->religiao_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Cor Id') ?></th>
            <td><?= $this->Number->format($paciente->cor_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Nascimento') ?></th>
            <td><?= h($paciente->data_nascimento) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($paciente->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($paciente->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pacientes Acompanhamentos') ?></h4>
        <?php if (!empty($paciente->pacientes_acompanhamentos)): ?>
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
            <?php foreach ($paciente->pacientes_acompanhamentos as $pacientesAcompanhamentos): ?>
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
        <h4><?= __('Related Pacientes Emergencias') ?></h4>
        <?php if (!empty($paciente->pacientes_emergencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Paciente Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Parentesco Id') ?></th>
                <th><?= __('Telefone') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->pacientes_emergencias as $pacientesEmergencias): ?>
            <tr>
                <td><?= h($pacientesEmergencias->id) ?></td>
                <td><?= h($pacientesEmergencias->paciente_id) ?></td>
                <td><?= h($pacientesEmergencias->nome) ?></td>
                <td><?= h($pacientesEmergencias->parentesco_id) ?></td>
                <td><?= h($pacientesEmergencias->telefone) ?></td>
                <td><?= h($pacientesEmergencias->created) ?></td>
                <td><?= h($pacientesEmergencias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PacientesEmergencias', 'action' => 'view', $pacientesEmergencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PacientesEmergencias', 'action' => 'edit', $pacientesEmergencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PacientesEmergencias', 'action' => 'delete', $pacientesEmergencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesEmergencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pacientes Servicos') ?></h4>
        <?php if (!empty($paciente->pacientes_servicos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Paciente Id') ?></th>
                <th><?= __('Servico Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->pacientes_servicos as $pacientesServicos): ?>
            <tr>
                <td><?= h($pacientesServicos->id) ?></td>
                <td><?= h($pacientesServicos->paciente_id) ?></td>
                <td><?= h($pacientesServicos->servico_id) ?></td>
                <td><?= h($pacientesServicos->created) ?></td>
                <td><?= h($pacientesServicos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PacientesServicos', 'action' => 'view', $pacientesServicos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PacientesServicos', 'action' => 'edit', $pacientesServicos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PacientesServicos', 'action' => 'delete', $pacientesServicos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesServicos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pacientes Soube') ?></h4>
        <?php if (!empty($paciente->pacientes_soube)): ?>
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
            <?php foreach ($paciente->pacientes_soube as $pacientesSoube): ?>
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
        <h4><?= __('Related Convenios') ?></h4>
        <?php if (!empty($paciente->convenios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Razao Social') ?></th>
                <th><?= __('Cep') ?></th>
                <th><?= __('Endereco') ?></th>
                <th><?= __('Numero') ?></th>
                <th><?= __('Complemento') ?></th>
                <th><?= __('Bairro') ?></th>
                <th><?= __('Cidade') ?></th>
                <th><?= __('Estado') ?></th>
                <th><?= __('Cnpj') ?></th>
                <th><?= __('Inscricao') ?></th>
                <th><?= __('Centro Custo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->convenios as $convenios): ?>
            <tr>
                <td><?= h($convenios->id) ?></td>
                <td><?= h($convenios->nome) ?></td>
                <td><?= h($convenios->status) ?></td>
                <td><?= h($convenios->razao_social) ?></td>
                <td><?= h($convenios->cep) ?></td>
                <td><?= h($convenios->endereco) ?></td>
                <td><?= h($convenios->numero) ?></td>
                <td><?= h($convenios->complemento) ?></td>
                <td><?= h($convenios->bairro) ?></td>
                <td><?= h($convenios->cidade) ?></td>
                <td><?= h($convenios->estado) ?></td>
                <td><?= h($convenios->cnpj) ?></td>
                <td><?= h($convenios->inscricao) ?></td>
                <td><?= h($convenios->centro_custo) ?></td>
                <td><?= h($convenios->created) ?></td>
                <td><?= h($convenios->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Convenios', 'action' => 'view', $convenios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Convenios', 'action' => 'edit', $convenios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Convenios', 'action' => 'delete', $convenios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $convenios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Midias') ?></h4>
        <?php if (!empty($paciente->midias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Contatotipo Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paciente->midias as $midias): ?>
            <tr>
                <td><?= h($midias->id) ?></td>
                <td><?= h($midias->nome) ?></td>
                <td><?= h($midias->contatotipo_id) ?></td>
                <td><?= h($midias->created) ?></td>
                <td><?= h($midias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Midias', 'action' => 'view', $midias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Midias', 'action' => 'edit', $midias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Midias', 'action' => 'delete', $midias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $midias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
