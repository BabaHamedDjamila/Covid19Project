@extends('layouts.admin')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Catégories d'idées </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./home">Home</a></li>
              <li class="breadcrumb-item active">Catégories d'idées</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid"> 
	  <button type="submit"  class="btn btn-primary" > Ajouter</button>
       <div class="row">
        <!-- <a href="{{url('Catégories/formulaire')}}"> -->
            <div class="card">
              <div class="card-header border-0">               
				 
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">              
                <table class="table table-striped table-valign-middle">
               
                  <thead>
     <tr><th>Numéro</th>	<th>Catégories </th>	 <th>Action</th></tr>
                  </thead>
                  <tbody>
                    @foreach($Caté as $key => $value)
                  <tr> <td> {{$value->id}}  </td>					
                    <td > <a href="#" style=max_length:'10' ;>
                       {{$value->Catégories}}
					</td>                   
					<td>
            <a class="btn btn-info btn-sm" href="{{route('Catégorie.show',$value->id)}}">
             
              <i class="fas fa-eye" class="glyphicon glyphicon-th-large"></i></a>
          <a class="btn btn-primary btn-sm" href="{{route('Catégorie.edit',$value->id)}}">
            <i class="fas fa-pen"></i>
           
              <i class="glyphicon glyphicon-pencil"></i></a>
<form action="{{route('Catégorie.destroy',$value->id)}}" method= "post">
  @csrf 
             
  <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
    <i class="fas fa-trash-alt"></i><i class="glyphicon glyphicon-trash"></i></button>
        
         
					</td>
                  </tr>  
                  @endforeach 
                </tbody>
                 
                </table>
              </div>
            </div>
            <!-- /.card -->
          
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection