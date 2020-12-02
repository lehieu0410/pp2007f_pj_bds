<!DOCTYPE html>
<html>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:17:23 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="/assets/image/logo/apple-touch-icon.html">
    <link rel="shortcut icon" href="/assets/image/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="/assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->
    @yield('styles')
    <!-- core css -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/css/themify-icons.css" rel="stylesheet">
    <link href="/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/assets/css/animate.min.css" rel="stylesheet">
    <link href="/assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="index.html">
                            <div class="logo logo-dark" style="background-image: url('/assets/image/logo/logo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('/assets/image/logo/logo-white.png')"></div>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                        <li class="search-box">
                            <a class="search-toggle" href="javascript:void(0);">
                                <i class="search-icon mdi mdi-magnify"></i>
                                <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                            </a>
                        </li>
                        <li class="search-input">
                            <input class="form-control" type="text" placeholder="Type to search...">
                            <div class="search-predict">
                                <div class="search-wrapper scrollable">
                                    <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-file p-r-5"></i>
                                            <span>Files</span>
                                        </span>
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                                    <div class="media-img">
                                                        <div class="icon-avatar bg-success">
                                                            <i class="mdi mdi-file-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Document.xls</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                                    <div class="media-img">
                                                        <div class="icon-avatar bg-info">
                                                            <i class="mdi mdi-file-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Mockup.doc</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="media-hover p-h-20">
                                                    <div class="media-img">
                                                        <div class="icon-avatar bg-danger">
                                                            <i class="mdi mdi-file-outline"></i>
                                                        </div>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Document.pdf</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m-h-20 border top"></div>
                                    <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-user p-r-5"></i>
                                            <span>Members</span>
                                        </span>
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-3.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Debra Stewart</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-5.jpg" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Jane Hunt</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search-footer">
                                    <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-apps"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-email-outline font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Email</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-folder-outline font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Files</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi mdi-gauge font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Dashboard</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-play-circle-outline font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Video</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-image-filter font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">image</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="text-center">
                                            <i class="mdi mdi-image-filter-drama font-size-30 icon-gradient-success"></i>
                                            <p class="m-b-0">Cloud</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-ring-outline"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg p-v-0">
                                <li class="p-v-15 p-h-20 border bottom text-dark">
                                    <h5 class="m-b-0">
                                        <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        System shutdown
                                                    </span>
                                                    <span class="sub-title">8 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New User Registered
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-warning">
                                                        <i class="ti-file"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New Attacthemnet
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="ti-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New Order Received
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-v-15 p-h-20 text-center">
                                    <span>
                                        <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="/assets/image/avatars/thumb-13.jpg" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-13.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">Marshall Nichols</span>
                                                <span class="sub-title">UI/UX Desinger</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings p-r-10"></i>
                                        <span>Setting</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-email p-r-10"></i>
                                        <span>Inbox</span>
                                        <span class="badge badge-pill badge-success pull-right">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="m-r-10">
                            <a class="quick-view-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-format-indent-decrease"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
            <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">Dashboard</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.html">Default</a>
                                </li>
                                <li>
                                    <a href="index-analytical.html">Analytical</a>
                                </li>
                                <li>
                                    <a href="index-bank.html">Bank</a>
                                </li>
                                <li>
                                    <a href="index-saas.html">Saas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-file-outline"></i>
                                </span>
                                <span class="title">Forms</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="form-elements.html">Form Elements</a>
                                </li>
                                <li>
                                    <a href="form-layouts.html">Form Layouts</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Form Validation</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">Posts</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{!! Route('viewPost') !!}">Edit Posts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">Users</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href=" {{route(  'userIndex' ) }}  ">All User</a>
                                </li>
                                <li>
                                    <a href="{{ route('createUser') }}">Create New User</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">News</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route(  'listNews' ) }}">All News</a>
                                    <a href="{{route(  'createNews' ) }}">Edit News</a>

                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Categories</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="active">
                                    <a href="{{ route('categoryIndex') }}">All Categories</a>
                                </li>
                                <li>
                                    <a href="{{ route('createCategory') }}">Create New Categories</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">Slides</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{!!route ('Slide')!!}">All Slides</a>
                                    <a href="{{ route('createSlide') }}">Create New Slides</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-tune-vertical"></i>
                                </span>
                                <span class="title">Menus</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('menuIndex') }}">All Menus</a>
                                </li>
                                <li>
                                    <a href="{{ route('createMenu') }}">Create New Menus</a>
                                </li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                <div class="quick-view">
                    <ul class="quick-view-tabs nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#config" role="tab" data-toggle="tab">
                                <span>Config</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#quick-view-chat" role="tab" data-toggle="tab">
                                <span>Chat</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#activity" role="tab" data-toggle="tab">
                                <span>Activity</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content scrollable">
                        <!-- config START -->
                        <div id="config" role="tabpanel" class="tab-pane fade in active">
                            <div class="theme-configurator p-20">
                                <div class="m-v-20 border bottom">
                                    <p class="text-dark text-semibold m-b-0">Solid Header</p>
                                    <p class="m-b-15">Config header background (solid)</p>
                                    <div class="theme-selector p-b-20">
                                        <label>
                                            <input type="radio" value="default" name="header-theme">
                                            <span class="theme-color bg-white border"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="primary" name="header-theme">
                                            <span class="theme-color bg-primary"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="info" name="header-theme">
                                            <span class="theme-color bg-info"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="success" name="header-theme">
                                            <span class="theme-color bg-success"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="warning" name="header-theme">
                                            <span class="theme-color bg-warning"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="danger" name="header-theme">
                                            <span class="theme-color bg-danger"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="dark" name="header-theme">
                                            <span class="theme-color bg-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-v-15 border bottom">
                                    <p class="text-dark text-semibold m-b-0">Gradient Header</p>
                                    <p class="m-b-15">Config header background (gradient)</p>
                                    <div class="theme-selector p-b-15">
                                        <label>
                                            <input type="radio" value="primary-gradient" name="header-theme">
                                            <span class="theme-color bg-gradient-primary"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="info-gradient" name="header-theme">
                                            <span class="theme-color bg-gradient-info"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="success-gradient" name="header-theme">
                                            <span class="theme-color bg-gradient-success"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="warning-gradient" name="header-theme">
                                            <span class="theme-color bg-gradient-warning"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="danger-gradient" name="header-theme">
                                            <span class="theme-color bg-gradient-danger"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-v-15 border bottom">
                                    <p class="text-dark text-semibold m-b-0">Side Nav Color</p>
                                    <p class="m-b-15">Config side nav background</p>
                                    <div class="theme-selector p-b-15">
                                        <label>
                                            <input type="radio" value="default" name="side-nav-color">
                                            <span class="theme-color bg-white border"></span>
                                        </label>
                                        <label>
                                            <input type="radio" value="dark" name="side-nav-color">
                                            <span class="theme-color bg-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="m-v-15">
                                    <p class="text-dark text-semibold m-b-0">RTL</p>
                                    <p class="m-b-15">Toggle right to left</p>
                                    <div class="theme-selector p-b-15">
                                        <div class="switch checkbox-inline">
                                            <input type="checkbox" name="rtl-toogle" id="rtl-toogle">
                                            <label for="rtl-toogle"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- config END -->
                        <!-- chat START -->
                        <div id="quick-view-chat" role="tabpanel" class="tab-pane fade">
                            <div class="quick-view-chat chat">
                                <div class="chat-user-list">
                                    <div class="m-b-30 m-t-20">
                                        <h6 class="p-h-20 text-uppercase text-semibold">Online</h6>
                                        <ul class="list-media">
                                            <li class="list-item unread-msg">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-1.jpg" alt="">
                                                        <span class="status success"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Marshall Nichols</span>
                                                        <span class="sub-title">Here's the story of a man...</span>
                                                        <div class="float-item">
                                                            <span class="chat-counter">2</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item unread-msg">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-2.jpg" alt="">
                                                        <span class="status success"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Susie Willis</span>
                                                        <span class="sub-title">Do you see any Teletubbies...</span>
                                                        <div class="float-item">
                                                            <span class="chat-counter">1</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-3.jpg" alt="">
                                                        <span class="status success"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">Debra Stewart</span>
                                                        <span class="sub-title">Oh my God. I didn't even...</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m-b-30">
                                        <h6 class="p-h-20 text-uppercase text-semibold">Away</h6>
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-4.jpg" alt="">
                                                        <span class="status away"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Francisco Vasquez</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-5.jpg" alt="">
                                                        <span class="status away"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Jane Hunt</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-6.jpg" alt="">
                                                        <span class="status away"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Ava Alexander</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-7.jpg" alt="">
                                                        <span class="status away"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Shane Ross</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m-b-30">
                                        <h6 class="p-h-20 text-uppercase text-semibold">Busy</h6>
                                        <ul class="list-media">
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-8.jpg" alt="">
                                                        <span class="status busy"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Erin Gonzales</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="list-item">
                                                <a href="javascript:void(0);" class="conversation-toggler media-hover p-h-20">
                                                    <div class="media-img">
                                                        <img src="/assets/image/avatars/thumb-9.jpg" alt="">
                                                        <span class="status busy"></span>
                                                    </div>
                                                    <div class="info">
                                                        <span class="title p-t-10">Alan Mills</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="quick-view-conversation conversation">
                                    <div class="conversation-wrapper">
                                        <div class="conversation-header">
                                            <span class="recipient">Susie Willis</span>
                                            <ul class="tools">
                                                <li>
                                                    <a class="text-gray" href="javascript:void(0)">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="text-gray conversation-toggler" href="javascript:void(0)">
                                                        <i class="mdi mdi-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="quick-view-conversation-body conversation-body scrollable">
                                            <div class="msg datetime">
                                                <span>7:57PM</span>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="user-img">
                                                    <img src="/assets/image/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Hey, what are you doing?</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Texting the most beautiful girl in the world.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="user-img">
                                                    <img src="/assets/image/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Oh? How Cute</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Yup but she's not replying so texting you</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="user-img">
                                                    <img src="/assets/image/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Okay</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg datetime">
                                                <span>8:05PM</span>
                                            </div>
                                            <div class="msg msg-recipient">
                                                <div class="user-img">
                                                    <img src="/assets/image/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Bye</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>I'm just kidding..!!</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>Hello</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="msg msg-sent">
                                                <div class="bubble">
                                                    <div class="bubble-wrapper">
                                                        <span>It's me..can you hear me..!!</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="conversation-footer">
                                            <button class="upload-btn">
                                                <i class="ti-face-smile"></i>
                                            </button>
                                            <input class="chat-input" type="text" placeholder="Type a message...">
                                            <button class="sent-btn">
                                                <i class="fa fa-send-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- chat END -->
                        <!-- activity START -->
                        <div id="activity" role="tabpanel" class="tab-pane fade">
                            <div class="quick-view-activity">
                                <ul class="list-media m-t-20">
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-1.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">Marshall Nichols</span>
                                                <span class="sub-title">has replied your mails.</span>
                                                <span class="sub-title font-size-11 p-t-5">8 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-2.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">Susie Willis</span>
                                                <span class="sub-title">commented on your post's</span>
                                                <span class="sub-title font-size-11 p-t-5">12 min ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-primary">
                                                    <i class="ti-settings"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <span class="title">System Notifications</span>
                                                <span class="sub-title">Your account updated</span>
                                                <span class="sub-title font-size-11 p-t-5">2 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-8.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">Erin Gonzales</span>
                                                <span class="sub-title">commented on your post's</span>
                                                <span class="sub-title font-size-11 p-t-5">3 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-info">
                                                    <i class="mdi mdi-file-outline"></i>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <span class="title">New Attachment</span>
                                                <span class="sub-title">3 files has updated</span>
                                                <span class="sub-title font-size-11 p-t-5">5 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-success">
                                                    <span>S</span>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <span class="title">Suzanne Lynch</span>
                                                <span class="sub-title">has sent you a message.</span>
                                                <span class="sub-title font-size-11 p-t-5">9 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-12.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">Riley Newman</span>
                                                <span class="sub-title">commented on your post's</span>
                                                <span class="sub-title font-size-11 p-t-5">10 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <div class="icon-avatar bg-warning">
                                                    <span>FW</span>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <span class="title">Franklin Weaver</span>
                                                <span class="sub-title">has sent you a message.</span>
                                                <span class="sub-title font-size-11 p-t-5">10 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-item border bottom">
                                        <a href="javascript:void(0);" class="media-hover p-20">
                                            <div class="media-img">
                                                <img src="/assets/image/avatars/thumb-11.jpg" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">Darryl Day</span>
                                                <span class="sub-title">commented on your post's</span>
                                                <span class="sub-title font-size-11 p-t-5">12 days ago</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- activity END -->
                    </div>
                </div>
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->
            </div>
            <!-- Page Container END -->

        </div>
    </div>

    <script src="/assets/js/vendor.js"></script>

    <script src="/assets/js/app.min.js"></script>

    <!-- page js -->
    @yield('scripts')
</body>


<!-- Mirrored from themenate.com/applicator/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 07 Jul 2018 11:18:15 GMT -->

</html>