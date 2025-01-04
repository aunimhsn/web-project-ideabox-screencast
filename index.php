<?php
include('./database/config.php');
include('./database/queries/idea.php');
include('./database/queries/comment.php');

?>



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
        <a href="./add-idea.php" class="add-idea-link">Ajouter une idée</a>
        <h2 class="subtitle">Liste des idées</h2>

        <div class="ideas">

            <?php
            $ideas = getIdeas($pdo, 'desc');
            foreach($ideas as $idea)
            {
            ?>
            <div class="idea">
                <a href="./delete-idea.php?id=<?=$idea['id']?>" class="idea-delete">Supprimer</a>
                <h3 class="idea-title"><?=$idea['title']?></h3>
                <p class="idea-content">
                    <?=$idea['content']?>
                </p>
                <div class="comments">
                    <?php
                    $comments = getCommentsByIdea($pdo, $idea['id']);
                    foreach($comments as $comment)
                    {
                    ?>
                    <div class="comment">
                        <p class="comment-content"><?=$comment['content']?></p>
                        <a href="./delete-comment.php?id=<?=$comment['id']?>">
                            <!-- Croix de suppression -->
                            <svg class="comment-delete" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="m21 3.998c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-8.991 6.932 2.717-2.718c.146-.146.338-.219.53-.219.405 0 .751.325.751.75 0 .193-.073.384-.219.531l-2.718 2.717 2.728 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.384-.073-.531-.219l-2.728-2.728-2.728 2.728c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .384.073.53.219z" fill-rule="nonzero"/>
                            </svg>
                        </a>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <form action="./store-comment.php" method="post">
                    <input type="hidden" name="idea-id" value="<?=$idea['id']?>">
                    <input type="hidden" name="user-id" value="1">
                    <textarea class="add-comment-content" 
                                name="comment-content" 
                                placeholder="Ajoutez un commentaire..."
                                required></textarea>
                    <button class="add-comment" type="submit">Publier</button>
                </form>
            </div>
            <?php
            }
            ?>
        </div>
    </main>

    <footer>
        <hr>
        2025 - Aunim Hassan
    </footer>
</body>
</html>