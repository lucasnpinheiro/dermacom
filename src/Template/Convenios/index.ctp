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
                    echo $this->Form->status('status', ['label' => false, 'placeholder' => __('Status')]);
                    ?>
                </div>
                <div class="pull-right search">
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
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('razao_social') ?></th>
                                <th><?= $this->Paginator->sort('cep') ?></th>
                                <th><?= $this->Paginator->sort('endereco') ?></th>
                                <th><?= $this->Paginator->sort('numero') ?></th>
                                <th><?= $this->Paginator->sort('complemento') ?></th>
                                <th><?= $this->Paginator->sort('bairro') ?></th>
                                <th><?= $this->Paginator->sort('cidade') ?></th>
                                <th><?= $this->Paginator->sort('estado') ?></th>
                                <th><?= $this->Paginator->sort('cnpj') ?></th>
                                <th><?= $this->Paginator->sort('inscricao') ?></th>
                                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions text-right"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($convenios as $convenio): ?>
                                <tr>
                                    <td><?= h($convenio->nome) ?></td>
                                    <td><?= $this->Number->status($convenio->status) ?></td>
                                    <td><?= h($convenio->razao_social) ?></td>
                                    <td><?= h($convenio->cep) ?></td>
                                    <td><?= h($convenio->endereco) ?></td>
                                    <td><?= h($convenio->numero) ?></td>
                                    <td><?= h($convenio->complemento) ?></td>
                                    <td><?= h($convenio->bairro) ?></td>
                                    <td><?= h($convenio->cidade) ?></td>
                                    <td><?= h($convenio->estado) ?></td>
                                    <td><?= h($convenio->cnpj) ?></td>
                                    <td><?= h($convenio->inscricao) ?></td>
                                    <td><?= h($convenio->centro_custo) ?></td>
                                    <td><?= h($convenio->created) ?></td>
                                    <td><?= h($convenio->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(null, ['action' => 'edit', $convenio->id], ['title' => __('Edit'), 'class' => 'btn btn-primary btn-sm btn-rounded fa fa-pencil']) ?>
                                        <?= $this->Form->postLink(null, ['action' => 'delete', $convenio->id], ['title' => __('Delete'), 'class' => 'btn btn-danger btn-sm btn-rounded fa fa-eraser', 'confirm' => __('Are you sure you want to delete # {0}?', $convenio->id)]) ?>
                                    </td>
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