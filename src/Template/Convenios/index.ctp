<?php
$this->Html->addCrumb(__('Index'), null);

$this->Html->addButton($this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> ' . __('Add'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]));
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
                <div class="bars pull-left">
                    <?php
                    echo $this->Form->input('nome', ['label' => false, 'placeholder' => __('Nome')]);
                    echo $this->Form->input('razao_social', ['label' => false, 'placeholder' => __('Razão Social')]);
                    echo $this->Form->input('cidade', ['label' => false, 'placeholder' => __('Cidade')]);
                    echo $this->Form->status('status', ['label' => false, 'placeholder' => __('Status')]);
                    ?>
                </div>
                <div class="pull-right search">
                    <?php
                    echo $this->Form->button($this->Html->icon('search') . ' Consultar', ['escape' => false, 'type' => 'submit']);
                    echo $this->Form->myButtonExcluir(['action' => 'deleteAll']);
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
                                <th><?= $this->Form->myCheckBox(null) ?></th>
                                <th><?= $this->Paginator->sort('nome') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('razao_social') ?></th>
                                <th><?= $this->Paginator->sort('cidade') ?></th>
                                <th><?= $this->Paginator->sort('estado') ?></th>
                                <th><?= $this->Paginator->sort('cnpj') ?></th>
                                <th><?= $this->Paginator->sort('inscricao') ?></th>
                                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($convenios as $convenio): ?>
                                <tr class="dbClick" href="<?php echo \Cake\Routing\Router::url(['action' => 'edit', $convenio->id], true); ?>">
                                    <td><?= $this->Form->myCheckBoxOne($convenio->id) ?></td>
                                    <td><?= h($convenio->nome) ?></td>
                                    <td><?= $this->Number->status($convenio->status) ?></td>
                                    <td><?= h($convenio->razao_social) ?></td>
                                    <td><?= h($convenio->cidade) ?></td>
                                    <td><?= h($convenio->estado) ?></td>
                                    <td><?= h($convenio->cnpj_mascara) ?></td>
                                    <td><?= h($convenio->inscricao_estadual_mascara) ?></td>
                                    <td><?= h($convenio->centro_custo) ?></td>
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