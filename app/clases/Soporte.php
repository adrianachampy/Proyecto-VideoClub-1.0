<?php

namespace clases;

class Soporte {
    public string $titulo;
    protected int $numero;
    private float $precio;
    private static float $IVA = 0.21;

    public function __construct(string $titulo, int $numero, float $precio) {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }

    /**
     * @return float
     */
    public function getPrecio(): float
    {
        return $this->precio;
    }

    public function getPrecioConIva(): float {
        return $this->precio * static::$IVA;
    }

    /**
     * @return int
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    public function muestraResumen(): void {
     echo "<br><strong>" . $this->titulo . "</strong>";
     echo "<br>Número: " . $this->numero;
     echo "<br>Precio: " . $this->precio;
     echo "<br>Precio con IVA: " . $this->getPrecioConIva() . "€";
    }


}