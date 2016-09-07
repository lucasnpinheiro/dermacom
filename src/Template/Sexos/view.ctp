<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sexo'), ['action' => 'edit', $sexo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sexo'), ['action' => 'delete', $sexo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sexo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sexos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sexo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sexos view large-9 medium-8 columns content">
    <h3><?= h($sexo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($sexo->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sexo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($sexo->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($sexo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pacientes') ?></h4>
        <?php if (!empty($sexo->pacientes)): ?>
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
                <th><?= __('Sexo Id') ?></th>
                <th><?= __('Foto') ?></th>
                <th><?= __('Casrtao Sus') ?></th>
                <th><?= __('Estados Civil Id') ?></th>
                <th><?= __('Escolaridade Id') ?></th>
                <th><?= __('Profissao Id') ?></th>
                <th><?= __('Naturalidade') ?></th>
                <th><?= __('Nacionalidade Id') ?></th>
                <th><?= __('Religiao Id') ?></th>
                <th><?= __('Cor Id') ?></th>
                <th><?= __('Centro Custo') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($sexo->pacientes as $pacientes): ?>
            <tr>
                <td><?= h($pacientes->id) ?></td>
                <td><?= h($pacientes->nome) ?></td>
                <td><?= h($pacientes->status) ?></td>
                <td><?= h($pacientes->cep) ?></td>
                <td><?= h($pacientes->endereco) ?></td>
                <td><?= h($pacientes->numero) ?></td>
                <td><?= h($pacientes->complemento) ?></td>
                <td><?= h($pacientes->bairro) ?></td>
                <td><?= h($pacientes->cidade) ?></td>
                <td><?= h($pacientes->estado) ?></td>
                <td><?= h($pacientes->cpf) ?></td>
                <td><?= h($pacientes->rg) ?></td>
                <td><?= h($pacientes->data_nascimento) ?></td>
                <td><?= h($pacientes->sexo_id) ?></td>
                <td><?= h($pacientes->foto) ?></td>
                <td><?= h($pacientes->casrtao_sus) ?></td>
                <td><?= h($pacientes->estados_civil_id) ?></td>
                <td><?= h($pacientes->escolaridade_id) ?></td>
                <td><?= h($pacientes->profissao_id) ?></td>
                <td><?= h($pacientes->naturalidade) ?></td>
                <td><?= h($pacientes->nacionalidade_id) ?></td>
                <td><?= h($pacientes->religiao_id) ?></td>
                <td><?= h($pacientes->cor_id) ?></td>
                <td><?= h($pacientes->centro_custo) ?></td>
                <td><?= h($pacientes->created) ?></td>
                <td><?= h($pacientes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pacientes', 'action' => 'view', $pacientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pacientes', 'action' => 'edit', $pacientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pacientes', 'action' => 'delete', $pacientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
