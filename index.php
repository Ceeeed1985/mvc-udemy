<?php

    require('controller/controller.php');

    if(isset($_GET['page'])) {
        if($_GET['page'] == 'accueil'){
            getHomepage();
        } else if($_GET['page'] == 'avis'){
            getCommentpage();
        }
    } else {
            getHomepage();
    }
