@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($Caté,['route'=>['Catégorie.update',$Caté->id],'method'=>'PATCH']) }}
      @include('Catégorie.form_master')
      {{ Form::close() }}
    </div>
  </div>
@endsection
