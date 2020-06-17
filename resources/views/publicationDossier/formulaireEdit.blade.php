<h1>Modification de la publication</h1>
    {!! Form::open(['action' => ['PublicationController@update', $Pub->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Titre', 'Titre')}}
            {{Form::text('Titre', $Pub->Titre, ['class' => 'form-control', 'placeholder' => 'Titre'])}}
        </div>
        <div class="form-group">
            {{Form::label('Contenue', 'Contenue')}}
            {{Form::textarea('Contenue', $Pub->Contenue, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('Catégories', 'Catégories')}}
            {{Form::textarea('Catégories', $Pub->Catégories, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('Lien', 'Lien')}}
            {{Form::textarea('Lien', $Pub->Lien, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            <label for="" class="col-md-2"><strong>Image:</strong></label>
            <div class="col-md-4">
                <p><img src="{{asset('laravel7/Product/' . $Pub->Images) }}" width="80px" height="50" alt=""></p>
            </div>
       </div>
        <div class="form-group">
            {{Form::label('Videos', 'Videos')}}
            {{Form::textarea('Videos', $Pub->Videos, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Video'])}}
        </div>
        <div class="form-group">
            {{Form::label('Date', 'Date')}}
            {{Form::textarea('Date', $Pub->Date, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Date'])}}
        </div>
       
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
   