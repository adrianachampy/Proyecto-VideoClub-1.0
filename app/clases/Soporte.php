<?php

namespace Dwes\ProyectoVideoclub;

abstract class Soporte implements Resumible {

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
     echo "<br>Precio: " . $this->precio . "€";
     echo "<br>Precio con IVA: " . $this->getPrecioConIva() . "€";
    }

/*Transforma Soporte a una clase abstracta y comprueba que todo sigue funcionando.
¿Qué conseguimos al hacerla abstracta?
Que no se pueda instanciar al ser abstracta, solo pueden sus clases hijas,
quedando así como una plantilla/base para ellas.
El new Soporte de inicio.php ya no se puede hacer.

 * Crea un interfaz Resumible, de manera que las clases que lo implementen deben
ofrecer el metodo muestraResumen. Modifica la clase Soporte y haz que
implemente la interfaz. ¿Hace falta que también lo implementen los hijos?
No hace falta implementarlo en los hijos, porque estos heredan de Soporte,
así que automaticamente heredan la implementacion de Resumible*/

}