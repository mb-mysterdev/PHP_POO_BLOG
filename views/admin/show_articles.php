<?php
require_once '../../models/Article.php';
$articles = $classArticle->findAll('articles', 'ORDER BY createdAt DESC');

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
          <h1 class="h3 mb-2 text-gray-800">Articles</h1>
          <p class="mb-4">Vous pouvez <strong>voir</strong> , <strong>modifier</strong> ou <strong>supprimer</strong> des articles</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">La liste de vos articles</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Chapo</th>
                      <th>Auteur</th>
                      <th>Date de création</th>
                      <th>Date de la dernière modification</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Titre</th>
                      <th>Chapo</th>
                      <th>Auteur</th>
                      <th>Date de création</th>
                      <th>Date de la dernière modification</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php foreach($articles as $article): ?>
                    <tr>
                      <td><?= $article['title']; ?></td>
                      <td><?= $article['chapo']; ?></td>
                      <td><?= $article['author']; ?></td>
                      <td><?= $article['createdAt']; ?></td>
                      <td><?= $article['modifiedAt']; ?></td>
                      <td>
                        <form method="get" action="">
                        <a href="../article.php?id=<?= $article['id']; ?>" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="edit_article.php?id=<?= $article['id']; ?>" class="btn btn-success btn-circle btn-sm"><i class="fas fa-pen-alt"></i></a>
                        <a href="delete_article.php?id=<?= $article['id']; ?>" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
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