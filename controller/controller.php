<?php

require('model/homeModel.php');
require('model/commentModel.php');

function getHomepage(){
    $requete = getUsers();
    require('view/usersView.php');
}

function getCommentpage(){
    $requete = getComments();
    require('view/commentsView.php');
}

