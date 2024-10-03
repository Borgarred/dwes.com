<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos del lenguaje</title>
</head>

<body>
    <h1>Elementos del lenguaje</h1>

    <h2>Entrada y salida</h2>
    <p>La entrada de datos en PHP es con un formulaio o con un enlace. La salida
        de datos se produce con la función echo y su forma abreviada, y la función print.
        Además, para la salida de datos con formato tenemos printf.
    </p>
    <h3>Función echo</h3>
    <?php
    echo "<p>La función echo emite el resultado de una expresíon a la salida. Se puede usar como función o como construcción del lenguaje(sin paréntesis)</p>";
    echo "<p>Esto es un párrafo HTML enviado por echo</p>";
    $nombre = "Borja";
    echo "Hola, ", $nombre, ", cómo estas?<br>";

    //echo("Hola", $nombre, "cómo estas?") no sirve, hay más de un argumento.
    echo ("Hola, Borja, cómo estas?<br>");

    //Quiero un salto de línea al final de la línea
    echo "Hola, esta línea acaba en un salto.\n";
    echo "Supuestamente esta línea es la siguiente a la anterior\n y esta va después</br>";

    $nombre = "Pepe";
    $apellidos = "López";

    echo "<br>Mi nombre es $nombre y mi apellido es $apellidos";
    echo "<br>Mi nombre es " . $nombre . " y mi apellido es " . $apellidos . "</br>";

    echo "<br>Uno más dos son ", 1 + 2, " y tiene que haber salido 3</br>";
    //El operador "." no tiene preferencia sobre le operador suma:
    echo "<br>Uno más dos son " . 1 + 2 . " y tiene que haber salido 3</br>";

    echo "<h4>Forma abreviada de echo</h4>";
    echo "<p>Cuando hay que enviar a la salida del resultado de una expresión pequeña disponemos de la forma abreviada de echo que permite intercalarse en el código
    HTML con menos esfuerzo";

    $tiene_portatil = True;

    ?>

    <!-- La forma abreiadad de eho va dentro de HTML -->
    <!-- &lt;?= expresion?&gt; equivale a &lt?php echo expresión ?&gt; -->
    <p>Mi nombre es <?= $nombre . " " . $apellidos ?>

        <!-- Uso muy habitual. Valores por defecto en controles de formulario -->
        <input type='text' name='nombre' size='15' value='<?= $nombre ?>'></br>
        <input type='checkbox' name='portatil' <?= $tiene_portatil ? 'checked' : '' ?>> ¿Tienes portátil?

        <!-- Consejo: Las cadenas de PHP con " y en HTML con ' -->

        <?php
        echo "<br><input type = 'text' name= 'apellidos' size = '50'>";
        ?>

    <h3>Función print</h3>

    <p> Funciona igual que echo</p>
    <?php
    print "<p>Esto es una cadena\nque tiene más de una linea\ny se envían a la salida</p>";
    print "<p>Mi nombre es $nombre $apellidos</p>";
    ?>

    <h3>Función printf</h3>

    <?php
    $pi = 3.14149;
    $radio = 3;
    $circunferencia = 2 * $pi * $radio;
    printf("<br>La circunferencia de radio %d es %f", $radio, $circunferencia);

    ?>
    <h3>Tipo de datos</h3>


</body>

</html>