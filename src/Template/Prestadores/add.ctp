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
    <?= $this->Form->create($prestadore) ?>
    <div class="panel-body">
        <?php
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('razao_social', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->status('status', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('especialidade_id', ['options' => $especialidades, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
         echo $this->Form->cep('cep', ['data-campos' => [
                '#endereco' => 'logradouro',
                '#bairro' => 'bairro',
                '#cidade' => 'cidade',
                '#estado' => 'uf'
            ], 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('endereco', ['div' => ['class' => 'col-xs-12 col-md-10']]);
        echo $this->Form->input('numero', ['div' => ['class' => 'col-xs-12 col-md-2']]);
        echo $this->Form->input('complememnto', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('bairro', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cidade', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('estado', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('cnpj', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('inscricao', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('cpf', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('rg', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->data('data_nascimento', ['empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('banco', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('agencia', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('conta', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('tabelas_preco_id', ['options' => $tabelasPrecos, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('conselho_id', ['options' => $conselhos, 'empty' => true, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('numero_conselho', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('estado_conselho', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('centro_custo', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>

