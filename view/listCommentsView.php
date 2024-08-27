<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Vive le MVC !</title>
        <link rel="stylesheet" href="public/design/default.css" />
    </head>

    <body>

        <header>
            <span>Commentaires</span>
        </header>

        <section class="container">
        
            <h1>Bienvenue sur mon site MVC</h1>
            <p>Voici la liste des commentaires :</p>

            <?php

                while($comments = $requete->fetch()) {
            
            ?>
                <p>
                    <?= $comments['content'] ?> <br><b><?= $comments['score'] ?>/5</b></p>
            <?php
                }
            ?>

        </section>

    </body>
</html>