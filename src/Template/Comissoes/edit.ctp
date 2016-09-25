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
            echo $this->Form->button($this->Html->icon('plus-circle') . ' Adicionar Correções', ['onclick' => 'cake.comissoes.openModalNew()', 'class' => 'btn btn-custom btn-modal', 'escape' => false, 'type' => 'button']);
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
                        <tbody id="lista-comissoes-correcoes">
                            <?php foreach ($comisso->comissoes_correcoes as $comissoesCorreco): ?>
                                <tr ondblclick="cake.comissoes.openModal('<?= $comissoesCorreco->id; ?>')">
                                    <td><?= $this->Form->myCheckBoxOne($comissoesCorreco->id) ?></td>
                                    <td><?= h($comissoesCorreco->ano) ?></td>
                                    <td><?= $this->Number->mes($comissoesCorreco->mes) ?></td>
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
<button type="button" class="btn btn-custom btn-modal" data-toggle="modal" data-target="#MyModal2">Show Modal</button>
<?php
$content = $this->Form->input('id', ['type' => 'hidden', 'value' => '']);
$content .= $this->Form->input('comissao_id', ['type' => 'hidden', 'value' => $comisso->id]);
$content .= $this->Form->numero('ano', ['required' => true, 'div' => ['class' => 'col-xs-12 col-md-6']]);
$content .= $this->Form->mes('mes', ['required' => true, 'div' => ['class' => 'col-xs-12 col-md-6']]);
$content .= $this->Form->porcentagem('percentual', ['required' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);


echo $this->Modal->create(['id' => 'MyModal2']);
echo $this->Form->create($comissoesCorreco);
echo $this->Modal->header('Correções', ['close' => false]);
echo $this->Modal->body($content, ['class' => 'my-body-class']);
echo $this->Modal->footer([
    $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "button", 'onclick' => 'cake.comissoes.save()']),
    $this->Form->button(__('Close'), ['data-dismiss' => 'modal', 'type' => "button"])
]);
echo $this->Form->end();
echo $this->Modal->end();

$this->Html->script('/js/comissoes.js', ['block' => 'script']);
?>
