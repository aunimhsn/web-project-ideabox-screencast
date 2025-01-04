<?php
include('./database/config.php');
include('./database/queries/idea.php');

if (! isset($_GET['id'])) {
    $errorUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/error.php'; 
    header("Location: $errorUrl");
}

deleteIdeaById($pdo, $_GET['id']);

// Redirection vers l'accueil : ./index.php
$homeUrl = 'http://' . $_SERVER['HTTP_HOST']; 
header("Location: $homeUrl");