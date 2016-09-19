<?php
$this->Html->addCrumb(__('Index'), ['action' => 'index']);
$this->Html->addCrumb(__($this->request->params['action']), null);

$this->Html->addButton($this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> ' . __('Add'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]));
$this->Html->addButton($this->Html->link('<i class="fa fa-list" aria-hidden="true"></i> ' . __('Index'), ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]));
$this->Html->addButton($this->Form->postLink('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $estagio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estagio->id), 'escape' => false, 'class' => 'btn btn-danger']));
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __($sub_title) ?></h3>
    </div>
    <?= $this->Form->create($estagio) ?>
    <div class="panel-body">
        <?php
        echo $this->Form->input('codigo', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('peso', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('lesao_id', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        echo $this->Form->input('classificacao_id', ['div' => ['class' => 'col-xs-12 col-md-6']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>