<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Estructuras de control</h1>

    <h2>Sentencias</h2>
    <p>Las sentencias simples acaban en ; pudiendo haber más de una en la misma línea</p>

    <?php
    $numero = 3;
    echo "El numero es $numero <br>";
    $numero += 3;
    print "Ahora es $numero<br>";
    ?>

    <p>Un bloque de sentencias es un conjunto de sentencias encerrados entre llaves. No suelen ir solas, sino formar parte de una estructura de contro. Además,
        se pueden anidar.</p>

    <?php

    $numero = 5;
    echo "El número es $numero<br>";

    $numero -= 2;
    echo "Ahora es $numero<br>"; {
        $numero = 8;
        $numero *= 2;
        echo "El número es $numero<br>";
    }

    echo "El número es $numero<br>";
    ?>

    <?php

    //if (expresión) sentencia:
    $numero = 4;
    if ($numero >= 4) echo "El número es mayor o igual a 4<br>";

    if ($numero === 4 and $numero % 2 == 0)

    ?>

    <h2>Estructuras condicional doble</h2>

    <?php

$n1 = 9;
$n2 = 5;



//Uso de HTML en las estructuras de control
$edad = 35;

if ($edad > 18 and $edad < 65) { ?>
        <h3>Servicios del gimnasio disponibles</h3>
        <ul>
            <li>Spinning</li>
            <li>Boxeo</li>
            <li>Zumba</li>
        </ul>

    <?php
} else { ?>
        <h3>Servicios para jubilado o menores de 18</h3>
        <ul>
            <li>Taichi</li>
            <li>Pilates</li>
            <li>Yoga</li>
        </ul>

    <?php
}

