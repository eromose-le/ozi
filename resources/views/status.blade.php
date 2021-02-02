@extends('layouts.app')

@section('content')
    
<!-- Content -->
<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- CMS DASHBOARD -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
                    </div>
                    <div>Ozi Dashboard
                        <div class="page-title-subheading">Overview of Analytics and Service Runtime state
                        </div>
                    </div>
                </div>
                <!-- ... -->
            </div>
        </div>
        <!-- CMS DASHBOARD END -->


        <div class="tabs-animation">

            <!-- Over View -->
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-night-fade">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Orders</div>
                                <div class="widget-subheading">Last year expenses</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>1896</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Clients</div>
                                <div class="widget-subheading">Total Clients Profit</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>$ 568</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-happy-green">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Followers</div>
                                <div class="widget-subheading">People Interested</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>46%</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Over View End -->

            <!-- Analytics -->
            <div class="row">

                <div class="col-md-12 col-lg-6 col-xl-5">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"></i>
                                Sales Report
                            </div>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#tabs-eg-77" class="active nav-link">Last</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#tabs-eg-88"
                                        class="nav-link second-tab-toggle">Current</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pr-3 pl-3">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <small class="opacity-5">$</small>
                                                                <span>368</span>
                                                            </div>
                                                            <div
                                                                class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                Total Leads</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                <div id="dashboard-sparkline-carousel-3"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6
                                        class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                        Monthly Analytics</h6>
                                </div>
                                <div class="tab-pane fade" id="tabs-eg-88">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content p-3">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <small class="opacity-5">$</small>
                                                                <span>851</span>
                                                            </div>
                                                            <div
                                                                class="widget-title ml-2 opacity-5 font-size-lg text-muted">
                                                                Sales Total</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                <div id="dashboard-sparklines-333"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <h6
                                        class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                        Last
                                        Month Highlights</h6>
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <ul
                                                class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ella-Rose Henry
                                                                </div>
                                                                <div class="widget-subheading">Web Developer
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>129</span>
                                                                    <small class="text-danger pl-2">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/10.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ruben Tillman
                                                                </div>
                                                                <div class="widget-subheading">UI Designer
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>54</span>
                                                                    <small class="text-success pl-2">
                                                                        <i class="fa fa-angle-up"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/9.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Vinnie Wagstaff
                                                                </div>
                                                                <div class="widget-subheading">Java
                                                                    Programmer</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>429</span>
                                                                    <small class="text-warning pl-2">
                                                                        <i class="fa fa-dot-circle"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/5.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ella-Rose Henry
                                                                </div>
                                                                <div class="widget-subheading">Web Developer
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>129</span>
                                                                    <small class="text-danger pl-2">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/8.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ruben Tillman
                                                                </div>
                                                                <div class="widget-subheading">UI Designer
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>54</span>
                                                                    <small class="text-success pl-2">
                                                                        <i class="fa fa-angle-up"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/5.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ella-Rose Henry
                                                                </div>
                                                                <div class="widget-subheading">Web Developer
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>129</span>
                                                                    <small class="text-danger pl-2">
                                                                        <i class="fa fa-angle-down"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle"
                                                                    src="assets/images/avatars/4.jpg"
                                                                    alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Ruben Tillman
                                                                </div>
                                                                <div class="widget-subheading">UI Designer
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">$</small>
                                                                    <span>54</span>
                                                                    <small class="text-success pl-2">
                                                                        <i class="fa fa-angle-up"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- BANDWIDTH REPORTS -->
                <div class="col-md-12 col-lg-6 col-xl-7">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                Bandwidth Reports
                            </div>

                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tab-eg-55">
                                <div class="widget-chart p-0">
                                    <div id="bar-vertical-candle-lg"></div>
                                    <div class="widget-chart-content">
                                        <div class="widget-description mt-0 text-warning">
                                            <i class="fa fa-arrow-left"></i>
                                            <span class="pl-1">175.5%</span>
                                            <span class="text-muted opacity-8 pl-1">increased server
                                                resources</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                63%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Generated
                                                                Leads</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-danger"
                                                                role="progressbar" aria-valuenow="63"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 63%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                32%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Submitted
                                                                Tickers</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-success"
                                                                role="progressbar" aria-valuenow="32"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 32%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                71%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Server
                                                                Allocation</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-primary"
                                                                role="progressbar" aria-valuenow="71"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 71%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                41%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Generated
                                                                Leads</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-warning"
                                                                role="progressbar" aria-valuenow="41"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 41%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-eg-66">
                                <div class="widget-chart p-0">
                                    <div id="dashboard-sparkline-37"></div>
                                    <div class="widget-chart-content">
                                        <div class="widget-description mt-0 text-success">
                                            <i class="fa fa-arrow-up"></i>
                                            <span class="pr-1">37.2%</span>
                                            <span class="text-muted opacity-8">performance increase</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2 card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                23%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Deploys</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-warning"
                                                                role="progressbar" aria-valuenow="23"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 23%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                76%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Traffic</div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-info"
                                                                role="progressbar" aria-valuenow="76"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 76%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                83%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Servers Load
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-danger"
                                                                role="progressbar" aria-valuenow="83"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 83%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="widget-content">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-numbers fsize-3 text-muted">
                                                                48%</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="text-muted opacity-6">Reportd Bugs
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-progress-wrapper mt-1">
                                                        <div
                                                            class="progress-bar-sm progress-bar-animated-alt progress">
                                                            <div class="progress-bar bg-alternate"
                                                                role="progressbar" aria-valuenow="48"
                                                                aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 48%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BANDWIDTH REPORTS END-->

            </div>
            <!-- Analytics End -->


        </div>

    </div>

    <!-- Footer -->
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">

                <div class="app-footer-left">
                    <div class="footer-dots">

                        <div class="dots-separator"></div>

                        <li class="nav-item">
                            <a>
                                Copyright © 2021 Ozi is a product of Ozi Technologies. Proudly Made in
                                Nigeria. All Rights Reserved.
                            </a>
                        </li>

                        <div class="dots-separator"></div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="app-footer-right">
                    <ul class="header-megamenu nav">

                        <div class="dropdown">
                            <a class="dot-btn-wrapper" aria-haspopup="true" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05"
                                            style="background-image: url('assets/images/dropdown-header/city2.jpg');">
                                        </div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span> USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span>France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span>Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                </button>
                            </div>
                        </div>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


</div>
<!-- Content End -->

<div class="app-drawer-overlay d-none animated fadeIn"></div>

@endsection