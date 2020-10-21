
@extends('layouts.app')

@section('content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-users"></i> ROLES</h1>
  </div>
  <div>
    @can('roles.create')
    <a href="{{ route('roles.create')}}"><button class="btn btn-primary" type="button">Crear</button></a>
    @endcan
  </div>
</div>
<div class="row">
  <div class="col-md-8">
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
                <th>ROLE</th>
                <th>DESCRIPCIÓN</th>
                <th colspan="3">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              @foreach($roles as $role)
              <tr>
                <td>{{ $role->name }}</td>
                <td>{{ $role->description }}</td>
                <td>
                  <div class="btn-group">
                  @can('roles.show')
                  <a href="{{ route('roles.show', $role->id) }}"
                  class="btn btn-cescorp">
                   Ver
                  </a>
                  @endcan
                  @can('roles.edit')
                  <a href="{{ route('roles.edit', $role->id) }}"
                  class="btn btn-cescorp">
                    <i class="fa fa-lg fa-pencil" ></i>
                  </a>
                  @endcan
                  @can('roles.destroy')
                    {!! Form::open(['route' => ['roles.destroy', $role->id],
                    'method'=>'DELETE']) !!}
                        <button class="btn btn-danger">
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
          {{ $roles->render() }}
        </div>
    </div>
  </div>
</div>
@endsection
