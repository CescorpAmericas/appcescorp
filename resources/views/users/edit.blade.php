@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-user-o"></i> USUARIO</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('users.index')}}"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a></li>
  </ul>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="tile">
                <div class="tile-body">
                  {!! Form::model($user, ['route' => ['users.update', $user->id],
                  'method' => 'PUT']) !!}

                  @include('users.partials.form')

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
