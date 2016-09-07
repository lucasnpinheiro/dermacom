<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $paciente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['action' => 'index']) ?></li>
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
<div class="pacientes form large-9 medium-8 columns content">
    <?= $this->Form->create($paciente) ?>
    <fieldset>
        <legend><?= __('Edit Paciente') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
            echo $this->Form->input('cep');
            echo $this->Form->input('endereco');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cidade');
            echo $this->Form->input('estado');
            echo $this->Form->input('cpf');
            echo $this->Form->input('rg');
            echo $this->Form->input('data_nascimento', ['empty' => true]);
            echo $this->Form->input('sexo_id', ['options' => $sexos, 'empty' => true]);
            echo $this->Form->input('foto');
            echo $this->Form->input('casrtao_sus');
            echo $this->Form->input('estados_civil_id');
            echo $this->Form->input('escolaridade_id', ['options' => $escolaridades, 'empty' => true]);
            echo $this->Form->input('profissao_id');
            echo $this->Form->input('naturalidade');
            echo $this->Form->input('nacionalidade_id', ['options' => $nacionalidades, 'empty' => true]);
            echo $this->Form->input('religiao_id');
            echo $this->Form->input('cor_id');
            echo $this->Form->input('centro_custo');
            echo $this->Form->input('convenios._ids', ['options' => $convenios]);
            echo $this->Form->input('midias._ids', ['options' => $midias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
