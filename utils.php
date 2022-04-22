<?php
    function suma (int $num1, int $num2): int{
        $suma = $num1 + $num2;
        return $suma;
    }

    function saludo(string $nombre): void{
        echo "Hola $nombre";
    }

    function dameFecha(): string{
        return date("Y-m-d");
    }
