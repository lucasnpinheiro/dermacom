<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profisso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profisso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profissoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profissoes form large-9 medium-8 columns content">
    <?= $this->Form->create($profisso) ?>
    <fieldset>
        <legend><?= __('Edit Profisso') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
