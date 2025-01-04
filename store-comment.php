<?php
include('./database/config.php');
include('./database/queries/comment.php');

if (! isset($_POST['comment-content'])) {
    $errorUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/error.php'; 
    header("Location: $errorUrl");
}

addComment($pdo, $_POST['comment-content'], $_POST['idea-id'], $_POST['user-id']);

// Redirection vers l'accueil : ./index.php
$homeUrl = 'http://' . $_SERVER['HTTP_HOST']; 
header("Location: $homeUrl");