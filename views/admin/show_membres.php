<?php

  require_once '../../models/User.php';
  //$classModel->session('../login.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Articles</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
  <?php require_once 'src/navbar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require_once 'src/topbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Membres</h1>
          <p class="mb-4">Vous pouvez <strong>Voir</strong> , <strong>Valider</strong> ou <strong>Changer les rôles</strong> des membres</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">La liste de vos membres</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nom de famille</th>
                      <th>Prénom</th>
                      <th>Pseudo</th>
                      <th>Valider</th>
                      <th>Rôle</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>Nom de famille</th>
                      <th>Prénom</th>
                      <th>Pseudo</th>
                      <th>Valider</th>
                      <th>Rôle</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($membres as $membre): ?>
                    <tr>
                      <td><?= $membre['last_name']; ?></td>
                      <td><?= $membre['first_name']; ?></td>
                      <td><?= $membre['pseudo']; ?></td>

                      <td>
                      <?php if($membre['validate'] == 0)
                            {
                              echo 'Non';
                            }elseif($membre['validate'] == 1){
                              echo 'Oui';
                            }; ?>
                    </td>

                    <td>
                        <?php if($membre['role'] == 0)
                            {
                              echo 'Utilisateur';
                            }elseif($membre['role'] == 1){
                              echo 'Administrateur';
                            }; ?>
                      </td>

                      <td>
                        <form method="get" action="">
                          <?php
                            $id_membre = $membre['id'];
                            if($membre['validate'] == 0)
                            {
                              echo "<a href='validate_membre.php?id=$id_membre' class='btn btn-secondary btn-circle btn-sm'><i class='far fa-check-circle'></i></a>";
                            }elseif($membre['validate'] == 1){
                              echo "<a href='validate_membre.php?id=$id_membre' class='btn btn-success btn-circle btn-sm'><i class='far fa-check-circle'></i></a>";
                            };
                          ?>

                          <?php
                            if($membre['role'] == 0)
                            {
                              echo "<a href='role_membre.php?id=$id_membre' class='btn btn-info btn-circle btn-sm'><i class='fas fa-user'></i></a>";
                            }elseif($membre['role'] == 1){
                              echo "<a href='role_membre.php?id=$id_membre' class='btn btn-danger btn-circle btn-sm'><i class='fas fa-crown'></i></a>";
                            };
                          ?>
                        </form>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->




  <?php require_once 'src/footer.php'; ?>