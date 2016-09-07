<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Parentesco'), ['action' => 'edit', $parentesco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Parentesco'), ['action' => 'delete', $parentesco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $parentesco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Parentescos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parentesco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contatos'), ['controller' => 'Contatos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contato'), ['controller' => 'Contatos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Emergencias'), ['controller' => 'PacientesEmergencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Emergencia'), ['controller' => 'PacientesEmergencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="parentescos view large-9 medium-8 columns content">
    <h3><?= h($parentesco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($parentesco->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($parentesco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($parentesco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($parentesco->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contatos') ?></h4>
        <?php if (!empty($parentesco->contatos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Contatos Tipo Id') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('Parentesco Id') ?></th>
                <th><?= __('Tabela') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($parentesco->contatos as $contatos): ?>
            <tr>
                <td><?= h($contatos->id) ?></td>
                <td><?= h($contatos->contatos_tipo_id) ?></td>
                <td><?= h($contatos->valor) ?></td>
                <td><?= h($contatos->parentesco_id) ?></td>
                <td><?= h($contatos->tabela) ?></td>
                <td><?= h($contatos->created) ?></td>
                <td><?= h($contatos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contatos', 'action' => 'view', $contatos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contatos', 'action' => 'edit', $contatos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contatos', 'action' => 'delete', $contatos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contatos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pacientes Emergencias') ?></h4>
        <?php if (!empty($parentesco->pacientes_emergencias)): ?>
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
            <?php foreach ($parentesco->pacientes_emergencias as $pacientesEmergencias): ?>
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
</div>
