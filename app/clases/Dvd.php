<?php

namespace clases;

class Dvd extends Soporte {
    public string $idiomas;
    private string $formatPantalla;

    public function __construct(string $titulo, int $numero, float $precio, string $idiomas, string $formatPantalla) {
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;
    }

    public function muestraResumen(): void {
        parent::muestraResumen();
        echo "<br>Idiomas: " . $this->idiomas;
        echo "<br>Formato Pantalla: " . $this->formatPantalla;
    }
}