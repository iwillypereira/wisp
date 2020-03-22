<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>WispSoft <?=$this->pageTitle?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>



    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="index.html"><img class="desktop-logo" src="img/core-img/logo.png" alt="Desktop Logo"> <img
                        class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li><a href="index.html"><i class="zmdi material-icons">dashboard</i>
                                    <span>Inicio</span></a></li>
                            <li class="treeview "><a href="index.html"><i class="zmdi material-icons">dashboard</i>
                                    <span>Clientes</span> <i class="zmdi material-icons"> </i></a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="blank.html">Blank Page</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="light-box-gallery.html">Light Box Gallery</a></li>
                                    <li><a href="profile-2.html">Profile</a></li>
                                    <li><a href="ribbons.html">Ribbons</a></li>
                                    <li><a href="sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="slider.html">Slider</a></li>
                                    <li><a href="range-slider.html">Range Slider</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-file-text"></i><span>Pages</span> <i
                                        class="fa fa-angle-up zmdi material-icons"></i></a>
                                <ul class="treeview-menu">
                                    <li class="active"><a href="blank.html">Blank Page</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="light-box-gallery.html">Light Box Gallery</a></li>
                                    <li><a href="profile-2.html">Profile</a></li>
                                    <li><a href="ribbons.html">Ribbons</a></li>
                                    <li><a href="sweet-alert.html">Sweet Alert</a></li>
                                    <li><a href="slider.html">Slider</a></li>
                                    <li><a href="range-slider.html">Range Slider</a></li>
                                </ul>
                            </li>





                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="index.html"><img src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>

                    <!-- Left Side Nav -->
                    <ul class="left-side-navbar d-flex align-items-center">
                        <!-- Left Side Nav -->
                        <li class="hide-phone app-search">
                            <form role="search" class=""><input type="text" placeholder="Search..."
                                    class="form-control">
                                <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
                        </li>
                    </ul>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class="fa fa-reorder"></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-email"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">7 New Messages</h5>
                                </div>
                                <div class="list-group list-group-flush" id="messageBox">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div><img class="chat-img-2" src="img/member-img/1.jpg" alt=""></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Alex Michael <small
                                                        class="float-right text-dark">2 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Projtect Done 856
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div><img class="chat-img-2" src="img/member-img/2.jpg" alt=""></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Anila Stora <small
                                                        class="float-right text-dark">3
                                                        hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Lorem ipsum dolor sit amet.
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div><img class="chat-img-2" src="img/member-img/3.jpg" alt=""></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Lima Sara <small
                                                        class="float-right text-dark">4
                                                        hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Projtect Done 856
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div><img class="chat-img-2" src="img/member-img/4.jpg" alt=""></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Alex Michael <small
                                                        class="float-right text-dark">5 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Lorem ipsum dolor sit amet.
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div><img class="chat-img-2" src="img/member-img/5.jpg" alt=""></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Jhon Michael <small
                                                        class="float-right text-dark">6 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Projtect Done 652
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div><img class="chat-img-2" src="img/member-img/6.jpg" alt=""></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Alex Michael <small
                                                        class="float-right text-dark">2 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Projtect Done 856
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="py-3 text-center">
                                    <a href="#" class="link link-sm text-primary font-13">View all</a>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown-animate">
                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-notifications-none"></i>
                                <span class="active-status"></span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                                <div class="py-3 px-3">
                                    <h5 class="heading h6 mb-0">Notifications</h5>
                                </div>
                                <div class="list-group list-group-flush" id="notificationsBox">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <div class="heading-avatar bg-primary text-white rounded-circle"><i
                                                    class="zmdi zmdi-flower"></i></div>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0 font-weight-bold">New project done <small
                                                        class="float-right text-dark">2 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Some quick example text to build on the card title.
                                                </p>
                                            </div>
                                        </div>
                                    </a>

                                    <span class="header-notification">New Hot</span>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="3 hrs ago">
                                            <span class="heading-avatar bg-warning text-white rounded-circle">SW</span>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0 font-weight-bold">Sandra Wayne <small
                                                        class="float-right text-dark">3 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Some quick example text to build on the card title.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="5 hrs ago">
                                            <span class="heading-avatar bg-info text-white rounded-circle">JM</span>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Jason Miller <small
                                                        class="float-right text-dark">5 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Some quick example text to build on the card title.
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="d-flex align-items-center" data-toggle="tooltip"
                                            data-placement="right" data-title="2 hrs ago">
                                            <span class="heading-avatar bg-dark text-white rounded-circle">MJ</span>
                                            <div class="flex-fill ml-3">
                                                <div class="font-14 mb-0">Mike Thomson <small
                                                        class="float-right text-dark">2 hrs ago</small></div>
                                                <p class="font-12 mb-0">
                                                    Some quick example text to build on the card title.
                                                </p>
                                            </div>
                                        </div>
                                    </a>


                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img class="chat-img-2"
                                    src="img/member-img/1.jpg" alt=""></button>
                            <div class="dropdown-menu profile-info dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="<?= Yii::app()->createUrl('site/perfil') ?>" class="dropdown-item"
                                        style="font-size:15px;"><i class="zmdi material-icons profile-icon"
                                            style="font-size:15px;"> assignment_ind</i> <span
                                            style="font-size:15px;">Perfil</span></a>
                                    <a href="<?= Yii::app()->createUrl('site/mensajes') ?>" class="dropdown-item"
                                        style="font-size:15px;"><i class="zmdi material-icons profile-icon"
                                            style="font-size:15px;"> inbox</i> <span
                                            style="font-size:15px;">Mensajes</span></a>
                                    <a href="<?= Yii::app()->createUrl('site/configuracion') ?>" class="dropdown-item"
                                        style="font-size:15px;"><i class="zmdi material-icons profile-icon"
                                            style="font-size:15px;"> widgets</i> <span
                                            style="font-size:15px;">Configuración</span></a>
                                    <a href="<?= Yii::app()->createUrl('site/logout') ?>" class="dropdown-item"
                                        style="font-size:15px;"><i class="zmdi material-icons profile-icon"
                                            style="font-size:15px;"> exit_to_app</i> <span
                                            style="font-size:15px;">Salir</span></a>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="main-content">
                <div class="container-fluid">
                    <?php echo $content; ?>
                </div>

                <!-- Footer Area -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer
                                class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p class="font-13 font-weight-bold">Created by @<a href="#">Theme-zome.</a> All
                                        rights reserved
                                    </p>
                                </div>
                                <div class="fotter-icon text-center">
                                    <p class="mb-0 font-13 font-weight-bold">2020 © Dreamkit. </p>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Must needed plugins to the run this Template -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bundle.js"></script>

    <!-- Active JS -->
    <script src="/js/default-assets/active.js"></script>

</body>
