<?php 
// Traitement - récupération des données


function getUtilisateurs(){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=mvc-udemy;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
                
    $requete = $bdd->query('SELECT * FROM users');

    return $requete;

}