<!doctype html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta http-equiv="Content-Language" content="en">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Forms Wizard - Easily create beautiful form multi step wizards!</title>
 <meta name="viewport"
     content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
 <meta name="description" content="Easily create beautiful form multi step wizards!">

 <!-- Disable tap highlight on IE -->
 <meta name="msapplication-tap-highlight" content="no">

 <link href="/css/main.css" rel="stylesheet">
 <link href="/css/custom.css" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</head>

<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <!-- Top Nav -->
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                        data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button"
                    class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>

        <!-- 
                    TOP PANEL TO CONTAIN
                -   Login Out
                -   Username
                -->
        <div class="app-header__content">
            <!-- Left -->
            <div class="app-header-left">

            </div>

            <!-- Right -->
            <div class="app-header-right">

                <div class="card-header-tab card-header-tab-animation card-header">
                    <ul class="nav">
                        <li class="nav-item">
                            <span><i class="lnr-user icon-gradient bg-love-kiss"></i></span>
                            <a data-toggle="tab" href="#tabs-eg-77" class="nav-link">{{ auth()->user()->name }}</a>
                        </li>
                        {{-- <li class="nav-item">
                            <span><i class="lnr-power-switch icon-gradient bg-love-kiss"></i></span>
                            <a href="{{ route('logout') }}" class="nav-link second-tab-toggle">Logout</a>
                        </li> --}}
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                            {{-- <span><i class="lnr-power-switch icon-gradient bg-love-kiss"></i></span> --}}
                            <button type="submit" class="nav-link second-tab-toggle">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    <!-- Top End -->

    <div class="app-main">

        <!-- Side Nav -->
        <div class="app-sidebar sidebar-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading" style="color: #13b966">Menu</li>
                        <li class="mm-active">
                            <a href="#">
                                <i class="metismenu-icon pe-7s-rocket mm-active"></i>Dashboards
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul class="mm-show mm-active">
                                <li>
                                    <a href="{{ route('campaign') }}">
                                        <i class="metismenu-icon"></i>Start Campaign
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('report') }}">
                                        <i class="metismenu-icon">
                                        </i>Campaign Report
                                    </a>
                                </li>
                                <li>
                                    <a href="status">
                                        <i class="metismenu-icon"></i>Server Status
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('payment') }}">
                                        <i class="metismenu-icon">
                                        </i>Billing
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Side Nav End -->
 @yield('content')
 
    </div>
</div>


 <script src="{{ asset('js/app.js') }}" defer></script>
 <script type="text/javascript" src="/js/main.js"></script>
</body>

</html>