<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="http://themepixels.me/azia/img/azia-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/typicons.font/typicons.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('css/azia.css') }}">

</head>
<body class="az-body az-body-sidebar">

<div class="az-sidebar">
    <div class="az-sidebar-header">
        <a href="../template/index.html" class="az-logo">Logo Colegio</a>
    </div><!-- az-sidebar-header -->
    <div class="az-sidebar-loggedin">
        <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
        <div class="media-body">
            <h6>{{ Auth::user()->name  }}</h6>
            <span>{{ Auth::user()->email }}</span>
        </div><!-- media-body -->
    </div><!-- az-sidebar-loggedin -->
    <div class="az-sidebar-body">
        <ul class="nav">
            <li class="nav-label">Menu Principal</li>
            <li class="nav-item {{ request()->is('admin/tablero') || request()->is('admin/tablero/*') ? 'active' : '' }}">
                <a href="{{ route("admin.home") }}" class="nav-link"><i class="typcn typcn-clipboard"></i>Tablero</a>
            </li><!-- nav-item -->
            @can('periods_manage')
                <li class="nav-item {{ request()->is('admin/periods') || request()->is('admin/periods/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.periods.index") }}" class="nav-link"><i class="typcn typcn-document"></i>Periodos</a>
                </li><!-- nav-item -->
            @endcan
            @can('users_manage')
                <li class="nav-item {{ request()->is('admin/students') || request()->is('admin/students/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.home") }}" class="nav-link"><i class="typcn typcn-document"></i>Estudiantes</a>
                </li><!-- nav-item -->
            @endcan
            @can('users_manage')
                <li class="nav-item {{ request()->is('admin/teachers') || request()->is('admin/teachers/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.home") }}" class="nav-link"><i class="typcn typcn-document"></i>Profesores</a>
                </li><!-- nav-item -->
            @endcan
            @can('courses_manage')
                <li class="nav-item {{ request()->is('admin/courses') || request()->is('admin/courses/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.home") }}" class="nav-link"><i class="typcn typcn-document"></i>Cursos</a>
                </li><!-- nav-item -->
            @endcan
            @can('subjects_manage')
                <li class="nav-item {{ request()->is('admin/subjects') || request()->is('admin/subjects/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.home") }}" class="nav-link"><i class="typcn typcn-document"></i>Materias</a>
                </li><!-- nav-item -->
            @endcan
            @can('grades_manage')
                <li class="nav-item {{ request()->is('admin/grades') || request()->is('admin/grades/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.home") }}" class="nav-link"><i class="typcn typcn-document"></i>Notas</a>
                </li><!-- nav-item -->
            @endcan
        </ul><!-- nav -->
    </div><!-- az-sidebar-body -->
</div><!-- az-sidebar -->
<div class="az-content az-content-dashboard-two">
    <div class="az-header">
        <div class="container-fluid">
            <div class="az-header-left">
                <a href="" id="azSidebarToggle" class="az-header-menu-icon"><span></span></a>
            </div><!-- az-header-left -->
            <div class="az-header-center">
                <input type="search" class="form-control" placeholder="Search for anything...">
                <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
            <div class="az-header-right">
                <div class="az-header-message">
                    <a href="app-chat.html"><i class="typcn typcn-messages"></i></a>
                </div><!-- az-header-message -->
                <div class="dropdown az-header-notification">
                    <a href="" class="new"><i class="typcn typcn-bell"></i></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header mg-b-20 d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <h6 class="az-notification-title">Notifications</h6>
                        <p class="az-notification-text">You have 2 unread notification</p>
                        <div class="az-notification-list">
                            <div class="media new">
                                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                                    <span>Mar 15 12:32pm</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media new">
                                <div class="az-img-user online"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                                    <span>Mar 13 04:16am</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                                    <span>Mar 13 02:56am</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                            <div class="media">
                                <div class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></div>
                                <div class="media-body">
                                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                                    <span>Mar 12 10:40pm</span>
                                </div><!-- media-body -->
                            </div><!-- media -->
                        </div><!-- az-notification-list -->
                        <div class="dropdown-footer"><a href="">View All Notifications</a></div>
                    </div><!-- dropdown-menu -->
                </div><!-- az-header-notification -->
                <div class="dropdown az-profile-menu">
                    <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
                    <div class="dropdown-menu">
                        <div class="az-dropdown-header d-sm-none">
                            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                        </div>
                        <div class="az-header-profile">
                            <div class="az-img-user">
                                <img src="https://via.placeholder.com/500x500" alt="">
                            </div><!-- az-img-user -->
                            <h6>{{ Auth::user()->name  }}</h6>
                            <span>{{ Auth::user()->email  }}</span>
                        </div><!-- az-header-profile -->

                        <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
                        <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>

                        <div class="dropdown-item" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="typcn typcn-power-outline"></i>  {{ __('Salir') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>

                    </div><!-- dropdown-menu -->
                </div>
            </div><!-- az-header-right -->
        </div><!-- container -->
    </div><!-- az-header -->
    <div class="az-content-header d-block d-md-flex">
        <div>
            <h2 class="az-content-title mg-b-5 mg-b-lg-8">Hola, Bienvenido de nuevo!</h2>
            <p class="mg-b-0">Este es tu tablero.</p>
        </div>
    </div><!-- az-content-header -->
    <div class="az-content-body">
        <!-- your content goes here -->
        @yield('content')
    </div><!-- az-content-body -->
    <div class="az-footer">
        <div class="container-fluid">
            <span>&copy; 2018 Azia Responsive Bootstrap 4 Dashboard Template</span>
            <span>Designed by: ThemePixels</span>
        </div><!-- container -->
    </div><!-- az-footer -->
</div><!-- az-content -->


<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/ionicons/ionicons.js') }}"></script>

<script src="{{ asset('js/azia.js') }}"></script>
<script>
    $(function(){
        'use strict'

        $('.az-sidebar .with-sub').on('click', function(e){
            e.preventDefault();
            $(this).parent().toggleClass('show');
            $(this).parent().siblings().removeClass('show');
        })

        $(document).on('click touchstart', function(e){
            e.stopPropagation();

            // closing of sidebar menu when clicking outside of it
            if(!$(e.target).closest('.az-header-menu-icon').length) {
                var sidebarTarg = $(e.target).closest('.az-sidebar').length;
                if(!sidebarTarg) {
                    $('body').removeClass('az-sidebar-show');
                }
            }
        });


        $('#azSidebarToggle').on('click', function(e){
            e.preventDefault();

            if(window.matchMedia('(min-width: 992px)').matches) {
                $('body').toggleClass('az-sidebar-hide');
            } else {
                $('body').toggleClass('az-sidebar-show');
            }
        })
    });
</script>
</body>
</html>
