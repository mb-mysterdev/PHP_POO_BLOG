<?php

require_once '../../models/User.php';
//$classModel->session('../login.php');

?>
  <?php require_once 'src/header.php'; ?>

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
          <h1 class="h3 mb-4 text-gray-800">Rôle : 

          </h1>

        </div>
        <!-- /.container-fluid -->
        <form method="post" action="">

        <?php 
          $user->validateAdmin() ;
          echo $classModel->validateForm('users', 'role','Administrateur','Utilisateur'); ?>
        

      </form>
      </div>
      <!-- End of Main Content -->


      <?php require_once 'src/footer.php'; 

      ?>