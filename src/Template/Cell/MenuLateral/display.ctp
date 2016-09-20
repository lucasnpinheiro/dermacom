<ul id="mainnav-menu" class="list-group">
    <?php
    foreach ($menus as $key => $value) {
        echo'<li>' . $this->Html->link($value->icon . ' <span class="menu-title"> <strong>' . __($value->titulo) . '</strong> </span> ', ['controller' => $value->controller, 'action' => $value->action], ['escape' => false]) . '</li>';
    }
    ?>
</ul>