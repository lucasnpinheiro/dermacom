<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Funcionarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Conselhos'), ['controller' => 'Conselhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conselho'), ['controller' => 'Conselhos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="funcionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Add Funcionario') ?></legend>
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
            echo $this->Form->input('conselho_id', ['options' => $conselhos, 'empty' => true]);
            echo $this->Form->input('numero_conselho');
            echo $this->Form->input('estado_conselho');
            echo $this->Form->input('data_admissao', ['empty' => true]);
            echo $this->Form->input('cargo_id');
            echo $this->Form->input('recebe_comissao');
            echo $this->Form->input('cargos_salario_id');
            echo $this->Form->input('comissao_id');
            echo $this->Form->input('banco');
            echo $this->Form->input('agencia');
            echo $this->Form->input('conta');
            echo $this->Form->input('centro_custo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
