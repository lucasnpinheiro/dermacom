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
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->status('status', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('cep', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('endereco', ['div' => ['class' => 'col-xs-12 col-md-10']]);
        echo $this->Form->input('numero', ['div' => ['class' => 'col-xs-12 col-md-2']]);
        echo $this->Form->input('complemento', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('bairro', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cidade', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('estado', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cpf', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('rg', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->data('data_nascimento', ['empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('sexo_id', ['options' => $sexos, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('foto', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('casrtao_sus', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('estados_civil_id', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('escolaridade_id', ['options' => $escolaridades, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('profissao_id', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('naturalidade', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('nacionalidade_id', ['options' => $nacionalidades, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('religiao_id', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('cor_id', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('centro_custo', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('convenios._ids', ['options' => $convenios, 'div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('midias._ids', ['options' => $midias, 'div' => ['class' => 'col-xs-12 col-md-6']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>


