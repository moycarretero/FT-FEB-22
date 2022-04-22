<?php

    /*$numero = 5;
    $pi = 3.1416;
    $nombre = 'Moises';
    $apellidos = "Carretero";

    $nombreCompleto = 'me llamo $nombre '.$apellidos;



    $verdadero = true;
    $falso = false;
    $nulo = null;
    $frutas = [
        'fresa', 
        'manzana', 
        'melocotón',
        33 => 'pera',
        'roja' => 'sandia',
        'aguacate',
        99 => 'limón',
        'higo',
        54 => 'framubesa',
        'kiwi',
        100 => 'cereza'
    ];

    $frutas[32] = 'maracuyá';
    echo $frutas[1];
    unset ($frutas[33]);

    $frutas[] = 'mandarina';


    //print_r($frutas);
    var_dump($frutas);

    $nombre = $_GET['nombre'];
    $apellidos = $_GET['apellidos'];
    $age = $_GET['edad'];

    echo "Me llamo $nombre $apellidos y tengo $age años";

//http://localhost:8080/index.php?nombre=Fulanito&apellidos=de%20tal&edad=22454534534
*/
    declare(strict_types=1);
    $nombre = 'Abel';

    //$nombre = 'Moises'
    // if ($nombre)  -->   if ($nombre == true)

    require_once "utils.php";


    $resultado = suma(4,5);

    require_once "template.html";






