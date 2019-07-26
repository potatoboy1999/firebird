<!Doctype html>
<html>
<head>
    <title>Xafiro Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}"> <!-- this mus be first os JS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/sandbox/datepicker3.css') }}"  />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/padd-mr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}">
</head>
<body class="app sidebar-mini">
    <header class="app-header">
        <a class="app-header__logo" href="{{ url('/admin/businesses') }}">Firebird</a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a> <!-- Sidebar toggle button-->
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <!--li><a class="dropdown-item" href="{{ url('admin/profile/show') }}"><i class="fa fa-user fa-lg"></i> Perfil</a></li-->
                    <li>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out fa-lg"></i> Cerrar Sesión
                        </a>
                        <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ strtoupper('ADMIN') }}</p>
          <p class="app-sidebar__user-designation">ADMINISTRADOR</p>
        </div>
      </div>
      <ul class="app-menu">
        <?php
          $links = [
            //'dashboard'=>['status'=>'','url'=>'admin/home','name'=>'Inicio','icon'=>'fa-dashboard'],
            'books'=>['status'=>'','url'=>'books','name'=>'Libros','icon'=>'fa-book'],
          ];
          if(isset($view)) $links[$view]['status'] = 'active';
          foreach ($links as $link) {?>
            <li>
                <a class="app-menu__item <?= $link['status'] ?>" href="{{ url($link['url']) }}">
                    <i class="app-menu__icon fa <?= $link['icon'] ?>" ></i>
                    <span class="app-menu__label"><?= $link['name'] ?></span>
                </a>
            </li>
        <?php } ?>
      </ul>
    </aside>
    @yield('content')
    <div id="contentModal" class="modal fade" role="dialog" tabindex="-1" style="display: none;" data-backdrop="static"></div>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/pace.min.js') }}"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
    <script type="text/javascript" src="{{ asset('libs/sandbox/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('libs/sandbox/bootstrap-datepicker.es.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    @if(false)
    <script type="text/javascript" src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/jquery-ui.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script>
    @endif
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">base_url = "{{ url('/') }}";</script>
    <script src="{{ asset('js/global.js') }}"></script>
</body>
</html>
