<?php

    $nombre = $_POST['username'];
    $contraseña = $_POST['pass'];

    $image = $_FILES['foto'];

    //var_dump($image);

   // echo "El usuario es $nombre y la contraseña $contraseña";
    header("Content-Type: image/png");

    echo file_get_contents($image['tmp_name']);
