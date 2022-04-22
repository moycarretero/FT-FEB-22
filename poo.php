<?php
    require_once "Coche.php";

    $miCoche = new Coche("Renault", "Clio");

    $miCoche->repostarCombustible(20);
    $miCoche->mover(200);
    $miCoche->repostarCombustible(9.4);
    $miCoche->mover(45);

    $miCoche->pintarInfo();

    $miCoche->mover(120);
    $miCoche->repostarCombustible(30);

    $miCoche->pintarInfo();

    $otroCoche = new Coche("Seat", "Ibiza");
    $otroCoche->repostarCombustible(10);
    $otroCoche->mover(40);

    $otroCoche->pintarInfo();

    $audi = new Coche("Audi", "A5");
    $audi->pintarInfo();

    $otroClio = new Coche("Renault", "Clio");
