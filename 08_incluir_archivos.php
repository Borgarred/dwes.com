<?php


/*
    Para incluir archivos hay 4 formas que funcionan casi igual:
       -include() -> Incluye el contenido del argumento en el lugar donde se invoque. Si el
       archivo no existe, se emite un WARNING y el script continua.
       
       -require() -> Incluye el contenido del argumento en lugar donde se invoca. Si el archivo
       no existe, se genera un error fatal y termina la ejecución del script.

        ¿Qué ocurre si incluyo el mismo archivo más de una vez? Error por duplicidad de definición
        de funciones. Para evitarlo:

        -include_once() -> Igual que include() pero si el archivo ya había sido previamente incluido,
        no lo incluye.

        -require_once() -> Igual que require() pero si el archivo ya había sido previamente incluido,
        no lo incluye.

       */

$variable = 8;

include("includes/funciones.php");
include("includes/funciones2.php");

echo "En el script original<br>";
