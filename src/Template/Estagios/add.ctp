<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estagios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="estagios form large-9 medium-8 columns content">
    <?= $this->Form->create($estagio) ?>
    <fieldset>
        <legend><?= __('Add Estagio') ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('nome');
            echo $this->Form->input('peso');
            echo $this->Form->input('lesao_id');
            echo $this->Form->input('classificacao_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
