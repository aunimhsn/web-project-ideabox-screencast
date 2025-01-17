<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La boîte à idées</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <header>
        <img class="logo" src="./images/logo.png" alt="logo-la-boite-a-idees" width="100">
        <h1 class="title">La boîte à idées</h1>
    </header>

    <main>
        <a href="./index.php" class="home-link">Revenir à l'accueil</a>
        <h2 class="subtitle">Ajouter une idée</h2>
        
        <form action="./store-idea.php" method="post" class="add-idea-form">
            <input type="text" name="idea-title" required class="add-idea-title" placeholder="Titre de l'idée...">
            <textarea name="idea-content" placeholder="Décrire votre idée..." required class="add-idea-content"></textarea>
            <button type="submit" class="add-idea">Publier</button>

            <input type="hidden" name="user-id" value="1">
        </form>
    </main>

    <footer>
        <hr>
        2025 - Aunim Hassan
    </footer>
</body>
</html>