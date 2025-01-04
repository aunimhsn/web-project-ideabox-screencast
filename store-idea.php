<?php
include('./database/config.php');
include('./database/queries/idea.php');

addIdea($pdo, $_POST['idea-title'], $_POST['idea-content'], $_POST['user-id']);

// Redirection vers l'accueil : ./index.php
$homeUrl = 'http://' . $_SERVER['HTTP_HOST']; 
header("Location: $homeUrl");