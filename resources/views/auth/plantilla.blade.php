<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Icono-->
    <link rel="shortcut icon" href=https://cescorp-americas.com/wp-content/uploads/2019/02/favicon.ico>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('cescorp-americas/admin/css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> CESCORP-AMERICAS</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <a href="{{ url('/') }}"><img class="" src="{{asset('cescorp-americas/img/logo.png')}}" alt="User Image" ></a>
      </div>
      @yield('content')
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="{{asset('cescorp-americas/admin/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('cescorp-americas/admin/js/popper.min.js')}}"></script>
    <script src="{{asset('cescorp-americas/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cescorp-americas/admin/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('cescorp-americas/admin/js/plugins/pace.min.js')}}"></script>
  </body>
</html>
