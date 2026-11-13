<?php

namespace Dwes\ProyectoVideoclub;

class Videoclub {

    private array $productos = [];
    private int $numProductos = 0;
    private array $socios = [];
    private int $numSocios = 0;


    public function __construct(
        private string $nombre
    ) {}

    private function incluirProducto(Soporte $producto): void{
        $this->productos[] = $producto;
        echo "<br>Incluido soporte número " . $producto->getNumero() ."<br>";
    }

    public function incluirCintaVideo(string $titulo, float $precio, int $duracion): void {
        $this->numProductos++;
        $cinta = new CintaVideo($titulo, $this->numProductos, $precio, $duracion);
        $this->incluirProducto($cinta);
    }

    public function incluirDvd(string $titulo, float $precio, string $idiomas, string $pantalla): void {
        $this->numProductos++;
        $dvd = new Dvd($titulo, $this->numProductos, $precio, $idiomas, $pantalla);
        $this->incluirProducto($dvd);
    }

    public function incluirJuego(string $titulo, float $precio, string $consola, int $minJ, int $maxJ): void {
        $this->numProductos++;
        $juego = new Juego($titulo, $this->numProductos, $precio, $consola, $minJ, $maxJ);
        $this->incluirProducto($juego);
    }

    public function incluirSocio(string $nombre, int $maxAlquileresConcurrentes = 3): void {
        $this->numSocios++;
        $socio = new Cliente($nombre, $this->numSocios, $maxAlquileresConcurrentes);
        $this->socios[] = $socio;
        echo "<br>Incluido socio numero " . $this->numSocios . "<br>";
    }

    public function listarProductos(): void {
        echo "<br><h3>Listado de productos del videoclub " . $this->nombre . ":</h3>";
        foreach ($this->productos as $producto) {
            $producto->muestraResumen();
            echo"<br>-----------------<br>";
        }
    }

    public function listarSocios(): void {
        echo "<br><h3>Listado de socios del videoclub " . $this->nombre . ":</h3>";
        foreach ($this->socios as $socio) {
            $socio->muestraResumen();
            echo"<br>-----------------<br>";
        }
    }

    public function alquilarSocioProducto(int $numeroCliente, int $numeroSoporte): Videoclub{
        $clienteEncontrado = null; //Se inicializa en null
        foreach ($this->socios as $socio) {
            if ($numeroCliente == $socio->getNumero()) {
                $clienteEncontrado = $socio;
                break;
            }
        }

        if ($clienteEncontrado == null) {
            echo "El cliente numero " . $numeroCliente . " no existe";
            return $this;
        }

        $soporteEncontrado = null;
        foreach($this->productos as $producto){
            if ($numeroSoporte == $producto->getNumero()) {
                $soporteEncontrado = $producto;
                break;
            }
        }

        if ($soporteEncontrado == null) {
            echo "El soporte numero " . $numeroSoporte . " no existe";
            return $this;
        }

        return $clienteEncontrado->alquilar($soporteEncontrado);
    }


}