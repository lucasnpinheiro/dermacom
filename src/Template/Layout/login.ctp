<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page | Nifty - Admin Template</title>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <?php
        echo $this->Html->css('/bower_components/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min.css');
        echo $this->Html->css('/css/nifty.min.css');
        ?>
        <?= $this->fetch('css') ?>


    </head>
    <body>
        <div id="container" class="cls-container">
            <div id="bg-overlay" class="bg-img" style="background-image: url(<?= Cake\Routing\Router::url('/img/Julho_1.jpg', true); ?>);"></div>
            <div class="cls-content" style="padding-top: 20vh;">
                
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <?php
        echo $this->Html->script('/bower_components/jquery/dist/jquery.min.js');
        echo $this->Html->script('/bower_components/bootstrap/dist/js/bootstrap.min.js');
        echo $this->Html->script('/js/nifty.min.js');
        ?>
        <?= $this->fetch('script') ?>
    </body>
</html>
