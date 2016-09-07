<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Convenios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="convenios form large-9 medium-8 columns content">
    <?= $this->Form->create($convenio) ?>
    <fieldset>
        <legend><?= __('Add Convenio') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
            echo $this->Form->input('razao_social');
            echo $this->Form->input('cep');
            echo $this->Form->input('endereco');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('cidade');
            echo $this->Form->input('estado');
            echo $this->Form->input('cnpj');
            echo $this->Form->input('inscricao');
            echo $this->Form->input('centro_custo');
            echo $this->Form->input('pacientes._ids', ['options' => $pacientes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
