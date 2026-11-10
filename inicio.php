<?php
include_once "autoload.php";

use clases\Soporte;
use clases\CintaVideo;
use clases\Dvd;
use clases\Juego;

/*$soporte1 = new Soporte("Tenet",22,3);
echo "<strong>" . $soporte1->titulo . "</strong>";
echo "<br>Precio: " . $soporte1->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $soporte1->getPrecioConIVA() . " euros <br>";
$soporte1->muestraResumen();

echo "<br><br>";
*/

$miCinta = new CintaVideo("Los cazafantasmas", 23, 3.5, 107);
echo "<strong>" . $miCinta->titulo . "</strong>";
echo "<br>Precio: " . $miCinta->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miCinta->getPrecioConIva() . " euros <br>";
$miCinta->muestraResumen();

echo "<br><br>";

$miDvd = new Dvd("Origen", 24, 15, "es,en,fr", "16:9");
echo "<strong>" . $miDvd->titulo . "</strong>";
echo "<br>Precio: " . $miDvd->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miDvd->getPrecioConIva() . " euros <br>";
$miDvd->muestraResumen();

echo "<br><br>";

$miJuego = new Juego("The Last of Us Part II", 26, 49.99, "PS4", 1,
    1);
echo "<strong>" . $miJuego->titulo . "</strong>";
echo "<br>Precio: " . $miJuego->getPrecio() . " euros";
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIva() . "
euros <br>";
$miJuego->muestraResumen();