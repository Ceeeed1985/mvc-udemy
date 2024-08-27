<?php

    $title = "Commentaires";
    ob_start();

?>

<section class="container">
        
    <h1>Bienvenue sur mon site MVC</h1>
    <p>Voici la liste des commentaires :</p>

        <?php
                
            while($comments = $requete->fetch()) {
            
        ?>
            <p><b><?= $comments['score'] ?> / 5</b><br>
            <?= $comments['content'] ?></p>
        <?php
            }
        ?>

</section>

<?php

    $content = ob_get_clean();
    require('base.php');

?>