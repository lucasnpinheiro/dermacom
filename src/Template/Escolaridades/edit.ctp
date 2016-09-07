<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $escolaridade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $escolaridade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Escolaridades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="escolaridades form large-9 medium-8 columns content">
    <?= $this->Form->create($escolaridade) ?>
    <fieldset>
        <legend><?= __('Edit Escolaridade') ?></legend>
        <?php
            echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
