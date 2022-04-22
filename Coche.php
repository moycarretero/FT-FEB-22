<?php
require_once "Vehiculo.php";

class Coche extends Vehiculo
{

    protected string $matricula;
    protected int $kilometrosRecorridos;
    protected float $cantidadCombustible;

    public function __construct(string $marca, string $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;

        $this->kilometrosRecorridos = 0;
        $this->cantidadCombustible = 0;
    }

    public function mover(int $distancia)
    {
        $this->kilometrosRecorridos += $distancia;
        $this->cantidadCombustible -= $distancia * 0.05;
    }

    public function repostarCombustible(float $cantidadCombustible)
    {
        $this->cantidadCombustible += $cantidadCombustible;
    }

    public function pasarITV()
    {

    }


    /**
     * @return string
     */
    public function getMatricula(): string
    {
        return $this->matricula;
    }

    /**
     * @param string $matricula
     */
    public function setMatricula(string $matricula): void
    {
        $this->matricula = $matricula;
    }

    /**
     * @return int
     */
    public function getKilometrosRecorridos(): int
    {
        return $this->kilometrosRecorridos;
    }

    /**
     * @param int $kilometrosRecorridos
     */
    public function setKilometrosRecorridos(int $kilometrosRecorridos): void
    {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }

    /**
     * @return float|int
     */
    public function getCantidadCombustible(): float
    {
        return $this->cantidadCombustible;
    }

    /**
     * @param float|int $cantidadCombustible
     */
    public function setCantidadCombustible(float $cantidadCombustible): void
    {
        $this->cantidadCombustible = $cantidadCombustible;
    }


    public function pintarInfo()
    {
        echo "<ul>";
        echo "<li>Mi marca es {$this->marca}</li>";
        echo "<li>Mi modelo es {$this->modelo}</li>";
        echo "<li>Mi kilometrosRecorridos es {$this->kilometrosRecorridos}</li>";
        echo "<li>Mi cantidadCombustible es {$this->cantidadCombustible}</li>";
        echo "</ul>";
    }

}