if ($tipo_carnet == "C1")
    echo <<<CARNET_C1
    <h2>Documentación para obtener el carnet $tipo_carnet</h2>
    <ul>
        <li>Fotocopia del carnet</li>
        <li>Certificado de penales</li>
        <li>Carnet</li>
    </ul>
    CARNET_C1;

    ?>

    <h2>If else Anidado</h2>

    <?php

    $nota = 6.5;
    if ($nota >= 0 and $nota < 5)
        echo "Suspenso";
    elseif ($nota < 6)
        echo "Aprobado";
    elseif ($nota < 7)
        echo "Bien";
    elseif ($nota < 9)
        echo "Notable";
    elseif ($nota <= 10)
        echo "Sobresaliente";
    else "La nota no es correcta";

    echo "<br>";

    //Estructura condicional múltiple switch
    $nota = 7;
    switch ($nota) {
        case 1:
        case 2:
        case 3:
        case 4:
            echo "Suspeno";
            break;
        case 5:
            echo "Aprobado";
            break;
        case 6:
            echo "Bien";
            break;
        case 7:
        case 8:
            echo "Notable";
            break;
        case 9:
        case 10:
            echo "Sobresaliente";
            break;
        default:
            echo "La nota no es válida";
    }

    echo "<br>";

    //Expresión match
    $calificacion = match ($nota) {
        0, 1, 2, 3, 4 => "Suspenso",
        5 => "Aprobado",
        6 => "Bien",
        7, 8 => "Notable",
        9, 10 => "Sobresaliente",
        default => "Nota no valida"
    };

    echo "Con tu nota $nota tienes una calificación de $calificacion<br>";

    ?>

    <h2>Operador ternario</h2>

    <?php

    //Sintaxis
    // <condicion> ? <expresion_true> : <expresion_false>;

    $nota = 6;
    $resultado = $nota >= 5 ? "Suficiente" : "Suspenso";
    echo "$resultado <br>";
    $con_beca = True;
    $nombre = "Juan Gomez";

    ?>

    <form action="" method="POST">
        <input type="text" name="nombre" size="30" value="<?= isset($nombre) ? $nombre : "" ?>"><br>
        <input type="checkbox" name="con beca" <?= $con_beca ? "checked" : "" ?>>Con beca <br>
        <button>Enviar</button>
    </form>

    <h2>Operador de fusion NULL</h2>

    <?php

    $metodo = "POST";
    $segundo_metodo = "GET";
    $por_defecto = "main";
    $resultado = $metodo ?? $segundo_metodo;
    echo "El resultado es $resultado <br>";

    unset($metodo);
    $segundo_metodo = "GET";
    $por_defecto = "main";
    $resultado = $metodo ?? $segundo_metodo;
    echo "El resultado es $resultado <br>";

    unset($metodo);
    unset($segundo_metodo);
    $por_defecto = "main";
    $resultado = $metodo ?? $segundo_metodo ?? $por_defecto;
    echo "El resultado es $resultado <br>";

    ?>

    <h2>Bucles</h2>

    <ul>
        <li>For con contador</li>
        <li>For para colecciones de datos</li>
        <li>While</li>
        <li>Do while</li>
        <li>Sentencias break y continue</li>
    </ul>

    <h3>Bucle for con contador</h3>

    <?php

    //Tabla de multiplicar del 4
    echo "La tabla de multiplicar del 4: <br>";
    for ($i = 1; $i <= 10; $i++) {
        $numero = 4;
        echo "$numero X $i = " . strval($numero * $i) . "<br>";
    }

    echo "Los 10 primeros números pares<br>";
    for ($i = 2; $i < 2 * 10; $i += 2) {
        echo "Número par $i<br>";
    }

    echo "La cuenta atrás para el lanzamiento<br>";
    for ($i = 10; $i >= 0; $i--) {
        echo "$i segundos<br>";
    }
    echo "Ignición!!!!!!!!!!!!!!!!!!!!!!!! PUUUUUUUUUUUUUUUUUUUUUMMMMMMMMMMMMMMMMM!!!!!!!!!!!<br>";

    //Varias expresiones en el inciio del contador
    // y en la parte del incremento
    for ($i = 10, $j = 0; $i >= 5 and $j < 8; $i--, $j += 2) {
        echo "Valor de i es $i, y valor de j es $j<br>";
    }

    ?>

    <h3>Bucle While</h3>

    <?php

    //Sumar los numeros pares que se generan aleatoriamente hasta que salga el 0

    $total = 0;
    while ($numero != 0) {
        $numero = rand(0, 10);
        echo "El numero generado es $numero<br>";
        if ($numero % 2 == 0) {
            $total += $numero;
        }
    }
    echo "La suma total de los números pares es $total<br>";
    ?>

    <h3>Do While</h3>

    <?php

    //Contar cuantos númerosimpares se generan aleatoriamente hasta que se genera uno negativo
    $total = 0;
    do {
        $numero = rand(-5, 50);
        if (abs($numero) % 2 == 1)
            $total++;
        echo "Se ha generado el $numero<br>";
    } while ($numero >= 0);
    echo "Se han generado $total números impares<br>";

    ?>

    <h3>Sentencia break y continue</h3>

    <?php

    // Bucle repetir .. hasta con break
    $total = 0;
    do {
        $numero = rand(0, 20);
        if ($numero % 3 == 0 && $numero != 0) $total++;
        echo "El número generado es $numero <br>";
        echo "<span style = 'color:red;'> El número $numero es múltiplo de tres</span> <br>";
        if (!$numero) break;
    } while (True);
    echo "Se han generado $total numeros multiplos de 3<br>";

    //Generar números aleatorios entre 1 y 10, y sumar los pares
    //hasta que la suma sea superior a 100 o se hayan generado
    //como máximo 20 números

    $suma_pares = 0;
    $contador = 0;
    while (True) {
        $numero = rand(1, 10);
        if ($numero % 2 == 0) {
            $suma_pares += $numero;
        }
        if ($suma_pares > 100) {
            break;
        }
        $contador++;
        if ($contador > 20) {
            break;
        }
    }
    echo "Se han generado $contador números y la suma de los pares es $suma_pares<br>";

    //Generar más de 200 números aleatorios entre 1 y 1000.
    //Por cada número se comprueba cuantos números primos
    //hay desde 1 hasta ese número.
    //Si hay mas de 10 números primos que termine.
    //Al final visualizar cada número generado y los primos hasta ese número.

    $contador_primos = 0;
    for ($i = 0; $i < 200; $i++) {

        $numero = rand(1, 1000);
        echo "El número generado es: $numero<br>";

        echo "Primos: ";

        for ($j = 1; $j < $numero; $j++) {
            //Averiguar si es primo
            $es_primo = True;
            $raiz_cuadrada = $j ** 0.5; //Raiz cuadrada de $j
            $k = 2;
            while ($es_primo && $k <= $raiz_cuadrada) {
                if ($j % $k == 0) $es_primo = false;
                $k++;
            }
            //Como podemos saber que el numero es primo?
            if ($es_primo) {
                echo "$j ";
                $contador_primos++;
                if ($contador_primos > 10) break 2;
            }
        }
        echo "<br>";
    }
    echo "<br>";

    //Genera 10 números aleatorios
    //Por cada uno genera tantos caracteres en minúscula aleatorios coo ese número
    //Si alguno de los caracteres generados es z, se acaba y
    //no se generan
    //Si el número generado es impar, que vuelva a generar otro.

    for ($i = 1; $i <= 10; $i++) {

        $numero = rand(1, 10);
        echo "Número $i: $caracter<br>";
        if ($numero % 2 == 1) continue;

        //Genero un caracter aleatorio
        $codigo_ascii_letra = rand(97, 122);
        $caracter = chr($codigo_ascii_letra);
        if ($caracter == "z") break;
    }
    echo "<br>"
    ?>

    <h3>Sintaxis alternativa a la estructura de control</h3>

    <?php

    $numero = rand(1, 100);
    if ($numero % 2 == 0):
        echo "El número $numero es par<br>";
    else:
        echo "El número $numero es impar<br>";
    endif;

    echo "<br>";

    for ($i = 1; $i <= 10; $i++):
        echo "$i x $numero = " . $i * $numero . "<br>";
    endfor;

    echo "<br>";

    $i = 10;
    while ($i > 0):
        echo "El valor de i es $i<br>";
        $i--;
    endwhile;

    ?>

</body>

</html>