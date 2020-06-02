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
                   <th>Contenue</th>
                   <th>Date</th>
                   <th>Images</th>
                   <th>Videos</th>
                  <th>Action</th>  
              </tr>
              </thead>
                    <tbody>
                      @foreach($Pub as $key => $value)
                    <tr> 
                      <td> {{$value->id}}  </td>					
                      <td >  {{$value->Titre}} </td>
                      <td> {{$value->Contenue}}  </td>	
                      <td> {{$value->Catégories}}  </td>	                    	
                      <td> {{$value->lien}}  </td>	
                      <td> {{$value->Images}}  </td>
                      <td> {{$value->Videos}}  </td>
                      <td> {{$value->Date}}  </td>	
                      
                      <td class="project-actions text-right">
                        <a  class="btn btn-primary btn-sm" href="#">
                           
                          <i class="fas fa-eye">
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
       
    <!-- /.Left col -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection