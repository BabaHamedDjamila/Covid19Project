@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ Form::model($Pub,['route'=>['publicationDossier.update',$Pub->id],'method'=>'PATCH']) }}
      @include('publicationDossier.formulaireEdit')
      {{ Form::close() }}
    </div>
  </div>
    @endsection
   