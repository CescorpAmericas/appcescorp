@extends('layouts.app')

@section('content')
  <div class="page-error tile">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <img src="{{asset('cescorp-americas/img/CESCORPLOGO.png')}}" alt="">
  </div>
@endsection
