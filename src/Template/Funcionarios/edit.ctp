<?php
$this->Html->addCrumb(__('Index'), ['action' => 'index']);
$this->Html->addCrumb(__($this->request->params['action']), null);

$this->Html->addButton($this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> ' . __('Add'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]));
$this->Html->addButton($this->Html->link('<i class="fa fa-list" aria-hidden="true"></i> ' . __('Index'), ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]));
$this->Html->addButton($this->Form->postLink('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id), 'escape' => false, 'class' => 'btn btn-danger']));
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __($sub_title) ?></h3>
    </div>
    <?= $this->Form->create($funcionario) ?>
    <div class="panel-body">
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
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>