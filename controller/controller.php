<?php

require('model/modelUsers.php');
require('model/modelComments.php');

    function getHomepage(){
        $requete = getUsers();
        require('view/listUsersView.php');

    }


    function getCommentpage() {
        $requete = getComments();
        require('view/listCommentsView.php');
    }

// Affichage


