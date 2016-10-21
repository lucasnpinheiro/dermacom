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
        echo $this->Html->css('/css/geral.css');
        ?>
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

        <style>
            *, *:before, *:after
            {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            html, body
            {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
            }

            body
            {
                font-size: 12px;
            }

            .flexbox-parent
            {
                width: 100%;
                height: 100%;

                display: flex;
                flex-direction: column;

                justify-content: flex-start; /* align items in Main Axis */
                align-items: stretch; /* align items in Cross Axis */
                align-content: stretch; /* Extra space in Cross Axis */

            }

            .flexbox-item
            {
                padding: 0px;
            }
            .flexbox-item-grow
            {
                flex: 1; /* same as flex: 1 1 auto; */
            }


            .fill-area
            {
                display: flex;
                flex-direction: row;

                justify-content: flex-start; /* align items in Main Axis */
                align-items: stretch; /* align items in Cross Axis */
                align-content: stretch; /* Extra space in Cross Axis */

            }
            .fill-area-content
            {
                border: 1px solid #000000;
                padding: 5px 2%;

                /* Needed for when the area gets squished too far and there is content that can't be displayed */
                overflow: auto; 
            }
        </style>


        <div class="flexbox-parent" id="app">
            <div class="flexbox-item header">
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
                        <li><a href="<?= Cake\Routing\Router::url(['controller' => 'Pacientes', 'action' => 'index']) ?>">Pacientes</a></li>
                    </ul>
                </div>
            </div>

            <div class="flexbox-item footer">
                <div id="menu-acoes-topo" style="padding: 0px; width: 100%; z-index: 99998; border-bottom: 1px solid #000; background: #efefef;">
                    <div class="columns" style="margin-top: 2px;">
                        <?= $this->element($this->request->params['controller'] . '/index') ?>
                    </div>
                </div>
            </div>

            <div class="flexbox-item fill-area content flexbox-item-grow">
                <div class="fill-area-content flexbox-item-grow">
                    <?= $this->fetch('content') ?>
                </div>
            </div>


        </div>

        <?= $this->Html->script('/bower_components/lodash/dist/lodash.min.js'); ?>
        <?= $this->Html->script('/bower_components/vue/dist/vue.min.js'); ?>
        <?= $this->Html->script('/bower_components/vue-resource/dist/vue-resource.min.js'); ?>
        <?= $this->Html->script('/bower_components/moment/min/moment.min.js'); ?>

        <?= $this->fetch('script') ?>

    </body>
</html>
