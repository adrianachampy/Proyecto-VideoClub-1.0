<?php
/*Videoclub 2.0*/
spl_autoload_register(function ($class) {
    echo $class;
    $prefix = 'Dwes\\ProyectoVideoclub\\';
    $baseDir = __DIR__ . '/app/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $relativeClass) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
?>

/*Videoclub 1.0
 * spl_autoload_register( function( $nombreClase ) {
    include_once "app\\".$nombreClase.'.php';
} );*/