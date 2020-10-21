@extends('auth.plantilla')

@section('content')
<div class="login-box" style="min-width: 350px;min-height: 450px;">
  <form class="login-form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Iniciar sesión</h3>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="control-label">Nombre de usuario</label>

        <div class="">
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="control-label">Contraseña</label>

        <div class="">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <a class="btn btn-link" href="{{ route('password.request') }}">
              ¿Has olvidado tu contraseña?
            </a>
        </div>
    </div>
    <div class="form-group btn-container">
      <button class="btn btn-primary btn-block" type="submit" ><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN</button>
    </div>
  </form>
</div>
@endsection
