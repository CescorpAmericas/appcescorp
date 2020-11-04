<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>CESCORP-AMERICAS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Icono-->
    <link rel="shortcut icon" href=https://cescorp-americas.com/wp-content/uploads/2019/02/favicon.ico>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('cescorp-americas/admin/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cescorp-americas/css/estilos.css') }}">
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="{{ url('/') }}">{{ config('Cescorp-Americas', 'Cescorp-Americas') }}</a>

      <!-- Sidebar toggle button-->
      <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <!--<input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>-->
        </li>
        <!--Notification Menu-->

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out fa-lg"></i> Cerrar sesión</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('/home') }}"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Inicio</span></a></li>
        <li><a class="app-menu__item" href="/embarque_terrestre"><i class="app-menu__icon fa fa-truck"></i><span class="app-menu__label">Embarques Terrestres</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Administración</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            @can('shipments.index')
            <li><a class="treeview-item" href="{{ route('shipments.index')}}"><i class="icon fa fa-circle-o"></i> Embarques</a></li>
            @endcan
            @can('shipments.index')
            <li><a class="treeview-item" href="{{ route('factemitidas.index')}}"><i class="icon fa fa-circle-o"></i> Facturas Emitidas</a></li>
            @endcan
            @can('factrecibidas.index')
            <li><a class="treeview-item" href="{{ route('factrecibidas.index') }}"><i class="icon fa fa-circle-o"></i>Fact recibidas</a></li>
            @endcan
            <!--<li><a class="treeview-item" href="/fact_recibidas"><i class="icon fa fa-circle-o"></i>Fact recibidas2</a></li>-->
            <li><a class="treeview-item" href="/balance"><i class="icon fa fa-circle-o"></i> Balance</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-desktop"></i><span class="app-menu__label">Operaciones y Tráfico</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/posibles_proveedores"><i class="icon fa fa-circle-o"></i> Posibles Proveedores</a></li>
            <li><a class="treeview-item" href="/proveedores"><i class="icon fa fa-circle-o"></i> Proveedores</a></li>
            <li><a class="treeview-item" href="operaciones_embarques" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Embarques</a></li>
            <!--<li><a class="treeview-item" href="/reporte_viajes1" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Reporte Viajes1</a></li>-->
            @can('repviajes.index')
            <li><a class="treeview-item" href="{{ route('repviajes.index') }}"><i class="icon fa fa-circle-o"></i>Reporte Viajes</a></li>
            @endcan
            <!--<li><a class="treeview-item" href="/reporte_operaciones" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Reporte Operaciones</a></li>-->

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Ventas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href=""><i class="icon fa fa-circle-o"></i> Cotizaciones</a></li>
            <li><a class="treeview-item" href="" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Calendario</a></li>
            <li><a class="treeview-item" href="" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Seguimiento Ventas</a></li>
            <li><a class="treeview-item" href="/ventas_prospectos" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Prospectos</a></li>
            <li><a class="treeview-item" href="/posibles_clientes" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Posibles Clientes</a></li>
            <li><a class="treeview-item" href="clientes" class="icon fa fa-circle-o"><i class="icon fa fa-circle-o"></i> Clientes</a></li>
          </ul>
        </li>
        @can('users.index')
        <li><a class="app-menu__item" href="{{ route('users.index')}}"><i class="app-menu__icon fa fa-user-o"></i><span class="app-menu__label">Usuarios</span></a></li>
        @endcan
        @can('roles.index')
        <li><a class="app-menu__item" href="{{ route('roles.index')}}"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Roles</span></a></li>
        @endcan
      </ul>
    </aside>
    <main class="app-content">

      @if(session('info'))
      <div class="app-title">
          <div class="row">
            <div class="col-md-12">
              <div class="alert alert-success">
                {{ session('info') }}
              </div>
            </div>
          </div>
      </div>
      @endif

      @yield('content')
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('cescorp-americas/admin/js/jquery-3.2.1.min.js') }} "></script>
    <script src="{{ asset('cescorp-americas/admin/js/popper.min.js') }} "></script>
    <script src="{{ asset('cescorp-americas/admin/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('cescorp-americas/admin/js/main.js') }} "></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('cescorp-americas/admin/js/plugins/pace.min.js') }} "></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{ asset('cescorp-americas/admin/js/plugins/chart.js') }}"></script>
    <!-- Page specific javascripts notificaciones-->
    <script type="text/javascript" src="{{ asset('cescorp-americas/admin/js/plugins/bootstrap-notify.min.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
  <!--<script src="js/plugins/pace.min.js"></script>-->
    <!-- Page specific javascripts Calendario-->
    <script type="text/javascript" src=" {{ asset('cescorp-americas/admin/js/plugins/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('cescorp-americas/admin/js/plugins/select2.min.js') }}"></script>

    <!--javascripts cescorp-->
    <script type="text/javascript" src="{{ asset('cescorp-americas/js/cescorp.js') }}"></script>

    <!--javascripts personalizada-->
    @yield('scripts')
    <!--javascripts personalizada eliminar embarques-->
    <script type="text/javascript" src="{{ asset('cescorp-americas/js/eliminar.js') }}"></script>
  </body>
</html>
