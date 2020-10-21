
@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-user-o"></i> USUARIOS</h1>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
          <form class="form-inline my-2 my-lg-0 justify-content-end">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
      </div>
      <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <!--<td width="10px">
                  @can('users.show')
                  <a href="{{ route('users.show', $user->id) }}"
                  class="btn btn-sm btn-primary">
                   Ver
                  </a>
                  @endcan
                </td>
                <td width="10px">
                  @can('users.edit')
                  <a href="{{ route('users.edit', $user->id) }}"
                  class="btn btn-sm btn-secondary">
                    <i class="fa fa-pencil" ></i>
                  </a>
                  @endcan
                </td width="10px">
                <td>
                  @can('users.destroy')
                    {!! Form::open(['route' => ['users.destroy', $user->id],
                    'method'=>'DELETE']) !!}
                        <button class="btn btn-sm btn-danger">
                          <i class="fa fa-trash"></i>
                        </button>
                    {!! Form::close() !!}
                  @endcan
                </td>-->
                <td>
                  <div class="btn-group">
                  <!--@can('users.show')
                  <a href="{{ route('users.show', $user->id) }}"
                  class="btn btn-cescorp">
                   Ver
                 </a>-->
                  @endcan
                  @can('users.edit')
                  <a href="{{ route('users.edit', $user->id) }}"
                  class="btn btn-cescorp">
                    <i class="fa fa-lg fa-pencil" ></i>
                  </a>
                  @endcan
                  @can('users.destroy')
                    {!! Form::open(['route' => ['users.destroy', $user->id],
                    'method'=>'DELETE']) !!}
                        <button class="btn btn-cescorp">
                          <i class="fa fa-lg fa-trash"></i>
                        </button>
                    {!! Form::close() !!}
                  @endcan
                   </div>
                 </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $users->render() }}
        </div>
    </div>
  </div>
</div>
@endsection
