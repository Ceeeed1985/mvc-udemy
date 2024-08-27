<?php

    require('controller/controller.php');

    try{
        if(isset($_GET['page'])) {
            if($_GET['page'] == 'accueil'){
                getHomepage();
            } else if($_GET['page'] == 'avis'){
                getCommentpage();
            }
        } else {
                getHomepage();
        }
    }
    catch(Exception $e) {
        // die('Erreur : '.$e->getmessage());
        $error = $e->getmessage();
        require('view/errorView.php');
    }