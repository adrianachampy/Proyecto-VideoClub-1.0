<?php

namespace clases;

class Cliente {
    public string $nombre;
    private int $numero;
    private array $soportesAlquilados = [];
    private int $numSoportesAlquilados;
    private int $maxAlquilerConcurrente;
}