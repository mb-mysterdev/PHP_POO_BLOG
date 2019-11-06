<?php

require_once '../../models/Comment.php';
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
          <h1 class="h3 mb-2 text-gray-800">Commentaires</h1>
          <p class="mb-4">Vous pouvez <strong>Valider</strong> ou  <strong>Non</strong>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">La liste des nouveaux commentaires</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Auteur</th>
                      <th>Le commentaire</th>
                      <th>Article</th>
                      <th>Date de publication</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Auteur</th>
                      <th>Le commentaire</th>
                      <th>Article</th>
                      <th>Date de publication</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php $comments = $classModel->findAll('comments', 'WHERE validate = 0') ?>
                    <?php foreach($comments as $comment): ?>
                    <tr>
                      <td><?= $comment['name']; ?></td>
                      <td><?= $comment['message']; ?></td>
                      <td><?= $comment['article_id']; ?></td>
                      <td><?= $comment['date']; ?></td>
                      <td>
                        <?php $id_comment =  $comment['id']; ?>
                        <form method="post" action="validate_comment.php?id=<?= $id_comment ?>">
                          <?php $classCommentManager->validateFormComment($id_comment) ?>
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