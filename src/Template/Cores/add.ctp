<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cores form large-9 medium-8 columns content">
    <?= $this->Form->create($core) ?>
    <fieldset>
        <legend><?= __('Add Core') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
