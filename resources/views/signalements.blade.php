@extends('layouts.admin')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Signalements</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./home">Home</a></li>
              <li class="breadcrumb-item active">Signalements</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">
                  <i class=""></i>
                  La listes des signalements  
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">

                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
					   <th>Description</th>
                      <th>Status</th>
					   <th>Localisation</th>
					    <th>Image</th>					
                      <th>Anonyme/utilisateur</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Call of Duty IV</td>
					  <td>La salle des fetes X est ouverte</td>
                      <td><span class="badge badge-success">Accéptée</span></td>
                      <td>
                       Tlemcen   </td>
					   <td>
					    <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                      Some Images
					  </td>
					  <td>
					  Anonyme 
					  </td>
                    </tr>
                    <tr>
                       <td>2</td>
                      <td>Une salle des fetes qui travail</td>
					  <td>La salle des fetes X est ouverte malgrés que c'est interdis </td>
                      <td><span class="badge badge-success">Accéptée</span></td>
                      <td>
                       Tlemcen   </td>
					   <td>
					    <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                      Some Images
					  </td>
					  <td>
					  Anonyme 
					  </td>
                    </tr>
                    <tr>
                       <td>3</td>
                      <td>Une salle des fetes qui travail</td>
					  <td>La salle des fetes X est ouverte malgrés que c'est interdis </td>
                      <td><span class="badge badge-danger">Refusé</span></td>
                      <td>
                       Tlemcen   </td>
					   <td>
					    <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                      Some Images
					  </td>
					  <td>
					  Anonyme 
					  </td>
                    </tr>
                    <tr>
                     <td>4</td>
                      <td>Une salle des fetes qui travail</td>
					  <td>La salle des fetes X est ouverte malgrés que c'est interdis </td>
                    
                      <td><span class="badge badge-info">En attente</span></td>
                     <td>
                       Tlemcen   </td>
					   <td>
					    <img src="dist/img/default-150x150.png" alt="Images 1" class="img-circle img-size-32 mr-2">
                      Some Images
					  </td>
					  <td>
					  Anonyme 
					  </td> 
                    </tr>
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Ajouter le signalement</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Voir tous les signalements</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
          
            <!-- PRODUCT LIST -->
           
              <!-- /.card-header -->
            
              <!-- /.card-body -->
             
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 

@endsection