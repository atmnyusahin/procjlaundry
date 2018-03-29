<?php $loginsession= $this->session->userdata('loginsession'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/plugins/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url()?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url()?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()?>assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:/ -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>/assets/https:/oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo base_url();?>/assets/https:/oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="<?php echo base_url()?>assets/javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="<?php echo base_url()?>assets/index.html"><b><!--This is dark logo icon--><img src="<?php echo base_url();?>/assets/plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="<?php echo base_url();?>/assets/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="<?php echo base_url();?>/assets/plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url();?>/assets/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="<?php echo base_url()?>assets/javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control"> <a href="<?php echo base_url()?>assets/"><i class="fa fa-search"></i></a> </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="<?php echo base_url()?>assets/#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="<?php echo base_url()?>assets/#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>/assets/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="<?php echo base_url()?>assets/#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>/assets/plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="<?php echo base_url()?>assets/#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>/assets/plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="<?php echo base_url()?>assets/#">
                                        <div class="user-img"> <img src="<?php echo base_url();?>/assets/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="<?php echo base_url()?>assets/javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="<?php echo base_url()?>assets/#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="<?php echo base_url()?>assets/#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url()?>assets/#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url()?>assets/#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url()?>assets/#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="<?php echo base_url()?>assets/#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->
                    <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="<?php echo base_url()?>assets/#"><span class="hidden-xs"><?php echo $loginsession['nama']; ?></span> <i class="icon-options-vertical"></i></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="<?php echo base_url(); ?>Profiluser"></i> My Profile</a></li>
                            <li><a href="<?php echo base_url()?>assets/#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="<?php echo base_url()?>assets/#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>assets/#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>Login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- /.Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="<?php echo base_url()?>assets/javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="<?php echo base_url();?>/assets/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div> <a href="<?php echo base_url()?>assets/#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $loginsession['nama']; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="<?php echo base_url(); ?>Profiluser"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="<?php echo base_url()?>assets/#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="<?php echo base_url()?>assets/#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>assets/#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url()?>Login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="<?php echo base_url()?>assets/index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">4</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>assets/index.html">Minimalistic</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/index2.html">Demographical</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/index3.html">Analitical</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/index4.html">Simpler</a> </li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> Multipurpose <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-hospital/index.html">Hospital Admin</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-crm/index.html">CRM Admin</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-university/index.html">University Admin</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-music/index.html">Music Admin</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-real-estate/index.html">Real Estate Admin</a> </li>
                            <li role="separator" class="divider"></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-inverse/index.html">Inverse</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-colors/index.html">Colors</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin/index.html">Eliteadmin</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-wpmenu/index.html">Wpmenu</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-ecommerce/index.html">Ecommerce</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-modern/index.html">Modern</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-inverse-php/index.php">Basic PHP</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-material/index3.html">Material Design</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-mini-sidebar/index3.html">Mini Sidebar</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-horizontal-navbar/index3.html">Horizontal Boxed Nav</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-horizontal-nav-fullwidth/index.html">Horizontal Full Nav</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-iconbar/index4.html">Iconbar</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-rtl/index.html">Eliteadmin RTL</a></li>
                            <li> <a href="<?php echo base_url()?>assets/eliteadmin-inverse-rtl/index.html">Inverse RTL</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url()?>assets/inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>assets/chat.html">Chat-message</a></li>
                            <li><a href="<?php echo base_url()?>assets/javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url()?>assets/inbox.html">Mail box</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/inbox-detail.html">Inbox detail</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/compose.html">Compose mail</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url()?>assets/javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url()?>assets/contact.html">Contact1</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/contact2.html">Contact2</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/contact-detail.html">Contact Detail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>assets/cards.html">Cards</a></li>
                            <li><a href="<?php echo base_url()?>assets/panels-wells.html">Panels and Wells</a></li>
                            <li><a href="<?php echo base_url()?>assets/panel-ui-block.html">Panels With BlockUI</a></li>
                            <li><a href="<?php echo base_url()?>assets/panel-draggable.html">Draggable Panel</a></li>
                            <li><a href="<?php echo base_url()?>assets/portlet-draggable.html">Draggable Portlet</a></li>
                            <li><a href="<?php echo base_url()?>assets/buttons.html">Buttons</a></li>
                            <li><a href="<?php echo base_url()?>assets/bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="<?php echo base_url()?>assets/date-paginator.html">Date Paginator</a></li>
                            <li><a href="<?php echo base_url()?>assets/sweatalert.html">Sweat alert</a></li>
                            <li><a href="<?php echo base_url()?>assets/typography.html">Typography</a></li>
                            <li><a href="<?php echo base_url()?>assets/grid.html">Grid</a></li>
                            <li><a href="<?php echo base_url()?>assets/tabs.html">Tabs</a></li>
                            <li><a href="<?php echo base_url()?>assets/tab-stylish.html">Stylish Tabs</a></li>
                            <li><a href="<?php echo base_url()?>assets/modals.html">Modals</a></li>
                            <li><a href="<?php echo base_url()?>assets/progressbars.html">Progress Bars</a></li>
                            <li><a href="<?php echo base_url()?>assets/notification.html">Notifications</a></li>
                            <li><a href="<?php echo base_url()?>assets/carousel.html">Carousel</a></li>
                            <li><a href="<?php echo base_url()?>assets/list-style.html">List & Media object</a></li>
                            <li><a href="<?php echo base_url()?>assets/user-cards.html">User Cards</a></li>
                            <li><a href="<?php echo base_url()?>assets/timeline.html">Timeline</a></li>
                            <li><a href="<?php echo base_url()?>assets/timeline-horizontal.html">Horizontal Timeline</a></li>
                            <li><a href="<?php echo base_url()?>assets/nestable.html">Nesteble</a></li>
                            <li><a href="<?php echo base_url()?>assets/range-slider.html">Range Slider</a></li>
                            <li><a href="<?php echo base_url()?>assets/ribbons.html">Ribbons</a></li>
                            <li><a href="<?php echo base_url()?>assets/steps.html">Steps</a></li>
                            <li><a href="<?php echo base_url()?>assets/session-idle-timeout.html">Session Idle Timeout</a></li>
                            <li><a href="<?php echo base_url()?>assets/session-timeout.html">Session Timeout</a></li>
                            <li><a href="<?php echo base_url()?>assets/bootstrap.html">Bootstrap UI</a></li>
                            <li><a href="<?php echo base_url()?>assets/tooltip-stylish.html">Stylish Tooltips</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>assets/form-basic.html">Basic Forms</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-layout.html">Form Layout</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-advanced.html">Form Addons</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-material-elements.html">Form Material</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-float-input.html">Form Float Input</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-upload.html">File Upload</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-mask.html">Form Mask</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-img-cropper.html">Image Cropping</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-validation.html">Form Validation</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-dropzone.html">File Dropzone</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-pickers.html">Form-pickers</a></li>
                            <li><a href="<?php echo base_url()?>assets/icheck-control.html">Icheck Form Controls</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-wizard.html">Form-wizards</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-typehead.html">Typehead</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-xeditable.html">X-editable</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-summernote.html">Summernote</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                            <li><a href="<?php echo base_url()?>assets/form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">--- Proffessional</li>
                    <li> <a href="<?php echo base_url()?>assets/#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>assets/starter-page.html">Starter Page</a></li>
                            <li><a href="<?php echo base_url()?>assets/blank.html">Blank Page</a></li>
                            <li><a href="<?php echo base_url()?>assets/javascript:void(0)" class="waves-effect">Email Templates<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url()?>assets/email-templates/basic.html">Basic</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/email-templates/alert.html">Alert</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/email-templates/billing.html">Billing</a></li>
                                    <li> <a href="<?php echo base_url()?>assets/email-templates/password-reset.html">Reset Pwd</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url()?>assets/lightbox.html">Lightbox Popup</a></li>
                            <li><a href="<?php echo base_url()?>assets/treeview.html">Treeview</a></li>
                            <li><a href="<?php echo base_url()?>assets/search-result.html">Search Result</a></li>
                            <li><a href="<?php echo base_url()?>assets/utility-classes.html">Utility Classes</a></li>
                            <li><a href="<?php echo base_url()?>assets/custom-scroll.html">Custom Scrolls</a></li>
                            <li><a href="<?php echo base_url()?>assets/login.html">Login Page</a></li>
                            <li><a href="<?php echo base_url()?>assets/login2.html">Login v2</a></li>
                            <li><a href="<?php echo base_url()?>assets/animation.html">Animations</a></li>
                            <li><a href="<?php echo base_url()?>assets/profile.html">Profile</a></li>
                            <li><a href="<?php echo base_url()?>assets/invoice.html">Invoice</a></li>
                            <li><a href="<?php echo base_url()?>assets/faq.html">FAQ</a></li>
                            <li><a href="<?php echo base_url()?>assets/gallery.html">Gallery</a></li>
                            <li><a href="<?php echo base_url()?>assets/pricing.html">Pricing</a></li>
                            <li><a href="<?php echo base_url()?>assets/register.html">Register</a></li>
                            <li><a href="<?php echo base_url()?>assets/register2.html">Register v2</a></li>
                            <li><a href="<?php echo base_url()?>assets/register3.html">3 Step Registration</a></li>
                            <li><a href="<?php echo base_url()?>assets/recoverpw.html">Recover Password</a></li>
                            <li><a href="<?php echo base_url()?>assets/lock-screen.html">Lock Screen</a></li>
                            <li><a href="<?php echo base_url()?>assets/400.html">Error 400</a></li>
                            <li><a href="<?php echo base_url()?>assets/403.html">Error 403</a></li>
                            <li><a href="<?php echo base_url()?>assets/404.html">Error 404</a></li>
                            <li><a href="<?php echo base_url()?>assets/500.html">Error 500</a></li>
                            <li><a href="<?php echo base_url()?>assets/503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>assets/flot.html">Flot Charts</a> </li>
                            <li><a href="<?php echo base_url()?>assets/morris-chart.html">Morris Chart</a></li>
                            <li><a href="<?php echo base_url()?>assets/chart-js.html">Chart-js</a></li>
                            <li><a href="<?php echo base_url()?>assets/peity-chart.html">Peity Charts</a></li>
                            <li><a href="<?php echo base_url()?>assets/knob-chart.html">Knob Charts</a></li>
                            <li><a href="<?php echo base_url()?>assets/sparkline-chart.html">Sparkline charts</a></li>
                            <li><a href="<?php echo base_url()?>assets/extra-charts.html">Extra Charts</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo base_url()?>assets/basic-table.html">Basic Tables</a></li>
                            <li><a href="<?php echo base_url()?>assets/table-layouts.html">Table Layouts</a></li>
                            <li><a href="<?php echo base_url()?>assets/data-table.html">Data Table</a></li>
                            <li class="hidden"><a href="<?php echo base_url()?>assets/crud-table.html">Crud Table</a></li>
                            <li><a href="<?php echo base_url()?>assets/bootstrap-tables.html">Bootstrap Tables</a></li>
                            <li><a href="<?php echo base_url()?>assets/responsive-tables.html">Responsive Tables</a></li>
                            <li><a href="<?php echo base_url()?>assets/editable-tables.html">Editable Tables</a></li>
                            <li><a href="<?php echo base_url()?>assets/foo-tables.html">FooTables</a></li>
                            <li><a href="<?php echo base_url()?>assets/jsgrid.html">JsGrid Tables</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/widgets.html" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Widgets</span></a> </li>
                    <li> <a href="<?php echo base_url()?>assets/#" class="waves-effect"><i data-icon="7" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Icons<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>assets/fontawesome.html">Font awesome</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/themifyicon.html">Themify Icons</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/simple-line.html">Simple line Icons</a> </li>
                            <li><a href="<?php echo base_url()?>assets/linea-icon.html">Linea Icons</a></li>
                            <li><a href="<?php echo base_url()?>assets/weather.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li> <a href="<?php echo base_url()?>assets/map-google.html" class="waves-effect"><i data-icon="Q" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Google Map</span></a> </li>
                    <li> <a href="<?php echo base_url()?>assets/map-vector.html" class="waves-effect"><i data-icon="S" class="linea-icon linea-basic fa-fw"></i><span class="hide-menu" >Vector Map</span></a> </li>
                    <li> <a href="<?php echo base_url()?>assets/calendar.html" class="waves-effect"><i data-icon="A" class="linea-icon linea-elaborate fa-fw"></i> <span class="hide-menu">Calendar</span></a></li>
                    <li> <a href="<?php echo base_url()?>assets/javascript:void(0)" class="waves-effect"><i data-icon="F" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Multi-Level Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="<?php echo base_url()?>assets/javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="<?php echo base_url()?>assets/javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo base_url()?>assets/javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="<?php echo base_url()?>assets/javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="<?php echo base_url()?>assets/javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="<?php echo base_url()?>assets/javascript:void(0)">Third Level Item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url()?>Login/logout" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="nav-small-cap">--- Support</li>
                    <li><a href="<?php echo base_url()?>assets/documentation.html" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu">Documentation</span></a></li>
                    <li><a href="<?php echo base_url()?>assets/gallery.html" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu">Gallery</span></a></li>
                    <li><a href="<?php echo base_url()?>assets/faq.html" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Faqs</span></a></li>
                </ul>
            </div>
        </div>