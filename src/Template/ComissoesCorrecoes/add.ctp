<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Comissoes Correcoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="comissoesCorrecoes form large-9 medium-8 columns content">
    <?= $this->Form->create($comissoesCorreco) ?>
    <fieldset>
        <legend><?= __('Add Comissoes Correco') ?></legend>
        <?php
            echo $this->Form->input('comissao_id');
            echo $this->Form->input('ano');
            echo $this->Form->input('mes');
            echo $this->Form->input('percentual');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
