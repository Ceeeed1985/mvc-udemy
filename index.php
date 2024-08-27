<?php

require('controller/controller.php');
try{
    if(isset($_GET['page'])) {
        if($_GET['page'] == 'accueil'){
            getHomepage();
        } else if ($_GET['page'] == 'avis'){
            getCommentpage();
        } else {
            throw new Exception ("Cette page n'existe pas ou a été supprimée");
        }
    } else {
        getHomepage();
    }
}
catch(Exception $e) {
    $error = $e->getmessage();
    require('view/errorView.php');
}