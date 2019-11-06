<?php require_once '../models/Article.php'; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>LES ARTICLES
    </title>
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#343b43" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
  

    <!-- Page Title-->
    <div class="page-title d-flex" aria-label="Page title" style="background-image: url(img/page-title/blog-pattern.jpg);">
      <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Accueil</a>
            </li>
            <li class="breadcrumb-item"><a href="articles.php">Blog</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading">Les Articles</h1>
      </div>
    </div>
    <!-- Page Content-->
    <div class="container pb-5 mb-3">
      <!-- Blog Grid-->
      <div class="isotope-grid cols-3">
        <div class="gutter-sizer"></div>
        <div class="grid-sizer"></div>

        <?php

          $articles = $classModel->findAll('articles','ORDER BY createdAt DESC');
          foreach($articles as $article): { ?>
        <!-- Post-->
        <div class="grid-item">
          <div class="card blog-card mb-2"><a class="post-thumb" href="article.php?id=<?= $article['id'] ?>"></a>
            <div class="card-body">
              <h5 class="post-title"><a href="article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h5>
              <p class="text-muted"><?= $article['chapo'] ?></p>
            </div>
            <div class="card-footer">
              <div class="post-meta"><span><i class="fe-icon-clock"></i> <?= $article['modifiedAt'] ?></span></div>
            </div>
          </div>
        </div>
        <?php  } endforeach;  ?>
      </div>
    </div>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>