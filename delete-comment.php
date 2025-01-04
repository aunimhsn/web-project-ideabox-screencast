<?php
include('./database/config.php');
include('./database/queries/comment.php');

if (! isset($_GET['id'])) {
    $errorUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/error.php'; 
    header("Location: $errorUrl");
}

deleteCommentById($pdo, $_GET['id']);

// Redirection vers l'accueil : ./index.php
$homeUrl = 'http://' . $_SERVER['HTTP_HOST']; 
header("Location: $homeUrl");