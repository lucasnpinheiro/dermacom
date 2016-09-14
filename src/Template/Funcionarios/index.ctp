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
                                <th><?= $this->Paginator->sort('nome') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('cep') ?></th>
                                <th><?= $this->Paginator->sort('endereco') ?></th>
                                <th><?= $this->Paginator->sort('numero') ?></th>
                                <th><?= $this->Paginator->sort('complemento') ?></th>
                                <th><?= $this->Paginator->sort('bairro') ?></th>
                                <th><?= $this->Paginator->sort('cidade') ?></th>
                                <th><?= $this->Paginator->sort('estado') ?></th>
                                <th><?= $this->Paginator->sort('cpf') ?></th>
                                <th><?= $this->Paginator->sort('rg') ?></th>
                                <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                                <th><?= $this->Paginator->sort('conselho_id') ?></th>
                                <th><?= $this->Paginator->sort('numero_conselho') ?></th>
                                <th><?= $this->Paginator->sort('estado_conselho') ?></th>
                                <th><?= $this->Paginator->sort('data_admissao') ?></th>
                                <th><?= $this->Paginator->sort('cargo_id') ?></th>
                                <th><?= $this->Paginator->sort('recebe_comissao') ?></th>
                                <th><?= $this->Paginator->sort('cargos_salario_id') ?></th>
                                <th><?= $this->Paginator->sort('comissao_id') ?></th>
                                <th><?= $this->Paginator->sort('banco') ?></th>
                                <th><?= $this->Paginator->sort('agencia') ?></th>
                                <th><?= $this->Paginator->sort('conta') ?></th>
                                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions text-right"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($funcionarios as $funcionario): ?>
                                <tr>
                                    <td><?= h($funcionario->nome) ?></td>
                                    <td><?= $this->Number->format($funcionario->status) ?></td>
                                    <td><?= h($funcionario->cep) ?></td>
                                    <td><?= h($funcionario->endereco) ?></td>
                                    <td><?= h($funcionario->numero) ?></td>
                                    <td><?= h($funcionario->complemento) ?></td>
                                    <td><?= h($funcionario->bairro) ?></td>
                                    <td><?= h($funcionario->cidade) ?></td>
                                    <td><?= h($funcionario->estado) ?></td>
                                    <td><?= h($funcionario->cpf) ?></td>
                                    <td><?= h($funcionario->rg) ?></td>
                                    <td><?= h($funcionario->data_nascimento) ?></td>
                                    <td><?= $funcionario->has('conselho') ? $this->Html->link($funcionario->conselho->id, ['controller' => 'Conselhos', 'action' => 'edit', $funcionario->conselho->id]) : '' ?></td>
                                    <td><?= h($funcionario->numero_conselho) ?></td>
                                    <td><?= h($funcionario->estado_conselho) ?></td>
                                    <td><?= h($funcionario->data_admissao) ?></td>
                                    <td><?= $this->Number->format($funcionario->cargo_id) ?></td>
                                    <td><?= $this->Number->format($funcionario->recebe_comissao) ?></td>
                                    <td><?= $this->Number->format($funcionario->cargos_salario_id) ?></td>
                                    <td><?= $this->Number->format($funcionario->comissao_id) ?></td>
                                    <td><?= h($funcionario->banco) ?></td>
                                    <td><?= h($funcionario->agencia) ?></td>
                                    <td><?= h($funcionario->conta) ?></td>
                                    <td><?= h($funcionario->centro_custo) ?></td>
                                    <td><?= h($funcionario->created) ?></td>
                                    <td><?= h($funcionario->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(null, ['action' => 'edit', $funcionario->id], ['title' => __('Edit'), 'class' => 'btn btn-primary btn-sm btn-rounded fa fa-pencil']) ?>
                                        <?= $this->Form->postLink(null, ['action' => 'delete', $funcionario->id], ['title' => __('Delete'), 'class' => 'btn btn-danger btn-sm btn-rounded fa fa-eraser', 'confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?>
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