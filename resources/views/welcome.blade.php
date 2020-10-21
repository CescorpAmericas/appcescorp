<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href=https://cescorp-americas.com/wp-content/uploads/2019/02/favicon.ico>

        <title>CESCORP-AMERICAS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
              background-color: #3e3e3e;
              color: white;
              font-family: 'Arial', sans-serif;
              font-weight: 100;
              height: 100vh;
              margin: 0;
            }
            .imgpequeña{
              height: 350px;
            }
            .page-error {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
                  -ms-flex-align: center;
                      align-items: center;
              -webkit-box-pack: center;
                  -ms-flex-pack: center;
                      justify-content: center;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
                  -ms-flex-direction: column;
                      flex-direction: column;
              margin-bottom: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #f7b616;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">iniciar sesión</a>
                      <a href="{{ route('register') }}">Registrarse</a>
                  @endauth
              </div>
          @endif
          <div class="page-error title content">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <img class="imgpequeña" src="{{asset('cescorp-americas/img/LOGO2.png')}}" alt="">
          </div>
      </div>
    </body>
</html>
