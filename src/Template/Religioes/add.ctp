<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Religioes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="religioes form large-9 medium-8 columns content">
    <?= $this->Form->create($religio) ?>
    <fieldset>
        <legend><?= __('Add Religio') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
