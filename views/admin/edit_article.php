<?php
require_once '../../models/Article.php';
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


        </div>
        <!-- /.container-fluid -->
            <div class="container">
            <h1 class="h3 mb-4 text-gray-800">
              Modifier l'article
          </h1>
            <form method="post" action="">
              
                     <?php 
                      echo $classArticle->update();
                      echo $classArticleManager->updateForm(); 
                      ?>
            </form>

            </div>
      </div>
      <!-- End of Main Content -->


  <?php require_once 'src/footer.php'; ?>