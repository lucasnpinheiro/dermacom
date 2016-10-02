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
            <?= $this->element($this->request->params['controller'] . '/' . $this->request->params['action']) ?>
            <div style="padding: 70px 5px 0px 5px;">
                <?= $this->fetch('content') ?>
            </div>
        </div>

        <?= $this->Html->script('/bower_components/vue/dist/vue.min.js'); ?>
        <?= $this->Html->script('/bower_components/vue-resource/dist/vue-resource.min.js'); ?>

        <?= $this->fetch('script') ?>

    </body>
</html>
