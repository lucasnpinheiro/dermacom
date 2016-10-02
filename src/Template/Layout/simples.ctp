<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dermacom - <?= $this->fetch('title') ?></title>

        <?= $this->fetch('meta') ?>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <?php
        echo $this->Html->css('/bower_components/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('/bower_components/bulma/css/bulma.css');
        ?>
        <style>
            html, body{
                background: #fff;
            }
            body, 
            .menu,
            .sub-menu {
                margin: 0;
                padding: 0;
                z-index: 99999;
            }
            .clearfix:after{
                content: '.';
                display: block;
                clear: both;
                height: 0;
                line-height: 0;
                font-size: 0;
                visibility: hidden;
                overflow: hidden;
            }
            .menu,
            .sub-menu {
                list-style: none;
                background: #000;
            }
            .sub-menu {
                background: #444;
            }
            .menu a {
                text-decoration: none;
                display: block;
                padding: 10px;
                color: #fff;
                font-family: sans-serif;
                font-size: 14px;
                text-transform: uppercase;
                font-weight: 700;
            }
            .menu li {
                position: relative;
            }
            .menu > li {
                float: left;
            }
            .menu > li:hover {
                background: #444;
            }
            .menu li:hover > .sub-menu {
                display: block;
            }
            .sub-menu {
                display: none;
                position: absolute;
                min-width: 150px;
            }
            .sub-menu li:hover {
                background: #555;
            }
            .sub-menu .sub-menu {
                top: 0;
                left: 100%;
            }
        </style>
        <?= $this->fetch('css') ?>
        <script>
            var router = {
                url: "<?php echo \Cake\Routing\Router::url('/', true); ?>",
                params: <?php echo json_encode($this->request->params); ?>
            };
        </script>
    </head>

    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>

        <div style="position: fixed; width: 100%; z-index: 99999;">
            <div class="menu-container">
                <ul class="menu clearfix">
                    <!--li><a href="#">Item</a>
                        <ul class="sub-menu clearfix">
                            <li><a href="#">Sub</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Sub Sub</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Sub Sub</a></li>
                                            <li><a href="#">Sub Sub</a></li>
                                            <li><a href="#">Sub Sub</a></li>
                                            <li><a href="#">Sub Sub</a></li>
                                            <li><a href="#">Sub Sub</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Sub Sub</a></li>
                                    <li><a href="#">Sub Sub</a></li>
                                    <li><a href="#">Sub Sub</a></li>
                                    <li><a href="#">Sub Sub</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Sub</a></li>
                            <li><a href="#">Sub</a></li>
                            <li><a href="#">Sub</a></li>
                            <li><a href="#">Sub</a></li>
                            <li><a href="#">Sub</a></li>
                        </ul>
                    </li -->
                    <li><a href="<?= Cake\Routing\Router::url(['controller' => 'Lesoes', 'action' => 'index']) ?>">Lesões</a></li>
                </ul>
            </div>

        </div>

        <div id="app" >
            <div id="menu-acoes-topo" style="padding: 35px 0px 0px 0px; position: fixed; width: 100%; z-index: 99998;">
                <div class="columns" style="text-align: center; background: #ccc; padding: 0px; margin: 5px 0px;">
                    <button class="column" style="padding: 0; margin: 0;" v-on:click="novo">Novo</button>
                    <button class="column" style="padding: 0; margin: 0;" id="menu-acoes-topo-editar">Editar</button>
                    <button class="column" style="padding: 0; margin: 0;" v-on:click="gravar">Gravar</button>
                    <button class="column" style="padding: 0; margin: 0;" id="menu-acoes-topo-wxcluir">Excluir</button>
                    <button class="column" style="padding: 0; margin: 0;" id="menu-acoes-topo-consultar">Consultar</button>
                    <button class="column" style="padding: 0; margin: 0;" id="menu-acoes-topo-imprimir">Imprimir</button>
                </div>
            </div>

            <div style="padding: 70px 5px 0px 5px;">
                <?= $this->fetch('content') ?>
            </div>
        </div>

        <?= $this->Html->script('/bower_components/vue/dist/vue.min.js'); ?>
        <?= $this->Html->script('/bower_components/vue-resource/dist/vue-resource.min.js'); ?>

        <?= $this->fetch('script') ?>

    </body>
</html>
