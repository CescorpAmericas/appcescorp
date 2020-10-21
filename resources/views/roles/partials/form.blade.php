<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      {{ Form::label('name', 'Nombre') }}
      {{ Form::text('name', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'name']) }}
      @if ($errors->has('name'))
          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
      @endif
    </div>
    <div class="form-group">
      {{ Form::label('slug', 'URL Amigable') }}
      {{ Form::text('slug', null, ['class'=> 'form-control','required' => 'required ', 'id'=>'slug']) }}
      @if ($errors->has('slug'))
          <small class="form-text text-danger">{{ $errors->first('slug') }}</small>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      {{ Form::label('description', 'Descripción') }}
      {{ Form::textarea('description', null, ['class'=> 'form-control']) }}
    </div>
  </div>
  <div class="col-md-12">
    <hr>
    <h3>Permiso especial</h3>
    <div class="form-group">
      <label>{{ Form::radio('special','all-access') }} Acceso total</label>
      <label>{{ Form::radio('special','no-access') }} Ningún acceso</label>
    </div>
    <h3>Lista de permisos</h3>
    <div class="form-group">
      <ul class="list-unstyled">
        @foreach($permissions as $permission)
        <li>
          <label>
            {{ Form::checkbox('permissions[]', $permission->id, null) }}
            {{ $permission->name }}
            <em>({{ $permission->description ?: 'N/A' }})</em>
          </label>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      {{ Form::submit('Guardar', ['class'=> 'btn btn-sm btn-primary']) }}
    </div>
  </div>
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
      $(document).ready(function() {
        $("#name, #slug").stringToSlug({
          callback: function(text){
            $("#slug").val(text);
          }
        });
      });
</script>
@endsection
