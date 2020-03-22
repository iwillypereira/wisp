<?php
/* @var $this SiteController */

$this->pageTitle = " - Inicio";
?>

        <div class="row align-items-center">
            <div class="col-sm-8 col-md-9">
                <div class="row">
                    <div class="col-sm-12 pr-0">
                        <div class="d-lg-flex align-items-center mb-30">
                            <h5 class="text-dark mb-0 mr-5">Welcome to Dashboard</h5>
                            <ul class="dashboard-link-btn-wrap mt-10-md mt-10-xs mt-10-sm">
                                <li>
                                    <a href="#" class="text-primary font-weight-bold font-13"><span
                                            class="bg-primary"><i
                                                class="zmdi zmdi-google-pages"></i></span>Activities</a>
                                </li>
                                <li>
                                    <a href="#" class="font-weight-bold text-dark font-13"><span class="bg-danger"><i
                                                class="zmdi zmdi-assignment"></i></span>Summary</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3">
                <div class="button-area text-right mb-30">
                    <button class="btn btn-primary"> <i class="zmdi zmdi-plus mr-1"></i> Creat Report</button>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-xl-4">
                <!-- Single Card Widget -->
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="data-info">
                                    <h6 class="font-15 mb-0">Monthly Sale</h6>
                                    <h4 class="font-28 font-weight-bold mb-0">$2564</h4>
                                    <span class="text-success font-14 font-weight-bold">+2.57% <i
                                            class="ti-arrow-up text-success font-10"></i></span>
                                </div>
                            </div>

                            <div class="col-7">
                                <div id="chart1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-4">
                <!-- Single Card Widget -->
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="data-info">
                                    <h6 class="font-15 mb-0">New Orders</h6>
                                    <h4 class="font-28 font-weight-bold mb-0">2569</h4>
                                    <span class="text-danger font-14 font-weight-bold">-1.57% <i
                                            class="ti-arrow-down text-danger font-10"></i></span>
                                </div>
                            </div>

                            <div class="col-7">
                                <div id="chart5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-4">
                <!-- Single Card Widget -->
                <div class="card box-margin">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="data-info">
                                    <h6 class="font-15 mb-0">Growth</h6>
                                    <h4 class="font-28 font-weight-bold mb-0">88.7%</h4>
                                    <span class="text-success font-14 font-weight-bold">+3.57% <i
                                            class="ti-arrow-up text-success font-10"></i></span>
                                </div>
                            </div>

                            <div class="col-7">
                                <div id="spark3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <!-- Order Area -->
                <div class="card box-margin">
                    <div class="card-body">
                        <div
                            class="card-header pt-0 border-none bg-transparent d-flex align-items-center justify-content-between">
                            <div class="widgets-card-title">
                                <h5 class="card-title mb-0">Orders</h5>
                            </div>
                            <div class="dashboard-dropdown">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dashboardDropdown70"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dashboardDropdown70">
                                        <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="ti-eraser"></i> Remove</a>
                                        <a class="dropdown-item" href="#"><i class="ti-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chart -->
                        <div class="chart-area">
                            <div id="chart"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Single Card -->
                <div class="card box-margin">
                    <div class="card-body">
                        <!-- Card Header -->
                        <div
                            class="card-header mb-30 p-0 border-none bg-transparent d-flex align-items-center justify-content-between">
                            <div class="widgets-card-title">
                                <h5 class="card-title mb-0">Author Sales</h5>
                            </div>
                            <div class="dashboard-dropdown">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dashboardDropdown80"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dashboardDropdown80">
                                        <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="ti-eraser"></i> Remove</a>
                                        <a class="dropdown-item" href="#"><i class="ti-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="card-million">
                                        <h2 class="card-million"><span class="font-20">$</span>74M</h2>
                                        <img class="bg-pattern-icon" src="img/bg-img/bg-icon.png" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="chart-area">
                                        <div id="chart6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Card -->
                <div class="card box-margin">
                    <div class="card-body">
                        <!-- Card Header -->
                        <div
                            class="card-header mb-30 p-0 border-none bg-transparent d-flex align-items-center justify-content-between">
                            <div class="widgets-card-title">
                                <h5 class="card-title mb-0">Total Orders</h5>
                            </div>
                            <div class="dashboard-dropdown">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dashboardDropdown71"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dashboardDropdown71">
                                        <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="ti-eraser"></i> Remove</a>
                                        <a class="dropdown-item" href="#"><i class="ti-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <div class="card-million">
                                        <h2 class="card-million">64M</h2>
                                        <img class="bg-pattern-icon" src="img/bg-img/bg-icon.png" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="chart-area">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Widget Single Slider-->
                <div class="card mb-30">
                    <div class="card-body">
                        <h4 class="font-16 text-uppercase mb-30 text-color">Announcements</h4>
                        <div class="index-widget-slider-area">
                            <div class="index-widget owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <h5 class="font-weight-bold font-20">Award Winning</h5>
                                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Necessitatibus sapiente fugit dolore, voluptatem similique voluptatibus.</p>
                                    <div class="d-flex justify-content-between">
                                        <span class="btn btn-label">20 Dec, 2020</span>
                                        <a class="widget-btn" href="#">View</a>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <h5 class="font-weight-bold font-20">Dreamkit Best Theme</h5>
                                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Necessitatibus sapiente fugit dolore, voluptatem similique voluptatibus.</p>
                                    <div class="d-flex justify-content-between">
                                        <span class="btn btn-label">22 Dec, 2020</span>
                                        <a class="widget-btn" href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Widget Single Slider-->
                <div class="card mb-30">
                    <div class="card-body">
                        <h4 class="font-16 text-uppercase mb-30 text-color">Project</h4>
                        <div class="index-widget-slider-area">
                            <div class="index-widget-2 owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <h5 class="font-weight-bold font-20">Projrct Done 1500</h5>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Necessitatibus sapiente fugit dolore, voluptatem.</p>
                                    <div class="progress-bar-area">
                                        <div class="d-flex justify-content-between mb-15">
                                            <span class="text-dark">Progress</span>
                                            <span class="font-weight-bold">75%</span>
                                        </div>
                                        <div class="progress h-5">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <h5 class="font-weight-bold font-20">Sale $50,000 up</h5>
                                    <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Necessitatibus sapiente fugit dolore, voluptatem.</p>
                                    <div class="d-flex justify-content-between">
                                        <span class="btn btn-label">22 Dec, 2020</span>
                                        <a class="widget-btn" href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Widget Single Slider-->
                <div class="card mb-30">
                    <div class="card-body">
                        <h4 class="font-16 text-uppercase mb-30 text-color">Today's Schedule</h4>
                        <div class="index-widget-slider-area">
                            <div class="index-widget-3 owl-carousel">
                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <h5 class="font-weight-bold font-20">Web Development Work</h5>
                                    <h4 class="text-primary mb-30">Time - 04:23PM - 06:30PM</h4>
                                    <div class="d-flex justify-content-between">
                                        <span class="btn btn-label">768 Super Club, London</span>
                                        <a class="widget-btn" href="#">View</a>
                                    </div>
                                </div>

                                <!-- Single Slider -->
                                <div class="widget-slider-content">
                                    <h5 class="font-weight-bold font-20">Octa Pre-office Meeting</h5>
                                    <h4 class="text-primary mb-30">Time - 10:30AM - 12:00PM</h4>
                                    <div class="d-flex justify-content-between">
                                        <span class="btn btn-label">768 Super Club, London</span>
                                        <a class="widget-btn" href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Sales Starts-->
            <div class="col-lg-6 col-xl-4 box-margin height-card">
                <div class="card">
                    <div class="card-body">
                        <!-- Card Header -->
                        <div
                            class="card-header mb-30 p-0 border-none bg-transparent d-flex align-items-center justify-content-between">
                            <div class="widgets-card-title">
                                <h5 class="card-title mb-0">Total Sales</h5>
                            </div>
                            <div class="dashboard-dropdown">
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dashboardDropdown73"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ti-more"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right"
                                        aria-labelledby="dashboardDropdown73">
                                        <a class="dropdown-item" href="#"><i class="ti-pencil-alt"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="ti-eraser"></i> Remove</a>
                                        <a class="dropdown-item" href="#"><i class="ti-trash"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chart -->
                        <div id="chart9"></div>

                        <!-- Sell Description -->
                        <div class="sell-desc">
                            <p class="font-14"><i class="zmdi zmdi-bookmark text-primary font-15"></i> Market <span
                                    class="text-dark flot-right font-weight-bold">$5869</span></p>
                            <p class="font-14"><i class="zmdi zmdi-bookmark text-success font-15"></i> Affilliate <span
                                    class="text-dark flot-right font-weight-bold">$7589</span></p>
                            <p class="font-14 mb-0"><i class="zmdi zmdi-bookmark text-danger font-15"></i> E-mail <span
                                    class="text-dark flot-right font-weight-bold">$8569</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Update Area -->
            <div class="col-lg-6 col-xl-4 box-margin height-card">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Latest Update</h5>
                        <div class="transaction-area">
                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                <div class="media d-flex justify-content-center align-items-center">
                                    <div class="icon-section bg-primary-soft">
                                        <i class="fa fa-file-code-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-1 font-15">New Users</h6>
                                        <p class="mb-0 font-13">6 June 19</p>
                                    </div>
                                </div>

                                <div class="amount txt-gray-5">
                                    <p class="mb-0">57,0000</p>
                                </div>
                            </div>

                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                <div class="media d-flex justify-content-center align-items-center">
                                    <div class="icon-section bg-danger-soft">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-1 font-15">Page Views</h6>
                                        <p class="mb-0 font-13">9 July 19</p>
                                    </div>
                                </div>

                                <div class="amount txt-gray-5">
                                    <p class="mb-0">79,496</p>
                                </div>
                            </div>

                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                <div class="media d-flex justify-content-center align-items-center">
                                    <div class="icon-section bg-success-soft">
                                        <i class="fa fa-clone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-1 font-15">Page Sessions</h6>
                                        <p class="mb-0 font-13">6 April 19</p>
                                    </div>
                                </div>

                                <div class="amount txt-gray-5">
                                    <p class="mb-0">47,381</p>
                                </div>
                            </div>

                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                <div class="media d-flex justify-content-center align-items-center">
                                    <div class="icon-section bg-success-soft">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-1 font-15">Page Views</h6>
                                        <p class="mb-0 font-13">10 July 19</p>
                                    </div>
                                </div>

                                <div class="amount txt-gray-5">
                                    <p class="mb-0">88,496</p>
                                </div>
                            </div>

                            <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                <div class="media d-flex justify-content-center align-items-center">
                                    <div class="icon-section bg-danger-soft">
                                        <i class="icon-wallet"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-1 font-15">Click Through</h6>
                                        <p class="mb-0 font-13">22 January 19</p>
                                    </div>
                                </div>

                                <div class="amount txt-gray-5">
                                    <p class="mb-0">4,76,8294</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notification Area -->
            <div class="col-xl-4 box-margin height-card">
                <div class="card">
                    <div class="card-body">
                        <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3 class="card-title mb-0">
                                        Notifications
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-brand nav-tabs-bold"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab"
                                                href="#kt_portlet_tabs_1_1_1_content" role="tab" aria-selected="true">
                                                Week
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#kt_portlet_tabs_1_1_3_content"
                                                role="tab" aria-selected="false">
                                                Month
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="kt-portlet__body" id="notificationBox">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="kt_portlet_tabs_1_1_1_content"
                                        role="tabpanel">
                                        <div class="kt-scroll ps ps--active-y" data-scroll="true"
                                            data-mobile-height="350">
                                            <!--Begin::Timeline -->
                                            <div class="kt-timeline">
                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--success">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i
                                                                    class="icon_mail_alt text-primary font-weight-bold"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">02:30 PM</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">Xviten created new layout
                                                        whith tens of new options for Keen Admin panel</a>
                                                    <div class="kt-timeline__item-info">
                                                        HTML,CSS,VueJS
                                                    </div>
                                                </div>
                                                <!--End::Item -->

                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        New secyrity alert by Firewall &amp; order to take aktion on
                                                        User Preferences
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Security, Fieewall
                                                    </div>
                                                </div>
                                                <!--End::Item -->

                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--brand">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i
                                                                    class="icon_gift_alt font-weight-bold text-success"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">Yestardey</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        FlyMore design mock-ups been uploadet by designers Bob, Naomi,
                                                        Richard
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        PSD, Sketch, AJ
                                                    </div>
                                                </div>
                                                <!--End::Item -->


                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        New secyrity alert by Firewall &amp; order to take aktion on
                                                        User Preferences
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Security, Fieewall
                                                    </div>
                                                </div>
                                                <!--End::Item -->

                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--warning">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i
                                                                    class="icon_datareport font-weight-bold text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">Aug 13,2020</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        Meeting with Ken Digital Corp ot Unit14, 3 Edigor Buildings,
                                                        George Street, Loondon<br> England, BA12FJ
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Meeting, Customer
                                                    </div>
                                                </div>
                                                <!--End::Item -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kt_portlet_tabs_1_1_3_content" role="tabpanel">
                                        <div class="kt-scroll ps" data-scroll="true"
                                            style="height: 420px; overflow: hidden;" data-mobile-height="350">
                                            <!--Begin::Timeline -->
                                            <div class="kt-timeline">
                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--success">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i
                                                                    class="icon_mail_alt text-primary font-weight-bold"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">01:30 PM</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">Created new layout whith
                                                        tens of new options for Keen Admin panel</a>
                                                    <div class="kt-timeline__item-info">
                                                        Vue,CSS,VueJS
                                                    </div>
                                                </div>
                                                <!--End::Item -->

                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        Secyrity alert by Firewall &amp; order to take aktion on User
                                                        Preferences
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Security, Fieewall
                                                    </div>
                                                </div>
                                                <!--End::Item -->

                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--brand">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i
                                                                    class="icon_gift_alt font-weight-bold text-success"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">Yestardey</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        FlyMore design mock-ups been uploadet by designers Bob, Naomi,
                                                        Richard
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Hadrla, Sketch, AJ
                                                    </div>
                                                </div>
                                                <!--End::Item -->


                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--danger">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i class="icon_genius font-weight-bold text-danger"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">01:20 AM</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        New secyrity alert by Firewall &amp; order to take aktion on
                                                        User Preferences
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Security, Fieewall
                                                    </div>
                                                </div>
                                                <!--End::Item -->

                                                <!--Begin::Item -->
                                                <div class="kt-timeline__item kt-timeline__item--warning">
                                                    <div class="kt-timeline__item-section">
                                                        <div class="kt-timeline__item-section-border">
                                                            <div class="kt-timeline__item-section-icon">
                                                                <i
                                                                    class="icon_datareport font-weight-bold text-warning"></i>
                                                            </div>
                                                        </div>
                                                        <span class="kt-timeline__item-datetime">Aug 15,2020</span>
                                                    </div>

                                                    <a href="" class="kt-timeline__item-text">
                                                        With Xita Digital Corp ot Unit14, 3 Edigor Buildings, George
                                                        Street, Loondon<br> England, BA12FJ
                                                    </a>
                                                    <div class="kt-timeline__item-info">
                                                        Meeting, Clint
                                                    </div>
                                                </div>
                                                <!--End::Item -->
                                                <!--End::Item -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card mb-30">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Transaction</h4>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Order ID</th>
                                        <th>Billing</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Method</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);"
                                                class="text-dark font-weight-bold">#SK2540</a> </td>
                                        <td>Matthews</td>
                                        <td>
                                            07 Oct, 20
                                        </td>
                                        <td>
                                            $400
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-cc-mastercard mr-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                data-toggle="modal" data-target=".exampleModal">
                                                Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);"
                                                class="text-dark font-weight-bold">#SK2541</a> </td>
                                        <td>Burnett</td>
                                        <td>
                                            07 Oct, 20
                                        </td>
                                        <td>
                                            $380
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-pill badge-soft-danger font-size-12">Chargeback</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-cc-visa mr-1"></i> Visa
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                data-toggle="modal" data-target=".exampleModal">
                                                Details
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);"
                                                class="text-dark font-weight-bold">#SK2542</a> </td>
                                        <td>Mitchell</td>
                                        <td>
                                            06 Oct, 20
                                        </td>
                                        <td>
                                            $384
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-cc-paypal mr-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                data-toggle="modal" data-target=".exampleModal">
                                                Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);"
                                                class="text-dark font-weight-bold">#SK2543</a> </td>
                                        <td>Barry Dick</td>
                                        <td>
                                            05 Oct, 20
                                        </td>
                                        <td>
                                            $412
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-cc-mastercard mr-1"></i> Mastercard
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                data-toggle="modal" data-target=".exampleModal">
                                                Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);"
                                                class="text-dark font-weight-bold">#SK2544</a> </td>
                                        <td>Ronald</td>
                                        <td>
                                            04 Oct, 20
                                        </td>
                                        <td>
                                            $404
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-warning font-size-12">Refund</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-cc-visa mr-1"></i> Visa
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                data-toggle="modal" data-target=".exampleModal">
                                                Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td><a href="javascript: void(0);"
                                                class="text-dark font-weight-bold">#SK2545</a> </td>
                                        <td>Jacob</td>
                                        <td>
                                            04 Oct, 20
                                        </td>
                                        <td>
                                            $392
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-12">Paid</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-cc-paypal mr-1"></i> Paypal
                                        </td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button"
                                                class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                data-toggle="modal" data-target=".exampleModal">
                                                Details
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>

        </div>
   