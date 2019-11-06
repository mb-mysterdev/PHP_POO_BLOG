<?php 
require_once '../models/User.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Blank</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="style_login.css" rel="stylesheet">

</head>

<body id="page-top">
<div class="wrapper">
    <form method="post" action="" class="form-signin">       
      <h2 class="form-signin-heading">Inscrivez-vous</h2>
    <?php 
        echo $userManager->registrationFormUser();

        echo $user->registration();
    ?>
        <small>ou <a href="login.php">Connectez-vous</a></small>

    </form>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
