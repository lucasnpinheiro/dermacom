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
                                <th><?= $this->Paginator->sort('sexo_id') ?></th>
                                <th><?= $this->Paginator->sort('foto') ?></th>
                                <th><?= $this->Paginator->sort('casrtao_sus') ?></th>
                                <th><?= $this->Paginator->sort('estados_civil_id') ?></th>
                                <th><?= $this->Paginator->sort('escolaridade_id') ?></th>
                                <th><?= $this->Paginator->sort('profissao_id') ?></th>
                                <th><?= $this->Paginator->sort('naturalidade') ?></th>
                                <th><?= $this->Paginator->sort('nacionalidade_id') ?></th>
                                <th><?= $this->Paginator->sort('religiao_id') ?></th>
                                <th><?= $this->Paginator->sort('cor_id') ?></th>
                                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions text-right"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pacientes as $paciente): ?>
                                <tr>
                                    <td><?= h($paciente->nome) ?></td>
                                    <td><?= $this->Number->format($paciente->status) ?></td>
                                    <td><?= h($paciente->cep) ?></td>
                                    <td><?= h($paciente->endereco) ?></td>
                                    <td><?= h($paciente->numero) ?></td>
                                    <td><?= h($paciente->complemento) ?></td>
                                    <td><?= h($paciente->bairro) ?></td>
                                    <td><?= h($paciente->cidade) ?></td>
                                    <td><?= h($paciente->estado) ?></td>
                                    <td><?= h($paciente->cpf) ?></td>
                                    <td><?= h($paciente->rg) ?></td>
                                    <td><?= h($paciente->data_nascimento) ?></td>
                                    <td><?= $paciente->has('sexo') ? $this->Html->link($paciente->sexo->id, ['controller' => 'Sexos', 'action' => 'edit', $paciente->sexo->id]) : '' ?></td>
                                    <td><?= h($paciente->foto) ?></td>
                                    <td><?= h($paciente->casrtao_sus) ?></td>
                                    <td><?= $this->Number->format($paciente->estados_civil_id) ?></td>
                                    <td><?= $paciente->has('escolaridade') ? $this->Html->link($paciente->escolaridade->id, ['controller' => 'Escolaridades', 'action' => 'edit', $paciente->escolaridade->id]) : '' ?></td>
                                    <td><?= $this->Number->format($paciente->profissao_id) ?></td>
                                    <td><?= h($paciente->naturalidade) ?></td>
                                    <td><?= $paciente->has('nacionalidade') ? $this->Html->link($paciente->nacionalidade->id, ['controller' => 'Nacionalidades', 'action' => 'edit', $paciente->nacionalidade->id]) : '' ?></td>
                                    <td><?= $this->Number->format($paciente->religiao_id) ?></td>
                                    <td><?= $this->Number->format($paciente->cor_id) ?></td>
                                    <td><?= h($paciente->centro_custo) ?></td>
                                    <td><?= h($paciente->created) ?></td>
                                    <td><?= h($paciente->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(null, ['action' => 'edit', $paciente->id], ['title' => __('Edit'), 'class' => 'btn btn-primary btn-sm btn-rounded fa fa-pencil']) ?>
                                        <?= $this->Form->postLink(null, ['action' => 'delete', $paciente->id], ['title' => __('Delete'), 'class' => 'btn btn-danger btn-sm btn-rounded fa fa-eraser', 'confirm' => __('Are you sure you want to delete # {0}?', $paciente->id)]) ?>
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