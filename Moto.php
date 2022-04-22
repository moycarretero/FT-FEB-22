<?php
require_once "Vehiculo.php";

class Moto extends Vehiculo
{
    protected int $cilindrada;

    /**
     * @return int
     */
    public function getCilindrada(): int
    {
        return $this->cilindrada;
    }

    /**
     * @param int $cilindrada
     */
    public function setCilindrada(int $cilindrada): void
    {
        $this->cilindrada = $cilindrada;
    }


}
