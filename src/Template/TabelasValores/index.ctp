<?php
$this->Html->addCrumb(__('Index'), null);

$this->Html->addButton($this->Html->link('<i class="fa fa-plus-circle" aria-hidden="true"></i> ' . __('Add'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]));
$this->Html->addButton($this->Html->link('<i class="fa fa-list" aria-hidden="true"></i> ' . __('Index'), ['action' => 'index'], ['class' => 'btn btn-success', 'escape' => false]));
?>
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title"><?= __('Lista de Tabelas Valores Históricos') ?></h3>
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
                                <th><?= $this->Paginator->sort('tabelas_preco_id') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('valor_origem') ?></th>
                                <th><?= $this->Paginator->sort('valor_repasse') ?></th>
                                <th><?= $this->Paginator->sort('data_inicio') ?></th>
                                <th><?= $this->Paginator->sort('data_fim') ?></th>
                                <th><?= $this->Paginator->sort('reajuste_id') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions text-right"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tabelasValores as $tabelasValore): ?>
                                <tr>
                                    <td><?= $tabelasValore->has('tabelas_preco') ? $this->Html->link($tabelasValore->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'edit', $tabelasValore->tabelas_preco->id]) : '' ?></td>
                                    <td><?= $this->Number->format($tabelasValore->status) ?></td>
                                    <td><?= $this->Number->format($tabelasValore->valor_origem) ?></td>
                                    <td><?= $this->Number->format($tabelasValore->valor_repasse) ?></td>
                                    <td><?= h($tabelasValore->data_inicio) ?></td>
                                    <td><?= h($tabelasValore->data_fim) ?></td>
                                    <td><?= $this->Number->format($tabelasValore->reajuste_id) ?></td>
                                    <td><?= h($tabelasValore->created) ?></td>
                                    <td><?= h($tabelasValore->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(null, ['action' => 'edit', $tabelasValore->id], ['title' => __('Edit'), 'class' => 'btn btn-primary btn-sm btn-rounded fa fa-pencil']) ?>
                                        <?= $this->Form->postLink(null, ['action' => 'delete', $tabelasValore->id], ['title' => __('Delete'), 'class' => 'btn btn-danger btn-sm btn-rounded fa fa-eraser', 'confirm' => __('Are you sure you want to delete # {0}?', $tabelasValore->id)]) ?>
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