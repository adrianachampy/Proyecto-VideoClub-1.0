<?php

namespace clases;

class Soporte {

    private static float $IVA = 0.21;

    public function __construct(
        public string $titulo,
        protected int $numero,
        private float $precio
    ) { }

    public function getPrecio(): float {
        return $this->precio;
    }

    public function getPrecioConIva(): float {
        return $this->precio * (1 + static::$IVA);
    }
    /*Si el IVA es fijo y nunca va a cambiar por tipo de producto:
    Puedes poner self::$IVA sin ningún problema.
    Si quieres dejar el código preparado por si una clase hija cambia el IVA:
    Se usa static::$IVA*/

    public function getNumero(): int {
        return $this->numero;
    }

    public function muestraResumen(): void {
     echo "<br><strong>" . $this->titulo . "</strong>";
     echo "<br>Número: " . $this->numero;
     echo "<br>Precio: " . $this->precio;
     echo "<br>Precio con IVA: " . $this->getPrecioConIva() . "€";
    }


}