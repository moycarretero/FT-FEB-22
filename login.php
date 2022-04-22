<?php

    require_once "Google/User.php";
    require_once "Facebook/User.php";

    $tipoLogin = $_GET['tipo'];

    if ($tipoLogin == 'Google'){
        $googleUser = new Google\User();
        $googleUser->login();

        echo "Login con Google";
    } else {
        $facebookUser = new Facebook\Login\User();
        $facebookUser->login();

        echo "Login con Facebook";
    }
