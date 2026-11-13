<?php

namespace Dwes\ProyectoVideoclub;

class Juego extends Soporte {

    public function __construct(
        string $titulo,
        int $numero,
        float $precio,
        public string $consola,
        private int $minNumJugadores,
        private int $maxNumJugadores
    ) {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraJugadoresPosibles(): void {
        if($this->minNumJugadores === 1 && $this->maxNumJugadores === 1) {
            echo "<br>Para un jugador";
        } elseif ($this->minNumJugadores === $this->maxNumJugadores) {
            echo "<br>Para " . $this->minNumJugadores . " jugadores";
        } else {
            echo "<br> De " . $this->minNumJugadores . " a " . $this->maxNumJugadores . " jugadores";
        }
    }

    public function muestraResumen(): void {
        parent::muestraResumen();
        echo "<br>Consola: " . $this->consola;
        $this->muestraJugadoresPosibles();
    }
}