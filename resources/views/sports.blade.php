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
              <li class="breadcrumb-item active">Sport</li>
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
                       <th>Nombre de Votes</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                       1
                      </td>
                      
                      <td>Participation d'un club de football</td>
                      
                      <td>
  Un club de football donne a une association d'aide une somme d'argens de 500 millions DA pour les aider a acheter des machines respiratoires                      
                      </td>					
                      <td>
                        <span class="badge badge-success">Accéptée</span>
                      </td>
                      <td>
                         <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                        Some Images
                      </td>					
                      <td>
                      
                      </td>
                      <td>
                      <i class="fas fa-eye"></i>
                      <i class="fas fa-pen"></i>
                      <i class="fas fa-trash-alt"></i>
                      </td>
                    </tr>
                    <tr>
                    <td>
                       2
                      </td>
                      
                      <td>   </td>
                      
                      <td>
                       
                       </td>
                      
                      <td>
                        <span class="badge badge-info">En attente</span>
                      </td>
                      <td>
                         <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                        Some Images
                      </td>					
                      <td>
                      
                      </td>
                      <td>
                      <i class="fas fa-eye"></i>
                      <i class="fas fa-pen"></i>
                      <i class="fas fa-trash-alt"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                       3
                      </td>
                      
                      <td>		</td>
                      
                      <td>
                         </td>
                      
                      <td>
                        <span class="badge badge-danger">Refusé</span>
                      </td>
                      <td>
                         <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                        Some Images
                      </td>					
                      <td>
                      
                      </td>					
                      <td>
                      <i class="fas fa-eye"></i>
                      <i class="fas fa-pen"></i>
                      <i class="fas fa-trash-alt"></i>
                      </td>
                    </tr>
                    <tr>
                      <td>
                     4
                      </td>					
                      <td>		</td>					
                      <td>
                     
                     </td>
                      
                      <td>
                        <span class="badge badge-success">Accéptée</span>
                      </td>
                      <td>
                         <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                        Some Images
                      </td>					
                      <td>
                      
                      </td>					
                      <td>
                      <i class="fas fa-eye"></i>
                      <i class="fas fa-pen"></i>
                      <i class="fas fa-trash-alt"></i>
                      </td>
                    </tr>
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