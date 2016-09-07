<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Profissoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profissoes form large-9 medium-8 columns content">
    <?= $this->Form->create($profisso) ?>
    <fieldset>
        <legend><?= __('Add Profisso') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
