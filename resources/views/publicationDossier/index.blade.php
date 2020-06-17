@extends('layouts.admin')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Publications</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="./home">Home</a></li>
          <li class="breadcrumb-item active">Publications</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
  <div class="container-fluid">
  
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class=""></i>
                La listes des publications  
              </h3>
              <div class="card-tools">
                
              </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <table class="table table-striped table-valign-middle">
               
              <thead>
              <tr>  <th>Id</th>
                   <th>Titre</th>	
                   <th>Catégories</th>
                    <th>Date</th>
                   <th>Action</th>  		
              </tr>
             
              </thead>
                    <tbody>
                      @foreach($Pub as $key => $value)
                    <tr> 
                      <td> {{$value->id}}  </td>					
                      <td >  {{$value->Titre}} </td>
                      <td> {{$value->Catégories}}  </td>
                      <td> {{$value->Date}}  </td>
                      <td class="project-actions text-left" class="table-buttons" >
                            <a  class="btn btn-primary btn-sm" href="{{route('publicationDossier.show',$value->id) }}">
                          <i class="fas fa-eye">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('publicationDossier.edit',$value->id)}}"">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                 
<form method="POST" action="{{ route('publicationDossier.destroy', $value->id) }}">
 
  @csrf
  @method('DELETE')
  <a class="btn btn-danger btn-sm" >
  <i class="fas fa-trash"></i>
  Delete
     </button>
 </form>
                    </td>
                    </tr>   @endforeach 
                  </tbody>
                   
                        
                </table>
              </div>
       
    <!-- /.Left col -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
