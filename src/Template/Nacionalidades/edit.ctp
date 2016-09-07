<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $nacionalidade->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $nacionalidade->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Nacionalidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pacientes'), ['controller' => 'Pacientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paciente'), ['controller' => 'Pacientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nacionalidades form large-9 medium-8 columns content">
    <?= $this->Form->create($nacionalidade) ?>
    <fieldset>
        <legend><?= __('Edit Nacionalidade') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('pais');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
