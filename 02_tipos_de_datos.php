<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>

<body>
    <h1>Tipos de datos: 02tipos_de_datos.php</h1>
    <p>Tipos de datos escalares(primitivos)</p>
    <ul>
        <li>Booleanos</li>
        <li>Numérico entero</li>
        <li>En coma flotante</li>
        <li>Cadena de carácteres</li>
    </ul>
    <p>Datos compuestos</p>
    <ul>
        <li>Array</li>
        <li>Objetos</li>
        <li>Callable</li>
        <li>Iterable</li>
    </ul>

    <p>Tipos especiales</p>

    <ul>
        <li>Resource</li>
        <li>NULL</li>
    </ul>

    <h2>Booleanos</h2>
    <p>Inicialmente las constantes True y False. Sin embargo otros tipos de datos tieenen conversión implícita al tipo boolenao</p>

    <ul>
        <li>Numérico entero: 0 y el -0 es False, cualquier otra cosa es True</li>
        <li>Numérico en coma flotante: 0.0 y -0.0 es Flase, otro valor es True</li>
        <li>Un Array con 0 elementos es False, con elementos es True</li>
        <li>El tipo especial NULL es False, otro valor distinto de NULL es True</li>
        <li>Una variable no definida es False</li>
    </ul>

    <?php

    $valor_booleano = True;
    $edad = 20;
    $mayor_edad = $edad > 10;

    echo "Mayor de edad es booleano: " . is_bool($mayor_edad);

    $dinero = 10;
    //equivalente a $dinero != 0
    if ($dinero) echo "<br>Soy rico<br>";
    else echo "<br>Soy pobre<br>";

    $mi_nombre = "Borja";
    if ($mi_nombre) echo "Me llamo $mi_nombre<br>"

    ?>

    <h2>Enteros</h2>
    <p>Números enteros en PHP son de 32bits (depende de la plataforma) Pueden expresarse en diferentes notaciones.</p>

    <?php

    $numero_entero = 1234;
    echo "Un número entero es $numero_entero<br>";

    $numero_negativo = -1234;
    echo "Un número negativo con - delante: $numero_negativo<br>";

    //Si quiero expresar un número entero en octal
    $numero_octal = 0123;
    echo "Un número octal en decimal $numero_octal<br>";

    //Puedo mostrar un número entero en octar
    echo "El número $numero_octal es en octal " . decoct($numero_octal) . "<br>";

    //Número entero en hexadecimal
    $numero_hex = 0x8AE;
    echo "El número 0x8AE en hexadecimal es en decimal: $numero_hex<br>";

    //Un número entero en binario
    $numero_binario = 0b110101101;
    echo "El número 110101101 es en decimal: $numero_binario<br>";

    //Mostrar un número expresado en binario
    echo "El número $numero_binario en binario es " . decbin($numero_binario) . "<br>"

    ?>

    <h2>Número en punto flotantes</h2>
    <p>El separador decimal es el punto . y se pueden expresar números muy grandes y muy pequeños mediante la notación cientifica con base 10

        <?php

        $pi = 3.14159;
        echo "El número PI es $pi<br>";
        echo "El pi con 2 decimales es " . round($pi, 2) . "<br>";

        $inf_int = 7.9e13;
        echo "Información que circula en internet en un día $inf_int<br>";

        $tamaño_virus = 0.2e-9;
        echo "Un virus tiene un tamaño de $tamaño_virus";

        ?>

    <h2>Cadena de caracteres</h2>
    <p>Un string o cadena es una serue de caracteres donde cada carácter equicale a un byte.
        Esto significa que PHP solo admite 256 caractees y por ello no ofrece soporte nativo a utf8. Un literal de tipo string se expresa de 4 formas:</p>

    <ul>
        <li>Comillas simples</li>
        <li>Comillas doble</li>
        <li>Heredoc</li>
        <li>Nowdoc</li>

    </ul>

    <h3>Comillas simples</h3>
    <?php

    //Una cadena encerrada entre comillas simples solo admite el caracter escape \' o \\
    echo 'Esto es una cadena sencilla<br>';
    echo 'Puedo poner una cadena
    en varias líneas
    por que la sentencia
    no acaba hasta
    el punto y coma<br>';

    //No se reconocen caracteres de escape excepto " y el \
    echo 'El mejor pub de la ciudad es 0\'Donnel<br>';
    echo 'La raíz del disco duro es C:\<br>';
    echo 'La raíz del disco duro es C:\\<br>';

    //El salto de línea no se expande
    echo 'Esta cadena tiene\nmas de una línea<br>';

    //No interpola variables
    $mi_nombre = "Manuel";
    echo 'Hola mi nombre es $mi_nombre<br>';
    ?>

    <h3>Comillas dobles</h3>
    <p>La forma habitual de expresión de cadenas de caracteres ya que expande los caracteres de escape y las variables</p>

    <?php

    $cadena = "Esto es una cadena con comillas dobles";
    echo "Esto es un objeto?" .  is_object($cadena) . "<br>";
    if (is_object($cadena)) echo "Las cadenas en PHP son objetos<br>";
    else echo "Las cadenas en PHP no son objetos<br>";

    $con_secuencias_esc = "\t\El símbolo \$ se emplea para las variables 
    y si lo quieres en una cadena hay que escaparlo con \\. Es mejor usar \" para delimitar las cadenas en lugar de '<br>";

    echo $con_secuencias_esc;

    ?>

    <h3>Cadenas HEREDOC</h3>
    <p>Es una cadena muy larga que comienzan con <<< le sigue un identificador u justo después un salto de lñinea.
            A continuación se escribe la cadena,
            con los saltos de línea que necesitemos, podems interpolar variables y poner caracteres de escape.
            Para finalizar hay que hacer in salto de línea y volve
            a poner el indentificador.

            <?php

            $cadena_hd = <<<HD
    Esto es una cadena
    heredoc que respeta los saltos de línea,
    le puedo poner variables como $mi_nombre y
    además secuencias de escape.
    El identificador no necesita \$ y tampoco
    usamos \", simplemente la escribimos y
    acabamos con un salto de línea
    más el indetificador.<br>
    HD;

            echo $cadena_hd;

            ?>

            <h3>Cadena NOWDOW</h3>
            <p>La cadena NowDoc es como Heredoc con comillas simples. No se interpolan variable sno se reconocen secuencias de escape más allá de \ y '.
                Sí se respetean los saltos de línea</p>

            <?php

            $cadena_nd = <<<'ND'
            Esto es una cadena NowDoc
            y el salto de línea se respeta,
            no puedo meter variables
            y solo reconoce \\ y \'. <br>
            ND;

            echo $cadena_nd;

            ?>

            <h2>Conversión de tipos de datos</h2>
            <p>Hay dos tipos de conversiones: implícitas y explícitas. Las primeras ocurren cuando en una expresión
                hay opredandos de diferente tipo. PHP covierte algunos de ellos para evaluar la expresión.
            </p>

            <?php

            $cadena = '25';
            $numero = 8;
            $booleano = true;
            $resultado = $cadena + $numero + $booleano;
            echo "El resultado es $resultado";

            ?>

            <p>¡¡¡Importante!!! Cuando se hace una conversión implícita solo afecta al operando, pero no a la variable. Es decir, la conversión de $cadena
                a entero solamente para evaluar la expresión, pero $cadena siendo de tipo string.</p>

            <?php

            $flotante = 3.5;
            $resultado = $cadena + $flotante + $numero + $booleano;
            echo "El resultado ahora es $resultado<br>";

            $cadena = '25 marranos dan mucho provecho';
            $resultado = $numero + $cadena;
            echo "El resultado es $resultado<br>";

            $cadena = "Más de 25 marranos dan mucho provecho, mejor que 7 lechones.";
            $resultado = $numero + $cadena;
            echo "El resultado es $resultado";
            ?>

            <p>conversiones explícitas se conocen como casting o moldeo
                y se hacen precediendo la expresión con el tipo de datos a convertir entre paréntesi</p>

            <?php

            //Si quiero convertir a un entero -> (int)expresión
            //Si quiero convertir a un float -> (float)expresión
            //Si quiero convertir a string -> (strinng)expresión

            echo "Conversiones a entero<br>";
            $valor_booleano = True;
            $valor_convertido = (int)$valor_convertido;
            echo "El valor convertido a entero es $valor_convertido<br>";
            $valor_float = 3.14159;
            $valor_convertido = (int)$valor_float;
            echo "El valor convertido a enter es $valor_convertido<br>";
            $valor_redondeado = round($valor_float, 0);

            $valor_cadena = "123";
            $valor_convertido = (int)$valor_cadena;
            echo "El valor convertido a entero es $valor_convertido<br>";


            ?>



</body>

</html>