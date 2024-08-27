<?php

function getComments(){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mvc-udemy;charset=utf8', 'root', '');
        }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
        }
                    
    $requete = $bdd->query('SELECT * FROM comments');

    //Attention, c'est ici que l'on retourne la requête
    return $requete;

}

