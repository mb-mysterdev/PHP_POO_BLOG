<?php require_once '../models/Article.php'; 
      require_once '../models/User.php'; 
      require_once '../models/Comment.php'; 
session_start();
$article = $classArticle->find('articles', $_GET['id']);
$classComment->insert();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> <?= $article['title']; ?> </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="CreateX - Multipurpose Bootstrap Theme">
    <meta name="keywords" content="multipurpose, portfolio, blog, shop, e-commerce, modern, flat style, responsive,  business, corporate, mobile, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
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
            <li class="breadcrumb-item"><a href="index.php">Acceuil</a>
            </li>
            <li class="breadcrumb-item"><a href="articles.php">Les articles</a>
            </li>
          </ol>
        </nav>
        <h1 class="page-title-heading"><?= $article['title']; ?></h1>
      </div>
    </div>                     

    <!-- Page Content-->
    <div class="container pb-5 mb-3">
      <div class="row">
        <!-- Post Content-->
        <div class="col-lg-11">
          <!-- Single Post Meta-->
          <div class="d-flex justify-content-between align-items-center pb-3">
            <div><a class="scroll-to post-author" href="#author">
                <div class="post-author-avatar"><img src="img/blog/authors/th01.jpg" alt="Post Author"/>
                </div>
                <div class="post-author-name"><?= $article['author']; ?></div></a></div>
            <div class="post-meta"><a class="scroll-to text-sm" href="#comments"><i class="fe-icon-message-square"></i><?php echo $user->count('comments', "WHERE article_id =" .  $_GET['id']); ?></a><span class="text-sm"><i class="fe-icon-clock"></i><?= $article['modifiedAt']; ?></span></div>
          </div>
          <hr class="mb-4">
          <div class="card blog-card mb-4">
            <div class="card-body">
              <h5 class="post-title post-title-link lead"><center><div><?= $article['chapo']; ?></div></center></h5>
            </div>
          </div>
          </div>
          <br>
          <p class="py-3"></p>
          <p><?= $article['content']; ?></p>
          <p class="pb-3"></p>
          
    <!-- Single Post Comments-->
    <div class="bg-secondary py-5" id="comments">
      <div class="container pb-4">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="text-center pb-3"><?= $user->count('comments', "WHERE article_id =" .  $_GET['id']); ?></a> Commentaires</h4>
            <?php $comments =  $classComment->show();?>
            <?php foreach($comments as $comment):{ ?>
            <div class="blockquote comment">
              <p>
            <?= $comment['message'] . ' '; ?>
              </p>
              <div class="d-sm-flex justify-content-between align-items-center">
                <div class="testimonial-footer">
                  <div class="d-table-cell align-middle pl-2">
                    <div class="blockquote-footer"><?= $comment['name'] . ' ';?>
                      <cite><?= $comment['date'] . ' ';?>
                      </cite>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <?php } ?>
              <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div><br>

    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
<br /> <br />
    <?php if(isset($_SESSION['id']) && isset($_SESSION['pseudo']) && $_SESSION['validate'] == 1){ ?>
    <form method="post" action="">
    <?php 
     $classCommentManager->insertFormComment();
    ?>
    </form>

    <?php }; ?>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="js/vendor.min.js"></script>
    <script src="js/theme.min.js"></script>
  </body>
</html>