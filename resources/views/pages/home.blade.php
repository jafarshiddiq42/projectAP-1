<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LASER</title>
    <script src="https://kit.fontawesome.com/2df354a6a8.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}">

    <!-- page css -->
    {{-- <link href="{{ asset('assets/vendors/apexcharts/dist/apexcharts.css') }}" rel="stylesheet"> --}}

    <!-- Core css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    @yield('css')

</head>

<body>
    <div class="layout">
        <div class="vertical-layout">
            <!-- Header START -->
            <div class="header-text-dark header-nav layout-vertical">
                <div class="header-nav-wrap">
                    <div class="header-nav-left">
                        <div class="header-nav-item desktop-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                {{-- <i class="nav-icon feather icon-menu icon-arrow-right"></i> --}}
                            </div>
                        </div>
                        <div class="header-nav-item mobile-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-right">
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-notification">
                                <div class="toggle-wrapper" id="nav-notification-dropdown" data-bs-toggle="dropdown">
                                    <i class="header-nav-item-select nav-icon ">Hai {{ Auth::user()->name }}</i>
                                </div>
                                {{-- <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-notification-header">
                                        <h5 class="mb-0">Notifications</h5>
                                        <a href="#" class="font-size-sm">Mark All as Read</a>
                                    </div>
                                    <div class="nav-notification-body">
                                        <div class="nav-notification-item ">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 40px; height: 40px; line-height: 40px;">
                                                <img src="{{ asset('assets/images/avatars/thumb-8.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark">Jean Bowman </span>
                                                    <span>invited you to new project.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-primary feather font-size-lg icon-info avatar avatar-circle"
                                                style="width: 40px; height: 40px; line-height: 40px;"> </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Please submit your daily report.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-success feather font-size-lg icon-info avatar avatar-circle"
                                                style="width: 40px; height: 40px; line-height: 40px;"> </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Your request has been approved.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 40px; height: 40px; line-height: 40px;">
                                                <img src="{{ asset('assets/images/avatars/thumb-4.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark">Jenifer Ruiz </span>
                                                    <span>mentioned you in comment.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-success feather font-size-lg icon-x-circle avatar avatar-circle"
                                                style="width: 40px; height: 40px; line-height: 40px;"> </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Your request has been rejected.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-notification-footer">
                                        <a href="#" class="font-size-sm">View All</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div class="header-nav-item">
                            <div class="header-nav-item-select">
                                <div class="toggle-wrapper" data-bs-toggle="modal" data-bs-target="#quick-view">
                                    <i class="nav-icon feather icon-settings"></i>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select">
                                <div class="toggle-wrapper" id="nav-lang-dropdown" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-circle avatar-image"
                                        style="width: 22px; height: 22px; line-height: 22px;">
                                        <img src="{{ asset('assets/images/thumbs/en_US.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 18px; height: 18px; line-height: 18px;">
                                                <img src="{{ asset('assets/images/thumbs/en_US.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="ms-2">English</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image"
                                                style="width: 18px; height: 18px; line-height: 18px;">
                                                <img src="{{ asset('assets/images/thumbs/fr_FR.png') }}"
                                                    alt="">
                                            </div>
                                            <span class="ms-2">French</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-profile">
                                <div class="toggle-wrapper" id="nav-profile-dropdown" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-circle avatar-image"
                                        style="width: 35px; height: 35px; line-height: 35px;">
                                        <img src="{{ asset('assets/images/avatars/thumb-1.jpg') }}" alt="">
                                    </div>
                                    <span class="fw-bold mx-1"></span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-profile-header">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image">
                                                <img src="{{ asset('assets/images/avatars/thumb-1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex flex-column ms-1">
                                                <span class="fw-bold text-dark">Admin</span>

                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <i class="font-size-lg me-2 feather icon-user"></i>
                                            <span>Profile</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <i class="font-size-lg me-2 feather icon-settings"></i>
                                            <span>Settings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center"><i
                                                class="font-size-lg me-2 feather icon-life-buoy"></i>
                                            <span>Support</span>
                                        </div>
                                    </a>
                                    <a href="" class="dropdown-item">
                                        <div class="d-flex align-items-center"> <a class="dropdown-item"
                                                href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                                {{ __('keluar') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo">
                        <img class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}"
                            style="max-height: 70px;" alt="logo">
                    </div>
                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                </div>
                <ul class="nav-menu">
                    <li class="nav-menu-item router-link-active">
                        <a href="/">
                            <i class="feather icon-home"></i>
                            <span class="nav-menu-item-title">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="nav-group-title">APPS</li>
                    <li class="nav-menu-item">
                        <a href="v-mail.html">
                            <i class="feather icon-mail"></i>
                            <span class="nav-menu-item-title">Mail</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="v-chat.html">
                            <i class="feather icon-message-circle"></i>
                            <span class="nav-menu-item-title">Chat</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="v-calendar.html">
                            <i class="feather icon-calendar"></i>
                            <span class="nav-menu-item-title">Calendar</span>
                        </a>
                    </li> --}}

                    {{-- <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-box"></i>
                            <span>UI Elements</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="/dataservis">Avatar</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-alert.html">Alert</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-badge.html">Badge</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-buttons.html">Buttons</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-cards.html">Cards</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-icons.html">Icons</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-lists.html">Lists</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-typography.html">Typography</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-package"></i>
                            <span>Components</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="v-accordion.html">Accordion</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-carousel.html">Carousel</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-dropdown.html">Dropdown</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-modals.html">Modals</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-toasts.html">Toasts</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-popover.html">Popover</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-progress.html">Progress</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-tabs.html">Tabs</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-submenu">
                        
                            <li class="nav-group-title"> DATA MASTER</li>
                            <li class="nav-menu-item">
                                <a href="/pelanggan/index">Data Pelanggan</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="/mekanik/index">Data Mekanik</a>
                            </li>

                            <li class="nav-menu-item">
                                <a href="/layanan/index">Data Layanan</a>
                            </li>
                           
                        
                   
                            <li class="nav-group-title">Proses</li>
                           
                            <li class="nav-menu-item">
                                <a href="/servis/index">Data Servis</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="/transaksi/index">Data Transaksi</a>
                            </li>
                        
                    </li>
                    <li class="nav-group-title"> Laporan</li>
                    <li class="nav-menu-item">
                        <a href="/laporan">Laporan Servis</a>
                    </li>


                </ul>
                </li>
                


                {{-- <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-grid"></i>
                            <span>Tables</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="v-basic-table.html">Basic Table</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="v-data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu-item">
                        <a href="v-chart.html">
                            <i class="feather icon-bar-chart"></i>
                            <span class="nav-menu-item-title">Chart</span>
                        </a>
                    </li> --}}
                <li class="nav-submenu">
                    <a class="nav-submenu-title">
                        <i class="feather icon-settings"></i>
                        <span>AUTH</span>
                        <i class="nav-submenu-arrow"></i>
                    </a>
                    <ul class="nav-menu menu-collapse">



                        <li class="nav-menu-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                <span>{{ __('KELUAR') }} </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        {{-- <li class="nav-menu-item">
                                <a href="v-user-list.html">User List</a>
                            </li> --}}
                    </ul>
                </li>
                {{-- <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-lock"></i>
                            <span>Auth</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="login.html">Login</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="login-v2.html">Login v2</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="login-v3.html">Login v3</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="register.html">Register</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="register-v2.html">Register v2</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="register-v3.html">Register v3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-slash"></i>
                            <span>Errors</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="error.html">Error 1</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="error-v2.html">Error 2</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <!-- Side Nav END -->

            <!-- Content START -->

            <div class="content">
                @yield('content')
            </div>

            <!-- Quick View START -->
            {{-- <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog right">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title pull-left">Theme Config</h4>
                            <button type="button" class="close pull-right" data-bs-dismiss="modal">
                                <span></span>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="mb-4">
                                <h5 class="mb-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex mt-2">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked
                                            value="#ffffff">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="#11a1fd">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="#00c569">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-info" name="header-theme" type="radio" value="#5a75f9">
                                        <label for="header-info"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-warning" name="header-theme" type="radio"
                                            value="#ffc833">
                                        <label for="header-warning"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio"
                                            value="#f46363">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-theme-toggle"
                                        id="side-nav-theme-toggle">
                                    <label class="form-check-label" for="side-nav-theme-toggle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-fold-toogle"
                                        id="side-nav-fold-toogle">
                                    <label class="form-check-label" for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                            <div>
                                <h5 class="mb-0">Horizontal Layout</h5>
                                <p>Set Horizontal Layout</p>
                                <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-outline-primary active"
                                        aria-current="page">Vertical</a>
                                    <a href="h-index.html" class="btn btn-outline-primary">Horizontal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Quick View END -->
            <!-- Footer START -->
            <div class="footer">
                <div class="footer-content">
                    {{-- <p class="mb-0">Copyright © 2021 Theme_Nate. All rights reserved.</p> --}}
                    <span>
                        {{-- <a href="" class="text-gray me-3">Term &amp; Conditions</a>
                        <a href="" class="text-gray">Privacy &amp; Policy</a> --}}
                    </span>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content END -->
    </div>
    </div>
    @yield('script')

    <!-- Core Vendors JS -->
    <script src="{{ asset('assets/js/vendors.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
    <!-- page js -->
    {{-- <script src="{{ asset('assets/vendors/apexcharts/dist/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>


</body>

</html>
