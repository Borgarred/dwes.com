<?php

use LDAP\Result;

define("SALTO", "<br>");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Variables</h3>

    <?php
    //la variables se definen con $identificador
    $nombre_variable = "Valor varable";

    //Variables que no se han definido
    $resultado = $numero + 25;
    echo "el valor de numero es $numero y el resultado es $resultado <br>";


    $resultado = $sin_definir + 5.5;
    echo "El valor de sin definir $sin_definir y el resultado es $resultado <br>";

    //Si la variable esta en un contexto logico su valor
    //logico asuma por defecto false


    ?>

    <h2>Analisis de variables</h2>
    <h3>Analisis simple</h3>

    <?php
    //Consiste en introducir una variable en una cadena con " o heredoc
    // para incrustar su valor denro de la cadena

    echo "El resultado es $resultado <br>"


    ?>
    <h3>Analisis complejo</h3>

    <?php
    //En algunas situaciones nos encontramos ambiguedad en
    //una variable interpolada. Para ello usamos las llaves y se elima la ambiguedad
    $calle = "Trafalgar Sq";
    $numero = "3";
    $poblacion = "London";
    $distrito = "50000";
    echo "MI direccion en londres es $numeroth, $calle <br> $poblacion <br> $distrito <br>";


    ?>

    <h2>Funciones para variables</h2>

    <?php

    //función gettype
    $numero = 10;
    echo "El tipo de datosde $resultado es " . gettype($resultado) . "<br>";
    echo "El tipo de datos de una expresión es " . gettype($numero) . "<br>";

    //Función empty()
    /*Comprueba si una variable esta tiene un valor y ya dependiendo del valor
    Si es entero devuelve true si es 0, False en caso contrario.
    Si es float devuelve True si es 0.0, False en caso contrario.
    Si es cadena devuelve True si es "", Flase en caso contrario.
    Devuelve True si es NULL o False.*/

    if (empty($numero)) echo "\$numero tiene el valor $numero<br>";
    else echo "\$numero tiene un valor no vacío.<br>";

    $numero = NULL;
    if (empty($numero)) $numero = 13;
    else echo "\$numero ya tiene un valor asignado y es $numero<br>";

    //Funcion isset()
    //Devuelve True si la variable está definida y no es NULL

    if (isset($nueva_variable)) echo "La variable esta definida y su valor es $nueva_variable<br>";
    else echo "La variable no está definida<br>";

    $variable_null = Null;
    if (isset($variable_null)) echo "La variable está definida<br>";
    else echo "La variable $variable_null no está definida y tiene valor NULL<br>";

    /*Funciones que comprueban los tipos de datos
        is_bool() -> True si la expresión es booleana
        is_int() -> True si la expresión es entero
        is_float() -> True si la expresión es float
        is_string() -> True si la expresión es string
        is_array() -> True si la expresión es un array

        En cualquier otro caso devuelve false
    */

    $edad = 25;
    $mayor_edad = $edad > 18;
    $numero_e = 2.71;
    $mensaje = "El número e es " . $numero_e . "<br>";

    if (is_int($edad)) echo "\$edad es un entero<br>";
    if (is_bool($mayor_edad)) echo "\$mayor_edad es booleano<br>";
    if (is_float($numero_e)) echo "\$numero_e es float<br>";
    if (is_string($mensaje)) echo "\$mensaje es string<br>";

    ?>

    <h2>Constantes</h2>
    <p>Una constante es un valor con nombre que no puede cambiar de valor en el programa. Se le asigna un valor en la declaración y permanece invariable.
        Se define de dos formas:<br>
        Mediante la función define()<br>
        Mediante la palabra clave const
    </p>

    <?php

    define("PI", 3.14159);
    define("PRECIO_BASE", 1500);
    define("DIRECTORIO_SUBIDAS", "/uploads/archivos");

    echo "El número PI es" . PI . "<br>";
    $area_circulo = PI * PI * 5;
    echo "El área del círculo de radio 5 es $area_circulo<br>";

    $path_archivo = DIRECTORIO_SUBIDAS . "/archivo.pdf";
    echo "El archivo subido es $path_archivo<br>";

    $precio_rebajado = PRECIO_BASE - PRECIO_BASE * 0.25;
    echo "El precio rebajado es $precio_rebajado<br>";

    const SESION_USUARIO = 600;
    echo "La sesión de usuario finaliza en " . SESION_USUARIO . "Segundos<br>";


    //Constantes predefinidas por PHP
    echo "El script es " . __FILE__ . " y la línea es " . __LINE__ . SALTO;

    ?>

</body>

</html>