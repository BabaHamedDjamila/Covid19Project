<div class="row">
  <div class="col-sm-2">
    {!! form::label('Catégories','Catégorie') !!}
  </div>
  <div class="col-sm-10">
    <div class="form-group {{ $errors->has('Catégories') ? 'has-error' : "" }}">
      {{ Form::text('Catégories',NULL, ['class'=>'form-control', 'id'=>'Catégories', 'placeholder'=>'Catégories...']) }}
      {{ $errors->first('Catégories', '<p class="help-block">:message</p>') }}
    </div>
  </div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>
