<?php
$this->Html->addCrumb(__('Index'), ['action' => 'index']);
$this->Html->addCrumb(__($this->request->params['action']), null);

$this->Html->addButton($this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> ' . __('Add'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]));
$this->Html->addButton($this->Html->link('<i class="fa fa-list" aria-hidden="true"></i> ' . __('Index'), ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]));
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __($sub_title) ?></h3>
    </div>
    <?= $this->Form->create($paciente) ?>
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
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>


