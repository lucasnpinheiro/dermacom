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
    <?= $this->Form->create($tabelasValore) ?>
    <div class="panel-body">
        <?php
        echo $this->Form->hidden('tabelas_preco_id');
        echo $this->Form->status('status', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('valor_origem', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('valor_repasse', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->data('data_inicio', ['empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->data('data_fim', ['empty' => true, 'div' => ['class' => 'col-xs-12 col-md-4']]);
        echo $this->Form->input('reajuste_id', ['div' => ['class' => 'col-xs-12 col-md-4']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
