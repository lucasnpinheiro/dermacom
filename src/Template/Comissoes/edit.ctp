<?php
$this->Html->addCrumb(__('Index'), ['action' => 'index']);
$this->Html->addCrumb(__($this->request->params['action']), null);

$this->Html->addButton($this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> ' . __('Add'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]));
$this->Html->addButton($this->Html->link('<i class="fa fa-list" aria-hidden="true"></i> ' . __('Index'), ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]));
$this->Html->addButton($this->Form->postLink('<i class="fa fa-trash-o"></i> ' . __('Delete'), ['action' => 'delete', $comisso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comisso->id), 'escape' => false, 'class' => 'btn btn-danger']));
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __($sub_title) ?></h3>
    </div>
    <?= $this->Form->create($comisso) ?>
    <div class="panel-body">
        <?php
        echo $this->Form->input('nome', ['div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->moeda('valor_maximo', ['value' => $comisso->valor_maximo, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->porcentagem('comissao', ['value' => $comisso->comissao, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->status('status', ['div' => ['class' => 'col-xs-12 col-md-3']]);
        echo $this->Form->input('comissoes_tipo_id', ['empty' => 'Selecione um tipo de comissão', 'options' => $comissoesTipos, 'div' => ['class' => 'col-xs-12 col-md-3']]);
        ?>
    </div>
    <div class="panel-footer text-right">
        <?= $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "submit"]) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
<div class="panel panel-bordered panel-info">
    <div class="panel-heading">
        <div class="panel-control">
            <?php
            echo $this->Form->button($this->Html->icon('plus-circle') . ' Adicionar Correções', ['escape' => false, 'type' => 'button']);
            echo $this->Form->myButtonExcluir(['action' => 'deleteAll']);
            ?>
        </div>
        <h3 class="panel-title">Correções</h3>
    </div>
    <div class="panel-body">

        <div class="bootstrap-table">
            <div class="fixed-table-container" style="padding-bottom: 0px;">
                <div class="fixed-table-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Form->myCheckBox(null) ?></th>
                                <th><?= $this->Paginator->sort('ano') ?></th>
                                <th><?= $this->Paginator->sort('mes') ?></th>
                                <th><?= $this->Paginator->sort('percentual') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($comisso->comissoes_correcoes as $comissoesCorreco): ?>
                                <tr class="dbClick" href="<?php echo \Cake\Routing\Router::url(['action' => 'edit', $comissoesCorreco->id], true); ?>">
                                    <th><?= $this->Form->myCheckBoxOne($comissoesCorreco->id) ?></th>
                                    <td><?= h($comissoesCorreco->ano) ?></td>
                                    <td><?= h($comissoesCorreco->mes) ?></td>
                                    <td><?= $this->Number->toPercentage($comissoesCorreco->percentual) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>