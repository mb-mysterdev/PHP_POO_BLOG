<?php
require_once '../../models/User.php';


require_once '../../models/Comment.php';

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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Membres</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user->count('users'); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Articles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user->count('articles'); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Utilisateurs a valider</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $user->count('users', 'WHERE validate = 0'); ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Commentaires a valider</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $user->count('comments', 'WHERE validate = 0'); ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
              <?php $fiveNewMembres = $userManager->findAll('users', 'ORDER BY date DESC LIMIT 5'); ?>
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Les 5 derniers membres inscrits</h6>
                </div>
                <div class="card-body">   
                <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Nom de famille</th>
                    <th scope="col">Prénom</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($fiveNewMembres as $fiveNewMembre): { ?>
                  <tr>
                    <td><?= $fiveNewMembre['pseudo'] ?></td>
                    <td><?= $fiveNewMembre['last_name'] ?></td>
                    <td><?= $fiveNewMembre['first_name'] ?></td>
                  </tr>
                  <?php } endforeach; ?>
                </tbody>
              </table>
                </div>
              </div>

              <!-- Color System -->

            </div>

            <div class="col-lg-6 mb-4">
              <?php $commentaires = $classComment->showAll(); ?>
              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Les 5 derniers commentaires</h6>
                </div>
                <div class="card-body">
                <table class="table">
              <thead>
                <tr>
                  <th scope="col">Membre</th>
                  <th scope="col">Commentaire</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($commentaires as $commentaire):{ ?>
                <tr>
                  <td><?= $commentaire['name']; ?></td>
                  <td><?= $commentaire['message']; ?></td>
                </tr>
              <?php } endforeach; ?>
              </tbody>
              </table>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    <?php require_once 'src/footer.php'; ?>
