<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pacientes Programaco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pacientesProgramacoes index large-9 medium-8 columns content">
    <h3><?= __('Pacientes Programacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paciente_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pacientesProgramacoes as $pacientesProgramaco): ?>
            <tr>
                <td><?= $this->Number->format($pacientesProgramaco->id) ?></td>
                <td><?= $pacientesProgramaco->has('paciente') ? $this->Html->link($pacientesProgramaco->paciente->nome, ['controller' => 'Pacientes', 'action' => 'view', $pacientesProgramaco->paciente->id]) : '' ?></td>
                <td><?= $pacientesProgramaco->has('usuario') ? $this->Html->link($pacientesProgramaco->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $pacientesProgramaco->usuario->id]) : '' ?></td>
                <td><?= h($pacientesProgramaco->data) ?></td>
                <td><?= h($pacientesProgramaco->hora) ?></td>
                <td><?= h($pacientesProgramaco->created) ?></td>
                <td><?= h($pacientesProgramaco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pacientesProgramaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pacientesProgramaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pacientesProgramaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesProgramaco->id)]) ?>
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
