<?php

namespace clases;

class Cliente {

    private array $soportesAlquilados = [];
    private int $numSoportesAlquilados = 0;

    public function __construct(
        public string $nombre,
        private int $numero,
        private int $maxAlquilerConcurrente = 3
    ) {}

    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void{
        $this->numero = $numero;
    }

    public function getNumSoportesAlquilados(): int {
        return $this->numSoportesAlquilados;
    }

    public function muestraResumen(): void {
        echo "Cliente: ".$this->nombre."<br>";
        echo "Alquileres actuales: ". count($this->soportesAlquilados);
    }

    public function tieneAlquilado (Soporte $s): bool {
        foreach ($this->soportesAlquilados as $soporte) {
            if($soporte->getNumero() === $s->getNumero()) {
                return true;
            }
        }
        return false;
    }

    public function alquilar(Soporte $s): bool {
        if ($this->tieneAlquilado($s)) {
            echo "<br>El cliente ya tiene alquilado el soporte : ".$this->titulo."<br>";
            return false;
        }

        if (count($this->soportesAlquilados) >= $this->maxAlquilerConcurrente) {
            echo "<br>El cliente ha alcanzado el cupo maximo: ".$this->maxAlquilerConcurrente."<br>";
            return false;
        }

        $this->soportesAlquilados[] = $s;
        $this->numSoportesAlquilados++;
        echo "<br>Alquiler realizado con éxito: ".$s->titulo;
        return true;
    }

    public function devolver(int $numSoporte): bool {
        /*Se pone $index, para que tambien me de la posicion en el array*/
        foreach ($this->soportesAlquilados as $index => $soporte) {
            if($soporte->getNumero() === $numSoporte) {
                unset($this->soportesAlquilados[$index]);
                $this->soportesAlquilados = array_values($this->soportesAlquilados);
                echo "<br>Soporte devuelto: Numero ".$numSoporte;
                return true;
            }
        }
        echo "<br>El cliente no tiene alquilado ningun soporte con el numero ".$numSoporte;
        return false;
    }

    public function listarAlquileres(): void {
        echo "<br><strong>El cliente tiene ".count($this->soportesAlquilados)." alquileres: </strong>";
        if (empty($this->soportesAlquilados)) {
            echo "<br>No tiene ningún soporte alquilado actualmente";
        } else {
            foreach ($this->soportesAlquilados as $soporte) {
                $soporte->muestraResumen();
                echo "<br>------------";
            }
        }
    }

}