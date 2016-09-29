<?php
$this->Html->addCrumb(__('Index'), null);

$this->Html->addButton('<a onclick="cake.lesoes.openModalNew()" class="btn btn-primary btn-modal">' . $this->Html->icon('plus-circle') . ' Adicionar Lesões </a>');
$this->Html->addButton($this->Html->link('<i class="fa fa-list" aria-hidden="true"></i> ' . __('Index'), ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]));
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __($sub_title) ?></h3>
    </div>
    <div class="panel-body">

        <div class="bootstrap-table">
            <div class="fixed-table-toolbar">
                <?php
                echo $this->Form->create(null, [
                    'inline' => true,
                    'label' => false
                ]);
                ?>
                <div class="bars pull-left col-xs-12 col-md-9">
                    <?php
                    echo $this->Form->input('nome', [ 'label' => false, 'placeholder' => __('Nome')]);
                    echo $this->Form->input('Classificacoes.nome', [ 'label' => false, 'placeholder' => __('Classificação')]);
                    echo $this->Form->input('Estagios.codigo', [ 'label' => false, 'placeholder' => __('Código')]);
                    echo $this->Form->input('Estagios.nome', [ 'label' => false, 'placeholder' => __('Estágio')]);
                    echo $this->Form->input('Estagios.peso', ['label' => false, 'placeholder' => __('Peso')]);
                    echo $this->Form->status('status', ['label' => false, 'placeholder' => __('Status')]);
                    ?>
                </div>
                <div class="pull-right  col-xs-12 col-md-3 search">
                    <?php
                    echo $this->Form->button($this->Html->icon('search') . ' Consultar', ['escape' => false, 'type' => 'submit']);
                    ?>
                </div>
                <?php
                echo $this->Form->end();
                ?>
            </div>
            <div class="fixed-table-container" style="padding-bottom: 0px;">
                <div class="fixed-table-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('nome') ?></th>
                                <th><?= $this->Paginator->sort('Classificacoes.nome', 'Classificação') ?></th>
                                <th><?= $this->Paginator->sort('Estagios.codigo', 'Código') ?></th>
                                <th><?= $this->Paginator->sort('Estagios.nome', 'Estágio') ?></th>
                                <th><?= $this->Paginator->sort('Estagios.peso', 'Peso') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lesoes as $leso): ?>
                                <tr ondblclick="cake.lesoes.openModal('<?= $leso->id; ?>', '<?= $leso->Classificacoes['id']; ?>', '<?= $leso->Estagios['id']; ?>')">
                                    <td><?= h($leso->nome) ?></td>
                                    <td><?= h($leso->Classificacoes['nome']) ?></td>
                                    <td><?= h($leso->Estagios['codigo']) ?></td>
                                    <td><?= h($leso->Estagios['nome']) ?></td>
                                    <td><?= h($leso->Estagios['peso']) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        <?= $this->element('Pagination/paginator') ?>
    </div>
</div>

<?php
$content = $this->Form->input('acao', ['type' => 'hidden', 'value' => '']);
$content .= $this->Form->input('id', ['type' => 'hidden', 'value' => '']);
$content .= $this->Form->input('classificacao_id', ['type' => 'hidden', 'value' => '']);
$content .= $this->Form->input('estagio_id', ['type' => 'hidden', 'value' => '']);
$content .= $this->Form->input('nome', ['label' => 'Lesão', 'required' => true, 'div' => ['class' => 'col-xs-12 col-md-6']]);
$content .= $this->Form->inputDataList('classificacao_nome', ['label' => 'Classificação', 'options' => $classificacoes, 'required' => true, 'div' => ['class' => 'col-xs-12 col-md-6']]);
$content .= $this->Form->input('estagio_nome', ['label' => 'Estágio', 'required' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
$content .= $this->Form->input('estagio_codigo', ['label' => 'Código', 'required' => true, 'div' => ['class' => 'col-xs-12 col-md-6']]);
$content .= $this->Form->input('estagio_peso', ['label' => 'Peso', 'required' => true, 'div' => ['class' => 'col-xs-12 col-md-6']]);
$content .= '<div class="clearfix"></div>';


echo $this->Modal->create(['id' => 'MyModal2']);
echo $this->Form->create($lesao, ['inline' => false, 'horizontal' => false, 'url' => ['action' => 'add']]);
echo $this->Modal->header('Cadastro de Analise da Lesão', ['close' => false]);
echo $this->Modal->body($content, ['class' => 'my-body-class']);
echo $this->Modal->footer([
    $this->Form->button(__('Submit'), ['class' => "btn btn-success", 'type' => "button", 'onclick' => 'cake.lesoes.save()']),
    $this->Form->button(__('Close'), ['data-dismiss' => 'modal', 'type' => "button"])
]);
echo $this->Form->end();
echo $this->Modal->end();

$this->Html->script('/js/bootbox.min.js', ['block' => 'script']);
$this->Html->script('/js/lesoes.js', ['block' => 'script']);
?>
