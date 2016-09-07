<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $comisso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $comisso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Comissoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comissoes form large-9 medium-8 columns content">
    <?= $this->Form->create($comisso) ?>
    <fieldset>
        <legend><?= __('Edit Comisso') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('valor_maximo');
            echo $this->Form->input('comissao');
            echo $this->Form->input('status');
            echo $this->Form->input('crated', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
