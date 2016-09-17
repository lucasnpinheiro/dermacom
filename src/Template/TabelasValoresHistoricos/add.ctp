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
    <?= $this->Form->create($tabelasValoresHistorico) ?>
    <div class="panel-body">
        <?php
        echo $this->Form->input('tabelas_preco_id', ['options' => $tabelasPrecos, 'empty' => true]);
        echo $this->Form->input('status');
        echo $this->Form->input('valor_origem');
        echo $this->Form->input('valor_repasse');
        echo $this->Form->input('data_inicio', ['empty' => true]);
        echo $this->Form->input('data_fim', ['empty' => true]);
        echo $this->Form->input('reajuste_id');
        echo $this->Form->input('reated', ['empty' => true]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>