<div class="cls-content-sm panel">
    <div class="panel-body">
        <?= $this->Flash->render() ?>
        <div class="mar-ver pad-btm">
            <h3 class="h4 mar-no">Area Administrativa</h3>
            <p class="text-muted">Entre com o seu usuário e senha</p>
        </div>
        <?php
        echo $this->Form->create(null);
        echo $this->Form->input('login', ['label' => false, 'placeholder' => 'Usuário', 'type' => 'text', 'autofocus' => true]);
        echo $this->Form->input('senha', ['label' => false, 'placeholder' => 'Senha', 'type' => 'password']);
        echo $this->Form->button('Entrar', ['class' => "btn btn-primary btn-lg btn-block", 'type' => "submit"]);
        echo $this->Form->end();
        ?>
    </div>
</div>