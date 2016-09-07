<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estadosCivi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estadosCivi->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estados Civis'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estadosCivis form large-9 medium-8 columns content">
    <?= $this->Form->create($estadosCivi) ?>
    <fieldset>
        <legend><?= __('Edit Estados Civi') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
