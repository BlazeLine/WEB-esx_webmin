<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/img/favicon.png')}}">

    <title>{{ \App\Settings::Field('servername') }} | Administration </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS - REQUIRED - START -->
    <!-- Batch Icons -->
    <link rel="stylesheet" href="{{ asset('storage/assets/fonts/batch-icons/css/batch-icons.css')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('storage/assets/css/bootstrap/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{ asset('storage/assets/css/bootstrap/mdb.min.css')}}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" href="{{ asset('storage/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="{{ asset('storage/assets/css/hamburgers/hamburgers.css')}}">

    <!-- CSS - REQUIRED - END -->

    <!-- CSS - OPTIONAL - START -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('storage/assets/fonts/font-awesome/css/font-awesome.min.css')}}">

    @yield("CustomCSS")

    <!-- CSS - OPTIONAL - END -->

    <!-- QuillPro Styles -->
    <link rel="stylesheet" href="{{ asset('storage/assets/css/quillpro/quillpro.css')}}">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="px-0 bg-dark bg-gradient sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="logo-nav-item">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('storage/assets/img/logo-white.png') }}" width="145" height="32.3" alt="QuillPro">
                    </a>

                </li>
                @include('Manager.layouts.sidebar')
            </ul>
        </nav>

        <div class="right-column">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <button class="hamburger hamburger--slider" type="button" data-target=".sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Sidebar">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                </button>

                <div class="navbar-collapse" id="navbar-header-content">
                    <ul class="navbar-nav navbar-language-translation mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar-dropdown-menu-link" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-book-alt-"></i>
                                English
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbar-dropdown-menu-link">
                                <li><a class="dropdown-item" href="#">Français</a></li>
                                <li><a class="dropdown-item" href="#">Deutsche</a></li>
                                <li><a class="dropdown-item" href="#">Español</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-notifications float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbar-notification-search" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-search"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-fullscreen" aria-labelledby="navbar-notification-search">
                                <li>
                                    <form class="form-inline my-2 my-lg-0 no-waves-effect">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
													<button class="btn btn-primary btn-gradient waves-effect waves-light" type="button">Search</button>
												</span>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-calendar" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-calendar"></i>
                                <span class="notification-number">6</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-calendar">
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Meeting with Project Manager</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">Right now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Sales Call</h6>
                                            <div class="notification-text">
                                                Nibh amet cras sit libero
                                            </div>
                                            <span class="notification-time">One hour from now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Email CEO new expansion proposal</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">In 3 days</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-calendar batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Team building exercise</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">In one week</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle no-waves-effect" id="navbar-notification-misc" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <i class="batch-icon batch-icon-bell"></i>
                                <span class="notification-number">4</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-menu-md" aria-labelledby="navbar-notification-misc">
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-bell batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">General Notification</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">Just now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-cloud-download batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Your Download Is Ready</h6>
                                            <div class="notification-text">
                                                Nibh amet cras sit libero
                                            </div>
                                            <span class="notification-time">5 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-tag-alt-2 batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">New Order</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">Yesterday</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="media">
                                    <a href="task-list.html">
                                        <i class="batch-icon batch-icon-pull batch-icon-xl d-flex mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 notification-heading">Pull Request</h6>
                                            <div class="notification-text">
                                                Cras sit amet nibh libero
                                            </div>
                                            <span class="notification-time">3 day ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-5 navbar-profile">

                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" id="navbar-dropdown-navbar-profile" data-toggle="dropdown" data-flip="false" aria-haspopup="true" aria-expanded="false">
                                <div class="profile-name">
                                    {{ Auth::user()->username }}
                                </div>
                                <div class="profile-picture bg-gradient bg-primary has-message float-right">
                                    <img src="{{ Auth::user()->avatar }}" width="44" height="44">
                                </div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-navbar-profile">
                                <li><a class="dropdown-item" href="profiles-member-profile.html">Profile</a></li>
                                <li>
                                    <a class="dropdown-item" href="mail-inbox.html">
                                        Messages
                                        <span class="badge badge-danger badge-pill float-right">3</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="profiles-member-profile.html">Settings</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                        Déconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="main-content p-5" role="main">


                @yield('content')

                <div class="row mb-4">
                    <div class="col-md-12">
                        <footer>
                            <div class="pull-right hidden-xs">
                                Développer par : <a href="https://github.com/MrLutin">Mr Lutin</a> & <a href="https://github.com/renaiku">Renaiku</a> avec <span style="color: red">&hearts;</span>
                            </div>
                            <!-- Default to the left -->
                            <strong>Copyright &copy; {{ date('Y') }}  {{ config('app.name') }}.</strong> All rights reserved.
                        </footer>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- SCRIPTS - REQUIRED START -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Bootstrap core JavaScript -->
<!-- JQuery -->
<script type="text/javascript" src="{{ asset('storage/assets/js/jquery/jquery-3.1.1.min.js')}}"></script>
<!-- Popper.js - Bootstrap tooltips -->
<script type="text/javascript" src="{{ asset('storage/assets/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{ asset('storage/assets/js/bootstrap/bootstrap.min.js')}}"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{ asset('storage/assets/js/bootstrap/mdb.min.js')}}"></script>
<!-- Velocity -->
<script type="text/javascript" src="{{ asset('storage/assets/plugins/velocity/velocity.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('storage/assets/plugins/velocity/velocity.ui.min.js')}}"></script>
<!-- Custom Scrollbar -->
<script type="text/javascript" src="{{ asset('storage/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- jQuery Visible -->
<script type="text/javascript" src="{{ asset('storage/assets/plugins/jquery_visible/jquery.visible.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="{{ asset('storage/assets/js/misc/ie10-viewport-bug-workaround.js')}}"></script>

<!-- SCRIPTS - REQUIRED END -->

<!-- SCRIPTS - OPTIONAL START -->
<script type="text/javascript" src="{{ asset('storage/assets/js/misc/holder.min.js')}}"></script>

<!-- Notification -->
@include('sweetalert::cdn')
@include('sweetalert::view')

@yield('Javascript')

<!-- SCRIPTS - OPTIONAL END -->

<!-- QuillPro Scripts -->

<script type="text/javascript" src="{{ asset('storage/assets/js/scripts.js')}}"></script>
<script type="text/javascript" src="{{ asset('storage/js/api.min.js')}}"></script>
</body>
</html>
