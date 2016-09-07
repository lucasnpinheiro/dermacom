<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $servicosClinica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $servicosClinica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Servicos Clinicas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="servicosClinicas form large-9 medium-8 columns content">
    <?= $this->Form->create($servicosClinica) ?>
    <fieldset>
        <legend><?= __('Edit Servicos Clinica') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
