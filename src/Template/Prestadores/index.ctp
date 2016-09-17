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
                                <th><?= $this->Paginator->sort('razao_social') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('especialidade_id') ?></th>
                                <th><?= $this->Paginator->sort('cep') ?></th>
                                <th><?= $this->Paginator->sort('endereco') ?></th>
                                <th><?= $this->Paginator->sort('numero') ?></th>
                                <th><?= $this->Paginator->sort('complememnto') ?></th>
                                <th><?= $this->Paginator->sort('bairro') ?></th>
                                <th><?= $this->Paginator->sort('cidade') ?></th>
                                <th><?= $this->Paginator->sort('estado') ?></th>
                                <th><?= $this->Paginator->sort('cnpj') ?></th>
                                <th><?= $this->Paginator->sort('inscricao') ?></th>
                                <th><?= $this->Paginator->sort('cpf') ?></th>
                                <th><?= $this->Paginator->sort('rg') ?></th>
                                <th><?= $this->Paginator->sort('data_nascimento') ?></th>
                                <th><?= $this->Paginator->sort('banco') ?></th>
                                <th><?= $this->Paginator->sort('agencia') ?></th>
                                <th><?= $this->Paginator->sort('conta') ?></th>
                                <th><?= $this->Paginator->sort('tabelas_preco_id') ?></th>
                                <th><?= $this->Paginator->sort('conselho_id') ?></th>
                                <th><?= $this->Paginator->sort('numero_conselho') ?></th>
                                <th><?= $this->Paginator->sort('estado_conselho') ?></th>
                                <th><?= $this->Paginator->sort('centro_custo') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions text-right"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prestadores as $prestadore): ?>
                                <tr>
                                    <td><?= h($prestadore->nome) ?></td>
                                    <td><?= h($prestadore->razao_social) ?></td>
                                    <td><?= $this->Number->format($prestadore->status) ?></td>
                                    <td><?= $prestadore->has('especialidade') ? $this->Html->link($prestadore->especialidade->id, ['controller' => 'Especialidades', 'action' => 'edit', $prestadore->especialidade->id]) : '' ?></td>
                                    <td><?= h($prestadore->cep) ?></td>
                                    <td><?= h($prestadore->endereco) ?></td>
                                    <td><?= h($prestadore->numero) ?></td>
                                    <td><?= h($prestadore->complememnto) ?></td>
                                    <td><?= h($prestadore->bairro) ?></td>
                                    <td><?= h($prestadore->cidade) ?></td>
                                    <td><?= h($prestadore->estado) ?></td>
                                    <td><?= h($prestadore->cnpj) ?></td>
                                    <td><?= h($prestadore->inscricao) ?></td>
                                    <td><?= h($prestadore->cpf) ?></td>
                                    <td><?= h($prestadore->rg) ?></td>
                                    <td><?= h($prestadore->data_nascimento) ?></td>
                                    <td><?= h($prestadore->banco) ?></td>
                                    <td><?= h($prestadore->agencia) ?></td>
                                    <td><?= h($prestadore->conta) ?></td>
                                    <td><?= $prestadore->has('tabelas_preco') ? $this->Html->link($prestadore->tabelas_preco->id, ['controller' => 'TabelasPrecos', 'action' => 'edit', $prestadore->tabelas_preco->id]) : '' ?></td>
                                    <td><?= $prestadore->has('conselho') ? $this->Html->link($prestadore->conselho->id, ['controller' => 'Conselhos', 'action' => 'edit', $prestadore->conselho->id]) : '' ?></td>
                                    <td><?= h($prestadore->numero_conselho) ?></td>
                                    <td><?= h($prestadore->estado_conselho) ?></td>
                                    <td><?= h($prestadore->centro_custo) ?></td>
                                    <td><?= h($prestadore->created) ?></td>
                                    <td><?= h($prestadore->modified) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(null, ['action' => 'edit', $prestadore->id], ['title' => __('Edit'), 'class' => 'btn btn-primary btn-sm btn-rounded fa fa-pencil']) ?>
                                        <?= $this->Form->postLink(null, ['action' => 'delete', $prestadore->id], ['title' => __('Delete'), 'class' => 'btn btn-danger btn-sm btn-rounded fa fa-eraser', 'confirm' => __('Are you sure you want to delete # {0}?', $prestadore->id)]) ?>
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