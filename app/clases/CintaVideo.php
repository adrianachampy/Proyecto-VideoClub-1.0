<?php

namespace clases;

class CintaVideo extends Soporte {
    private float $duracion;

    public function __construct(string $titulo, int $numero, float $precio, float $duracion) {
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    public function muestraResumen(): void {
        parent::muestraResumen();
        echo "<br>Duración: " . $this->duracion . " minutos";
    }
}