<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="sidebar-mini">
    <div class="wrapper">
       
        <?php 
          include_once "./layouts/navbar.php";
          include_once "./layouts/sidebar.php" ;
        ?>
        
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Les projets</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            
                          <a href="./ajouter-competence.php" class="btn btn-primary"><i class="fas fa-plus"></i>Ajouter</a>
                            
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Date début</th>
                                        <th>Date fin</th>
                                        <th>Les Taches</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- Obtenez toutes les compétences -->
                                    <tr>
                                        <td>1</td>
                                        <td>Arbre des compétences</td>
                                        <td></td>
                                        <td>12-10-2023</td>
                                        <td>22-10-2023</td>
                                        <td><a href="#" class="btn btn-xs "><i class="nav-icon fas fa-eye"></i></a></td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                            
                                            <button class="btn btn-xs btn-danger swalDefaultSuccess" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="nav-icon fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CNMH</td>
                                        <td>projet pour le centre nationale de mohamed 6 des hendicapet</td>
                                        <td>12-10-2023</td>
                                        <td>22-10-2023</td>
                                        <td><a href="#" class="btn btn-xs "><i class="nav-icon fas fa-eye"></i></a></td>
                                        <td>
                                            <a href="#" class="btn btn-xs btn-primary"><i class="nav-icon fas fa-edit"></i></a>
                                            
                                            <button class="btn btn-xs btn-danger swalDefaultSuccess" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="nav-icon fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <!-- en skills -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <!-- main Js -->
        <script src="./asset/JS/main.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Bootstrap 5 JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
      <script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

   
    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

 
  
  });
</script>
    </div>
    <!-- /.wrapper -->
</body>

</html>