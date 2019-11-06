<?php

require_once '../../models/Article.php';
//$classModel->session('../login.php');

$classArticle->delete($_GET['id']);

header('location: show_articles.php');