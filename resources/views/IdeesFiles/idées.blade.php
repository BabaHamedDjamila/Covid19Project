@extends('layouts.admin')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row ">
        <div class="col-lg-3 col-6">
             <h1 class="m-0 text-dark">Catégories d'idées</h1>
             <h1 class="m-0 text-dark">Catégories :</h1>
        </div><!-- /.col -->
        <div class="col-lg-3 col-6">
             <h1 class="m-0 text-dark">Numéro d'idée :</h1>
        </div>
        <!-- /.col -->
        <div class="col-lg-3 col-6">
          
        </div><!-- /.col -->
         <div class="col-lg-3 col-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="./home">Home</a></li>
            <li class="breadcrumb-item"><a href="./idées">Categories d'idées</a></li>
            <li class="breadcrumb-item active">Santé</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
      
      
          <!-- /.card -->

          <div class="card">
            <div class="card-header border-0">
             
               <a href="javascript:void(0);">Ajouter</a>
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
                <tr>
                 <th>Numéro</th>
                  <th>Titre</th>				   
                  <th>Contenue</th>
                  <th>Status</th>
                  <th>Images</th>
                   <th>Videos</th>
                   <th>Nombre de votes</th>
                   <th>Date</th>
                    <th>Action</th>
                    <th>Source</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($idée as $key => $value)
                  <tr> 
                    <td> {{$value->id}}  </td>					
                    <td >  {{$value->Titre}} </td>
                    <td> {{$value->Contenue}}  </td>	
                    <td> {{$value->Status}}  </td>	                    	                 
                    <td> {{$value->Images}}  </td>
                    <td> {{$value->Videos}}  </td>
                    <td> {{$value->Votes}}  </td>	
                    <td> {{$value->Date}}  </td>	
                    
                    <td class="project-actions text-right">
                      <a class="btn btn-primary btn-sm" href="#">
                          <i class="fas fa-folder">
                          </i>
                          View
                      </a>
                      <a class="btn btn-info btn-sm" href="#">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
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
@endsection