<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Cabin Hotel PMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description"
        content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image"
        content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('css/volt.css') }}" rel="stylesheet">
    @stack('css')

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body onload="zoom()">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="index.html">
            <img class="navbar-brand-dark" src="{{ asset('assets/img/brand/light.svg') }}" alt="Volt logo" /> <img
                class="navbar-brand-light" src="{{ asset('assets/img/brand/dark.svg') }}" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div
                class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                            class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2>
                        <a href="pages/examples/sign-in.html"
                            class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
            @if( auth()->user()->role_id == 2)
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.reservation.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Reservasi Kamar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.finance.index') }}" class="nav-link">
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <span class="sidebar-text">Finance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.bookinglist.index') }}" class="nav-link">
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                </path>
                            </svg></span>
                        <span class="sidebar-text">Booking</span>
                    </a>
                </li>
                @endif
                @if( auth()->user()->role_id == 3)
                <li class="nav-item">
                    <a href="{{ route('financeHO.index') }}" class="nav-link">
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <span class="sidebar-text">Finance</span>
                    </a>
                </li>
                @endif
                @if( auth()->user()->role_id == 4)
                <li class="nav-item">
                    <a href="{{ route('supervisor.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <span
                    class="nav-link  collapsed  d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-app">
                    <span>
                        <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                        </span> 
                        <span class="sidebar-text">Room Management</span>
                    </span>
                    <span class="link-arrow">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </span>
                    </span>
                    <div class="multi-level collapse "
                    role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                        <a class="nav-link" href="{{ route('supervisor.room-management.index') }}">
                            <span class="sidebar-text">Room</span>
                        </a>
                        <a class="nav-link" href="{{ route('supervisor.room-management.room-price.index') }}">
                            <span class="sidebar-text">Room Price</span>
                        </a>
                        <a class="nav-link" href="{{ route('supervisor.room-management.room-type.index') }}">
                            <span class="sidebar-text">Room Type</span>
                        </a>
                        </li>
                    </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </nav>

    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        <form class="navbar-search form-inline w-100" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft"
                                    placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-dark notification-bell unread dropdown-toggle"
                                data-unread-notifications="true" href="#" role="button"
                                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                <div class="list-group list-group-flush">
                                    <a href="#"
                                        class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small class="text-danger">a few moments ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">Added you to an event "Project
                                                    stand-up" tomorrow at 12:30 AM.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="{{ asset('assets/img/team/profile-picture-2.jpg') }}"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small class="text-danger">2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">You've been assigned a task for
                                                    "Awesome new project".</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 m-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>5 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">Tagged you in a document called
                                                    "Financial plans",</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="{{ asset('assets/img/team/profile-picture-4.jpg') }}"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>1 d ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set
                                                    for the presentation?"</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="{{ asset('assets/img/team/profile-picture-5.jpg') }}"
                                                    class="avatar-md rounded">
                                            </div>
                                            <div class="col ps-0 ms-2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="h6 mb-0 text-small">{{ auth()->user()->name }}</h4>
                                                    </div>
                                                    <div class="text-end">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="font-small mt-1 mb-0">New message: "We need to improve the
                                                    UI/UX for the landing page."</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                        <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        View all
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Image placeholder"
                                        src="{{ asset('assets/img/team/profile-picture-3.jpg') }}">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small fw-bold text-gray-900">{{ auth()->user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    My Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Messages
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Support
                                </a>
                                <div role="separator" class="dropdown-divider my-1"></div>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('form-logout').submit()">
                                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    Logout
                                    <form id="form-logout" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--**********************************
            Sidebar end
        ***********************************-->
        @yield('content')
        @include('layout.footer')
