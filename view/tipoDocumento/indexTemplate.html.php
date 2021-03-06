<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php
use mvc\config\configClass as config ?>
<?php
use \mvc\request\requestClass as request ?>
<?php $nombre = tipoDocumentoTableClass::NOMBRE ?>
<?php $id = tipoDocumentoTableClass::ID ?>
<?php $created = tipoDocumentoTableClass::CREATED_AT ?>
<div class="fixed-left">
    <!-- Modal Start -->
    <!-- Modal Task Progress -->	
    <div class="md-modal md-3d-flip-vertical" id="task-progress">
        <div class="md-content">
            <h3><strong>Task Progress</strong> Information</h3>
            <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80&#37; Complete</span>
                    </div>
                </div>
                <p>POSTING SOME STUFF</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                        <span class="sr-only">65&#37; Complete</span>
                    </div>
                </div>
                <p>BACKUP DATA FROM SERVER</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                        <span class="sr-only">95&#37; Complete</span>
                    </div>
                </div>
                <p>RE-DESIGNING WEB APPLICATION</p>
                <div class="progress progress-xs for-modal">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                        <span class="sr-only">100&#37; Complete</span>
                    </div>
                </div>
                <p class="text-center">
                    <button class="btn btn-danger btn-sm md-close">Close</button>
                </p>
            </div>
        </div>
    </div>
    <!-- Modal logout -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h3><strong>Logout</strong> Confirmation</h3>
                        <p>Are you sure want to logout from this awesome system?</p>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No!</button>
                    <a  href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>" class="btn btn-success">Si! , Deseo Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal logout -->
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <div class="topbar-left">
                <div class="logo">
                    <h3><a  href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('admin', 'index') ?>"><img src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('logo/logo.jpg') ?>" width="45" height="31" style="border-radius: 10px;" alt="Logo_index" >  CULT EXCEL  |</a></h3>
                </div>
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-collapse2">
                        <ul class="nav navbar-nav hidden-xs">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                                <div class="dropdown-menu grid-dropdown">
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="notes-app" data-status="inactive"><i class="icon-edit"></i>Notas</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="todo-app" data-status="inactive"><i class="icon-check"></i>Todo List</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculadora</a>
                                        </div>
                                    </div>
                                    <div class="row stacked">
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="weather-widget" data-status="inactive"><i class="icon-cloud-3"></i>Weather</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="calendar-widget2" data-status="inactive"><i class="icon-calendar"></i>Calendario</a>
                                        </div>
                                        <div class="col-xs-4">
                                            <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i>Finanzas</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <form id="frmTraductor" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'traductor') ?>" method="POST">
                                <li class="language_bar">
                                    <select class="form-control select_imagen" data-style="btn-default" data-width="auto" name="language" onchange="$('#frmTraductor').submit()">
                                        <option class="es" <?php echo( config::getDefaultCulture() == 'es') ? 'selected' : '' ?> value="es"> Español (ES)</option>
                                        <option class="en" <?php echo( config::getDefaultCulture() == 'en') ? 'selected' : '' ?> value="en"> English (US)</option>
                                    </select>
                                    <input type="hidden" name="PATH_INFO" value="<?php echo request::getInstance()->getServer('PATH_INFO') ?>">
                                </li>
                            </form>
                        </ul>
                        <ul class="nav navbar-nav navbar-right top-navbar">
                            <li class="dropdown iconify hide-phone">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                                <ul class="dropdown-menu dropdown-message">
                                    <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                                    <li class="unread">
                                        <a href="#">
                                            <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                <br /><i>2 minutes ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="unread">
                                        <a href="#">
                                            <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                                <br /><i>8 minutes ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p><strong>John Malkovich</strong> Added 3 products
                                                <br /><i>3 hours ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                <br /><i>12 hours ago</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <p><strong>Johnny Depp</strong> Updated his avatar
                                                <br /><i>Yesterday</i>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <div class="btn-group btn-group-justified">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown iconify hide-phone">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                                <ul class="dropdown-menu dropdown-message">
                                    <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                                    <li class="unread">
                                        <a href="#" class="clearfix">
                                            <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                            <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                            <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                        </a>
                                    </li>
                                    <li class="unread">
                                        <a href="#" class="clearfix">
                                            <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                            <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                            <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                            <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                            <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                        </a>
                                    </li>
                                    <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                                </ul>
                            </li>
                            <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                            <li class="dropdown topbar-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span><strong><?php echo \mvc\session\sessionClass::getInstance()->getUserName() ?></strong> <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Change Password</a></li>
                                    <li><a href="#">Account Setting</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                                    <li><a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>"><i class="icon-lock-1"></i> Lock me</a></li>
                                    <li><a class="md-trigger" data-toggle="modal" data-target="#myModal"><i class="icon-logout-1"></i> Logout</a></li>
                                </ul>
                            </li>
                            <li class="right-opener">
                                <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Buscar" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                        <a href="profile.html" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Bienvenido <b><?php echo \mvc\session\sessionClass::getInstance()->getUserName() ?></b></div>
                        <div class="profile-buttons">
                            <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                            <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                            <a data-toggle="modal" data-target="#myModal" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('admin', 'index') ?>' ><i class='icon-home-3'></i><span>Admin Panel</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('usuario', 'index') ?>' ><i class="fa fa-users fa-fw"></i><span>Admin. Usuarios</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('credencial', 'index') ?>' ><i class="fa fa-user"></i><span>Credenciales</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('bitacora', 'index') ?>' ><i class="fa fa-edit fa-fw"></i><span>Bitacora</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('evento', 'index') ?>'><i class="fa fa-calendar"></i><span>Eventos</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('categoria', 'index') ?>' ><i class='icon-home-3'></i><span>Categoria</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('datosusuario', 'index') ?>' ><i class="fa fa-database"></i><span>Datos Usuarios</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('usuarioCredencial', 'index') ?>' ><i class='icon-home-3'></i><span>Usuario Credencial</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('recordarMe', 'index') ?>' ><i class="fa fa-bookmark"></i><span>Recordar Me</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('localidad', 'index') ?>'  ><i class="fa fa-building"></i><span>Localidad</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('organizacion', 'index') ?>'  ><i class="fa fa-university"></i><span>Organizacion</span> <span class="pull-right"></span></a></li>
                        <li><a href='<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('tipoDocumento', 'index') ?>' class="active"><i class="fa fa-file-text-o"></i><span>Tipo Documento</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                        <li><a href='javascript:void(0);' ><i class='icon-home-3'></i><span>Dashboard</span> <span class="pull-right"></span></a></li>
                </div>
                <div class="clearfix"></div>
                <div class="portlets">
                    <div id="chat_groups" class="widget transparent nomargin">
                        <h2>Chat Groups</h2>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li><a href="javascript:;"><i class="fa fa-circle-o text-red-1"></i> Colleagues</a></li>
                                <li><a href="javascript:;"><i class="fa fa-circle-o text-blue-1"></i> Family</a></li>
                                <li><a href="javascript:;"><i class="fa fa-circle-o text-green-1"></i> Friends</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="recent_tickets" class="widget transparent nomargin">
                        <h2>Recent Tickets</h2>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="javascript:;">My wordpress blog is broken <span>I was trying to save my page and...</span></a>
                                </li>
                                <li>
                                    <a href="javascript:;">Server down, need help!<span>My server is not responding for the last...</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div><br><br><br>
            </div>
            <div class="left-footer">
                <div class="progress progress-xs">
                    <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="progress-precentage">80%</span>
                    </div>

                    <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>
            </div>
        </div>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
        <div class="right side-menu">
            <ul class="nav nav-tabs nav-justified" id="right-tabs">
                <li class="active"><a href="#feed" data-toggle="tab" title="Live Feed"><i class="icon-rss-2"></i></a></li>
                <li><a href="#connect" data-toggle="tab" title="Chat"><i class="icon-chat"></i></a></li>
                <li><a href="#settings" data-toggle="tab" title="Preferences"><i class="icon-wrench"></i></a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="tab-content">
                <div class="tab-pane active" id="feed">
                    <div class="tab-inner slimscroller">
                        <div class="search-right">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="right-toolbar">
                            <a href="javascript:;" class="pull-right">Settings <i class="icon-cog"></i></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="panel-group" id="collapse">
                            <div class="panel panel-default">
                                <div class="panel-heading bg-orange-1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#rnotifications">
                                            <i class="icon-bell-2"></i> Notifications
                                            <span class="label bg-darkblue-1 pull-right">4</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="rnotifications" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-unstyled" id="notification-list">
                                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-video"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-users-1"></i></span> 3 Users signed up <span class="muted">16 minutes ago</span></a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-picture-1"></i></span> 1 Video Uploaded <span class="muted">12 minutes ago</span></a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper"><i class="icon-hourglass-1"></i></span> Deadline for 1 project <span class="muted">12 minutes ago</span></a></li>
                                        </ul>
                                        <a class="btn btn-block btn-sm btn-warning">See all notifications</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading bg-green-3">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#remails">
                                            <i class="icon-mail"></i> E-mails
                                            <span class="label bg-darkblue-1 pull-right">3</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="remails" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-unstyled" id="inbox-list">
                                            <li><a href="javascript:;"><span class="sender"><i class="icon-star text-yellow-2"></i> Kim Wilde</span> <span class="datetime">6 mins ago</span>
                                                    <span class="title">You keep me hangin on</span>
                                                    <span class="content">Where are you? I am waiting for 3 hours in the restaurant. I ate 3 hamburgers.</span>
                                                </a></li>
                                            <li><a href="javascript:;"><span class="sender">Tyler Durden</span> <span class="datetime">13 hours ago</span>
                                                    <span class="title">Buy some soap from market before</span>
                                                    <span class="content">We are crowded here. We need some more soap at home. Buy some before you come home.</span>
                                                </a></li>
                                            <li><a href="javascript:;"><span class="sender">John Bonomo</span> <span class="datetime">Yesterday</span>
                                                    <span class="title">Late delivery</span>
                                                    <span class="content">Hello, I ordered 15 box of viagra for a friend of mine but he still hasn't receive them.</span>
                                                </a></li>
                                        </ul>
                                        <a class="btn btn-block btn-sm btn-primary">Go to inbox</a>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading bg-blue-1">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#rupdates">
                                            <i class="icon-signal-2"></i> Updates
                                            <span class="label bg-darkblue-1 pull-right">5</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="rupdates" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-unstyled" id="updates-list">
                                            <li><a href="javascript:;"><span class="icon-wrapper bg-green-1"><i class="icon-comment-1"></i></span> <b>David Guetta</b> came online <abbr title="15 seconds ago">just now</abbr>.</a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper bg-red-1"><i class="icon-user-3"></i></span> <b>Katy Perry</b> updated her profile <abbr title="4 mins ago">4 mins ago</abbr>.</a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper bg-blue-1"><i class="icon-twitter-2"></i></span> <b>4 tweets posted</b> with cronjob <abbr title="22 mins ago">22 mins ago</abbr>.</a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper bg-orange-3"><i class="icon-water"></i></span> <b>Adele</b> set fire to the rain <abbr title="43 mins ago">43 mins ago</abbr>.</a></li>
                                            <li><a href="javascript:;"><span class="icon-wrapper bg-pink-2"><i class="icon-heart-broken"></i></span> <b>Taylor Swift</b> learned that you are trouble <abbr title="3 hours ago">3 days ago</abbr>.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="connect">
                    <div class="tab-inner slimscroller">
                        <div class="search-right">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>	
                        <div class="panel-group" id="collapse">
                            <div class="panel panel-default" id="chat-panel">
                                <div class="panel-heading bg-darkblue-2">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#chat-coll">
                                            <i class="icon-briefcase-1"></i> Colleagues
                                            <span class="label bg-darkblue-1 pull-right">14</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="chat-coll" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-unstyled" id="chat-list">
                                            <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                            <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                            <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg">Where is my mind</span></a></li>
                                            <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                            <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                            <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default" id="chat-panel">
                                <div class="panel-heading bg-darkblue-2">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                            <i class="icon-heart-3"></i> Friends
                                            <span class="label bg-darkblue-1 pull-right">3</span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <ul class="list-unstyled" id="chat-list">
                                            <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/1.jpg"></span> <span class="chat-user-name">Dorothy Simons</span><span class="chat-user-msg">I wish I was a bird in the sky</span></a></li>
                                            <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/2.jpg"></span> <span class="chat-user-name">John Malkovich</span><span class="chat-user-msg">You were the traitor</span></a></li>
                                            <li><a href="javascript:;" class="online"><span class="chat-user-avatar"><img src="images/users/chat/3.jpg"></span> <span class="chat-user-name">Jessica Simons</span><span class="chat-user-msg" title="Eminem - The Monster ft. Rihanna"><i class="icon-play"></i> Eminem - The Monster ft. Rihanna</span></a></li>
                                            <li><a href="javascript:;" class="away"><span class="chat-user-avatar"><img src="images/users/chat/4.jpg"></span> <span class="chat-user-name">Jack Stallman</span><span class="chat-user-msg">Away since 13:32</span></a></li>
                                            <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/5.jpg"></span> <span class="chat-user-name">Neil Armstrong</span><span class="chat-user-msg" title="I am flying to the moon and back">I am flying to the moon and back</span></a></li>
                                            <li><a href="javascript:;" class="offline"><span class="chat-user-avatar"><img src="images/users/chat/6.jpg"></span> <span class="chat-user-name">Hollywood Studios</span><span class="chat-user-msg">Yes he definitely is!</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="settings">
                    <div class="tab-inner slimscroller">
                        <div class="col-sm-12">
                            <h3>Preferences</h3>
                            <div class="row">
                                <div class="col-xs-8">
                                    Live data updates
                                </div>
                                <div class="col-xs-4">
                                    <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    Live feeds
                                </div>
                                <div class="col-xs-4">
                                    <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    Sync data to cloud
                                </div>
                                <div class="col-xs-4">
                                    <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" checked />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    Keep activity record
                                </div>
                                <div class="col-xs-4">
                                    <input type="checkbox" class="ios-switch ios-switch-danger ios-switch-sm" checked />
                                </div>
                            </div>
                            <h4>Other Settings</h4>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="checkboxw"><input type="checkbox" checked> Autosave settings</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="checkboxw"><input type="checkbox"> Always online</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right Sidebar End -->
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                <?php view::includeHandlerMessage() ?>
                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class="fa fa-file-text-o"></i>  Tipo Documento <?php i18n::__('adminusu') ?></h1>
                    <h3>Tipo Documento  Del Sistema</h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong>  Tipo Documento <?php i18n::__('adminusu') ?></strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <!--MODAL FILTER -->  
                            <div class="modal fade" id="myModalfilter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Filtros</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" role="form" id="filterForm" action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'index') ?>">
                                                <div class="form-group">
                                                    <label for="filterusuario" class="col-sm-2 control-label">Usuario</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="filterUsuario" name="filter[usuario]" placeholder="Nombre De Usuario">
                                                        </br>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label">Fecha Creacion</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="filterDate1" name="filter[fechaCreacion1]">
                                                        </br>
                                                        <input type="date" class="form-control" id="filterDate2" name="filter[fechaCreacion2]">
                                                    </div>
                                                </div>

                                            </form>
                                        </div></br></br></br>
                                        </br></br></br></br>
                                        </br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="button" onclick="$('#filterForm').submit()"  class="btn btn-primary">Filtrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END MODAL FILTER--> 
                            <div class="widget-content">
                                <br>					
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-top: 20px;">
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'insert') ?>" class="btn btn-success btn-medium"><i class="fa fa-plus-square-o"></i> Nuevo</a>
                                            <a href="#" class="btn btn-danger btn-medium" onclick="borrarSeleccion()">Borrar</a>
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'report') ?>" class="btn btn-default btn-medium"><i class="fa fa-file-pdf-o"></i> Exportar A PDF</a>
                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> 
                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> Filtro</button>
                                            <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> Eliminar Filtros</a>
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th>Tipo documento <?php i18n::__('usuario') ?></th>
                                                    <th><?php echo i18n::__('fechaCreacion') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </thead>

                                            <tfoot>
                                                <tr>
                                                    <th><input type="checkbox" id="chkAll"></th>
                                                    <th>Tipo documento <?php i18n::__('usuario') ?></th>
                                                    <th><?php echo i18n::__('fechaCreacion') ?></th>
                                                    <th><?php echo i18n::__('actions') ?></th>
                                                </tr>
                                            </tfoot>

                                            <tbody>
                                                <?php foreach ($objTipoDocumento as $usuario): ?>
                                                  <tr>
                                                      <td><input type="checkbox" name="chk[]" value="<?php echo $usuario->$id ?>"></td>
                                                      <td><?php echo $usuario->$nombre ?></td>
                                                      <td><?php echo $usuario->$created ?></td>
                                                      <td>
                                                          <!--                    <a href="#" class="btn btn-warning btn-xs">Ver</a>-->
                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'edit', array(tipoDocumentoTableClass::ID => $usuario->$id)) ?>" class="btn btn-primary btn-xs">Editar</a>
                                                          <a href="#" onclick="confirmarEliminar(<?php echo $usuario->$id ?>)" class="btn btn-danger btn-xs">Eliminar</a>
                                                          <a href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index', array(usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) => $usuario->$id)) ?>" class="btn btn-success btn-xs"><i class="fa fa-external-link-square"></i> Detalle</a>

                                                      </td>
                                                  </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::ID, true) ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <footer>
                    <!-- Start Copyright -->
                    <div class="copyright-section">
                        <div class="row">
                            <div class="col-md-12">
                                <p>&copy; 2015 CULT EXCEL -  Todos Los Derechos Reservados <a href="#"> Design By Mariana Lopez, Andres Felipe Alvarez </a> </p>
                            </div><!-- .col-md-6 -->
                        </div><!-- .row -->
                    </div>
                    <!-- End Copyright -->
                </footer>
                <!-- Footer End -->			
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
      var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

</div>