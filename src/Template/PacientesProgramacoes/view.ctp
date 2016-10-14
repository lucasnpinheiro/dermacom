<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pacientes Programaco'), ['action' => 'edit', $pacientesProgramaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pacientes Programaco'), ['action' => 'delete', $pacientesProgramaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pacientesProgramaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes Programacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pacientes Programaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pacientesProgramacoes view large-9 medium-8 columns content">
    <h3><?= h($pacientesProgramaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Paciente') ?></th>
            <td><?= $pacientesProgramaco->has('paciente') ? $this->Html->link($pacientesProgramaco->paciente->nome, ['controller' => 'Pacientes', 'action' => 'view', $pacientesProgramaco->paciente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $pacientesProgramaco->has('usuario') ? $this->Html->link($pacientesProgramaco->usuario->nome, ['controller' => 'Usuarios', 'action' => 'view', $pacientesProgramaco->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pacientesProgramaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($pacientesProgramaco->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hora') ?></th>
            <td><?= h($pacientesProgramaco->hora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pacientesProgramaco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pacientesProgramaco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Motivo') ?></h4>
        <?= $this->Text->autoParagraph(h($pacientesProgramaco->motivo)); ?>
    </div>
</div>
