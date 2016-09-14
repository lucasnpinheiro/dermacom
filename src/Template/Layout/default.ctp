<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dermacom - <?= $this->fetch('title') ?></title>

        <?= $this->fetch('meta') ?>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <?php
        echo $this->Html->css('/componentes/bower_components/bootstrap/dist/css/bootstrap.min.css');
        echo $this->Html->css('/componentes/bower_components/components-font-awesome/css/font-awesome.css');
        echo $this->Html->css('/css/nifty.min.css');
        echo $this->Html->css('/css/admin.css');
        ?>
        <?= $this->fetch('css') ?>
    </head>

    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect aside-float aside-bright mainnav-lg navbar-fixed footer-fixed">

            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">

                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="<?= Cake\Routing\Router::url('/', true); ?>" class="navbar-brand">
                            <img src="img/logo.png" alt="DermaCom" class="brand-icon">
                            <div class="brand-title">
                                <span class="brand-text">DermaCom</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->


                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">

                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="pages-blank.html#">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->



                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="pages-blank.html#" data-toggle="dropdown" class="dropdown-toggle">
                                    <i class="fa fa-bell" aria-hidden="true"></i>
                                    <span class="badge badge-header badge-danger"></span>
                                </a>

                                <!--Notification dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md">
                                    <div class="pad-all bord-btm">
                                        <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">

                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="pages-blank.html#">
                                                        <div class="clearfix">
                                                            <p class="pull-left">Database Repair</p>
                                                            <p class="pull-right">70%</p>
                                                        </div>
                                                        <div class="progress progress-sm">
                                                            <div style="width: 70%;" class="progress-bar">
                                                                <span class="sr-only">70% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="pages-blank.html#">
                                                        <div class="clearfix">
                                                            <p class="pull-left">Upgrade Progress</p>
                                                            <p class="pull-right">10%</p>
                                                        </div>
                                                        <div class="progress progress-sm">
                                                            <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                                                <span class="sr-only">10% Complete</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li>
                                                    <a class="media" href="pages-blank.html#">
                                                        <span class="badge badge-success pull-right">90%</span>
                                                        <div class="media-left">
                                                            <i class="demo-pli-data-settings icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">HDD is full</div>
                                                            <small class="text-muted">50 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li>
                                                    <a class="media" href="pages-blank.html#">
                                                        <div class="media-left">
                                                            <i class="demo-pli-file-edit icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Write a news article</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li>
                                                    <a class="media" href="pages-blank.html#">
                                                        <span class="label label-danger pull-right">New</span>
                                                        <div class="media-left">
                                                            <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Comment Sorting</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li>
                                                    <a class="media" href="pages-blank.html#">
                                                        <div class="media-left">
                                                            <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New User Registered</div>
                                                            <small class="text-muted">4 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li class="bg-gray">
                                                    <a class="media" href="pages-blank.html#">
                                                        <div class="media-left">
                                                            <img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/9.png">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Lucy sent you a message</div>
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>

                                                <!-- Dropdown list-->
                                                <li class="bg-gray">
                                                    <a class="media" href="pages-blank.html#">
                                                        <div class="media-left">
                                                            <img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/3.png">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">40 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="pages-blank.html#" class="btn-link text-dark box-block">
                                            <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->

                        </ul>
                        <ul class="nav navbar-top-links pull-right">

                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="pages-blank.html#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right">
                                        <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                        <i class="demo-pli-male ic-user"></i>
                                    </span>
                                    <div class="username hidden-xs"><?= $this->request->session()->read('Auth.User.nome') ?></div>
                                </a>


                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="fa fa-user-secret" aria-hidden="true"></i> Perfil
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="fa fa-cogs" aria-hidden="true"></i> Configurações
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i> Ajuda
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown footer -->
                                    <div class="pad-all text-right">
                                        <a href="<?= Cake\Routing\Router::url(['Controller' => 'Usuarios', 'action' => 'logout'], true) ?>" class="btn btn-primary">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Sair
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->

                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->

            <div class="boxed">

                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow"><?= $title ?></h1>

                        <div class="searchbox text-right">
                            <?= $this->Html->getButton(); ?>
                        </div>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <?php
                    echo $this->Html->getCrumbList(
                            [
                        'firstClass' => false,
                        'lastClass' => 'active'
                            ], [
                        'url' => '/admin',
                        'text' => 'Inicio'
                            ]
                    );
                    ?>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->




                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">

                        <?= $this->Flash->render() ?>
                        <div class="row">
                            <?= $this->fetch('content') ?>    
                        </div>

                    </div>
                    <!--===================================================-->
                    <!--End page content-->


                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->


                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <div id="mainnav">

                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">

                                    <ul id="mainnav-menu" class="list-group">

                                        <!--Category name-->
                                        <li class="list-header">Navigation</li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="index.html">
                                                <i class="demo-psi-home"></i>
                                                <span class="menu-title">
                                                    <strong>Dashboard</strong>
                                                </span>
                                            </a>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-split-vertical-2"></i>
                                                <span class="menu-title">
                                                    <strong>Layouts</strong>
                                                </span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
                                                <li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
                                                <li><a href="layouts-offcanvas-slide-in-navigation.html">Slide-in Navigation</a></li>
                                                <li><a href="layouts-offcanvas-revealing-navigation.html">Revealing Navigation</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="layouts-aside-right-side.html">Aside on the right side</a></li>
                                                <li><a href="layouts-aside-left-side.html">Aside on the left side</a></li>
                                                <li><a href="layouts-aside-dark-theme.html">Dark version of aside</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="layouts-fixed-navbar.html">Fixed Navbar</a></li>
                                                <li><a href="layouts-fixed-footer.html">Fixed Footer</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="widgets.html">
                                                <i class="demo-psi-gear-2"></i>
                                                <span class="menu-title">
                                                    <strong>Widgets</strong>
                                                    <span class="pull-right badge badge-warning">24</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="list-divider"></li>

                                        <!--Category name-->
                                        <li class="list-header">Components</li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-boot-2"></i>
                                                <span class="menu-title">UI Elements</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="ui-buttons.html">Buttons</a></li>
                                                <li><a href="ui-panels.html">Panels</a></li>
                                                <li><a href="ui-modals.html">Modals</a></li>
                                                <li><a href="ui-progress-bars.html">Progress bars</a></li>
                                                <li><a href="ui-components.html">Components</a></li>
                                                <li><a href="ui-typography.html">Typography</a></li>
                                                <li><a href="ui-list-group.html">List Group</a></li>
                                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                                <li><a href="ui-alerts-tooltips.html">Alerts &amp; Tooltips</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-pen-5"></i>
                                                <span class="menu-title">Forms</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="forms-general.html">General</a></li>
                                                <li><a href="forms-components.html">Advanced Components</a></li>
                                                <li><a href="forms-validation.html">Validation</a></li>
                                                <li><a href="forms-wizard.html">Wizard</a></li>
                                                <li><a href="forms-file-upload.html">File Upload</a></li>
                                                <li><a href="forms-text-editor.html">Text Editor</a></li>
                                                <li><a href="forms-markdown.html">Markdown</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-receipt-4"></i>
                                                <span class="menu-title">Tables</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="tables-static.html">Static Tables</a></li>
                                                <li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
                                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                                <li><a href="tables-footable.html">Foo Tables</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="charts.html">
                                                <i class="demo-psi-bar-chart"></i>
                                                <span class="menu-title">Charts</span>
                                            </a>
                                        </li>

                                        <li class="list-divider"></li>

                                        <!--Category name-->
                                        <li class="list-header">More</li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-repair"></i>
                                                <span class="menu-title">Miscellaneous</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="misc-timeline.html">Timeline</a></li>
                                                <li><a href="misc-calendar.html">Calendar</a></li>
                                                <li><a href="misc-maps.html">Google Maps</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-mail"></i>
                                                <span class="menu-title">Email</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="mailbox.html">Inbox</a></li>
                                                <li><a href="mailbox-message.html">View Message</a></li>
                                                <li><a href="mailbox-compose.html">Compose Message</a></li>
                                                <li><a href="mailbox-templates.html">Email Templates<span class="label label-info pull-right">New</span></a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li class="active-sub">
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-file-html"></i>
                                                <span class="menu-title">Pages</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse in">
                                                <li class="active-link"><a href="pages-blank.html">Blank Page</a></li>
                                                <li><a href="pages-profile.html">Profile</a></li>
                                                <li><a href="pages-search-results.html">Search Results</a></li>
                                                <li><a href="pages-faq.html">FAQ</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="pages-404.html">404 Error</a></li>
                                                <li><a href="pages-500.html">500 Error</a></li>
                                                <li class="list-divider"></li>
                                                <li><a href="pages-login.html">Login</a></li>
                                                <li><a href="pages-register.html">Register</a></li>
                                                <li><a href="pages-password-reminder.html">Password Reminder</a></li>
                                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>

                                            </ul>
                                        </li>


                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-tactic"></i>
                                                <span class="menu-title">Menu Level</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="pages-blank.html#">Second Level Item</a></li>
                                                <li><a href="pages-blank.html#">Second Level Item</a></li>
                                                <li><a href="pages-blank.html#">Second Level Item</a></li>
                                                <li class="list-divider"></li>
                                                <li>
                                                    <a href="pages-blank.html#">Third Level<i class="arrow"></i></a>

                                                    <!--Submenu-->
                                                    <ul class="collapse">
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="pages-blank.html#">Third Level<i class="arrow"></i></a>

                                                    <!--Submenu-->
                                                    <ul class="collapse">
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li class="list-divider"></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                        <li><a href="pages-blank.html#">Third Level Item</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>


                                        <li class="list-divider"></li>

                                        <!--Category name-->
                                        <li class="list-header">Extras</li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-happy"></i>
                                                <span class="menu-title">Icons Pack</span>
                                                <i class="arrow"></i>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                                <li><a href="icons-themify.html">Themify</a></li>
                                                <li><a href="icons-font-awesome.html">Font Awesome</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="pages-blank.html#">
                                                <i class="demo-psi-medal-2"></i>
                                                <span class="menu-title">
                                                    PREMIUM ICONS
                                                    <span class="label label-danger pull-right">BEST</span>
                                                </span>
                                            </a>

                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="premium-line-icons.html">Line Icons Pack</a></li>
                                                <li><a href="premium-solid-icons.html">Solid Icons Pack</a></li>

                                            </ul>
                                        </li>

                                        <!--Menu list item-->
                                        <li>
                                            <a href="helper-classes.html">
                                                <i class="demo-psi-inbox-full"></i>
                                                <span class="menu-title">Helper Classes</span>
                                            </a>
                                        </li>                                </ul>


                                    <!--Widget-->
                                    <!--================================-->
                                    <div class="mainnav-widget">

                                        <!-- Show the button on collapsed navigation -->
                                        <div class="show-small">
                                            <a href="pages-blank.html#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                                <i class="demo-pli-monitor-2"></i>
                                            </a>
                                        </div>

                                        <!-- Hide the content on collapsed navigation -->
                                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                            <ul class="list-group">
                                                <li class="list-header pad-no pad-ver">Server Status</li>
                                                <li class="mar-btm">
                                                    <span class="label label-primary pull-right">15%</span>
                                                    <p>CPU Usage</p>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                            <span class="sr-only">15%</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mar-btm">
                                                    <span class="label label-purple pull-right">75%</span>
                                                    <p>Bandwidth</p>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                            <span class="sr-only">75%</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="pad-ver"><a href="pages-blank.html#" class="btn btn-success btn-bock">View Details</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--================================-->
                                    <!--End widget-->

                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->

                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->

            </div>



            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">

                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    You have <a href="pages-blank.html#" class="text-bold text-main"><span class="label label-danger">3</span> pending action.</a>
                </div>



                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">
                    &nbsp;
                </div>



                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

                <p class="pad-lft">&#0169; 2016 DermaCom</p>



            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->


            <!-- SCROLL PAGE BUTTON -->
            <!--===================================================-->
            <button class="scroll-top btn">
                <i class="pci-chevron chevron-up"></i>
            </button>
            <!--===================================================-->



        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->

        <?php
        echo $this->Html->script('/componentes/bower_components/jquery/dist/jquery.min.js');
        echo $this->Html->script('/componentes/bower_components/bootstrap/dist/js/bootstrap.min.js');
        echo $this->Html->script('/js/nifty.min.js');
        ?>
        <?= $this->fetch('script') ?>

    </body>
</html>
