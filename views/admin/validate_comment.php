<?php
require_once '../../models/Comment.php';
//$classModel->session('../login.php');

$classComment->validateComment($_GET['id']);

header('location: show_comments.php');