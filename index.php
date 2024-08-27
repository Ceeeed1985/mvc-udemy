<?php

    require('modele/utilisateurs.php');

    $requete = getUtilisateurs();


// Affichage
    require('views/homepage.php');