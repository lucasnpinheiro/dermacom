<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Classificacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="classificacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($classificaco) ?>
    <fieldset>
        <legend><?= __('Add Classificaco') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('lesao_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
