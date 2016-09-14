<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Custom Toolbar</h3>
    </div>
    <div class="panel-body">

        <div class="bootstrap-table">
            <div class="fixed-table-toolbar">
                <div class="bars pull-left">
                    <button id="demo-delete-row" class="btn btn-danger" disabled=""><i class="demo-pli-cross"></i> Delete</button>
                </div>
                <div class="pull-right search">
                    <input class="form-control" type="text" placeholder="Search">
                </div>
            </div>
            <div class="fixed-table-container" style="padding-bottom: 0px;">
                <div class="fixed-table-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?= $this->Paginator->sort('id') ?></th>
                                <th><?= $this->Paginator->sort('nome') ?></th>
                                <th><?= $this->Paginator->sort('login') ?></th>
                                <th><?= $this->Paginator->sort('status') ?></th>
                                <th><?= $this->Paginator->sort('created') ?></th>
                                <th><?= $this->Paginator->sort('modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario): ?>
                                <tr>
                                    <td><?= $this->Number->format($usuario->id) ?></td>
                                    <td><?= h($usuario->nome) ?></td>
                                    <td><?= h($usuario->login) ?></td>
                                    <td><?= $this->Number->format($usuario->status) ?></td>
                                    <td><?= h($usuario->created) ?></td>
                                    <td><?= h($usuario->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>