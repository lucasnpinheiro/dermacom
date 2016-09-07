<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $corporaisLeso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $corporaisLeso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Corporais Lesoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="corporaisLesoes form large-9 medium-8 columns content">
    <?= $this->Form->create($corporaisLeso) ?>
    <fieldset>
        <legend><?= __('Edit Corporais Leso') ?></legend>
        <?php
            echo $this->Form->input('lesao_id');
            echo $this->Form->input('corporal_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
