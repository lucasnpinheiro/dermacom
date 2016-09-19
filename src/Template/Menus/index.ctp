<?php
$this->Html->addCrumb(__('Index'), null);

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
                    echo $this->Form->input('titulo', ['label' => false, 'placeholder' => __('Titulo')]);
                    echo $this->Form->status('status', ['label' => false, 'placeholder' => __('Status')]);
                    echo $this->Form->simNao('item_menu', ['label' => false, 'placeholder' => __('Item de Menu')]);
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
                                <th><?= $this->Paginator->sort('titulo') ?></th>
                                <th><?= $this->Paginator->sort('controller') ?></th>
                                <th><?= $this->Paginator->sort('action') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('item_menu') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th class="actions text-right"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menus as $menu): ?>
                                <tr>
                                    <td><?= h($menu->titulo) ?></td>
                                    <td><?= h($menu->controller) ?></td>
                                    <td><?= h($menu->action) ?></td>
                                    <td><?= $this->Number->status($menu->status) ?></td>
                                    <td><?= $this->Number->simNao($menu->item_menu) ?></td>
                                    <td><?= h($menu->created) ?></td>
                                    <td class="actions text-right">
                                        <?= $this->Html->link(null, ['action' => 'edit', $menu->id], ['title' => __('Edit'), 'class' => 'btn btn-primary btn-sm btn-rounded fa fa-pencil']) ?>
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