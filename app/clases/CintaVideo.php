<?php

namespace Dwes\ProyectoVideoclub;

class CintaVideo extends Soporte {

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        private float $duracion
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraResumen(): void {
        parent::muestraResumen();
        echo "<br>Duración: " . $this->duracion . " minutos";
    }
}