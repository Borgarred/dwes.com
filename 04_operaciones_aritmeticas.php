<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Expresiones. operadores y operandos1
    </h2>

    <p>Una expresión es una combinación de opreandos y operadores que arroja un resultado.
        Tiene tipo de datos, que depende de tipo de datos de sus operandos y de la operación realizada.<br>
        Un operador es un símbolo formado por uno, dos o tres caracteres que denota una operación.<br>
        Los operadores pueden ser:<br>
        -Unarios: Solo necesitan un operando.
        -Binarios: Utilizan dos operandos.
        -Trinarios: Utilizan tres operandos.<br>

        Un operando es una expresión en si misma, siendo la más simple un literal o una variable, pero también puede ser un valor devuelto por una función o el resultado de otra expresión.<br>
        Las operaciones de una expresión no se ejecutan a la vez, sino en orden según la precedencia y asociatividad de los operadores. Esta se puede alterar a conveniencia.
    </p>

    <h2>Operadores</h2>
    <h3>Asignación</h3>

    <?php

    define("PI", 3.14159);

    //El operador de asignación es =
    $numero = 4;
    $resultado = $numero + 40;
    $sin_valor = NULL;

    ?>

    <h3>Operadores aritméticos</h3>
    <?php

    /*  + Suma
        - Resta
        * Multiplicación
        / División
        % Módulo
        ** Exponente

        Unarios
        + Conversión a entero
        - el opuesto
    */

    $numero1 = 4;
    $numero2 = 5;
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $opuesto = -$numero1;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $modulo = $numero1 % 3;
    $potencia = $numero1 ** 2;
    echo "numero1: $numero1 y numero2: $numero2<br>";
    echo "$suma $resta $opuesto $multiplicacion $division $modulo $potencia<br>";

    $numero3 = "35";
    $numero4 = +$numero3;
    echo "El \$numero4 es $numero4 y su tipo es " . gettype($numero4) . "<br>";

    $numero5 = PI;
    $numero6 = +$numero5;
    echo "El \$numero6 es $numero6 y su tipo es " . gettype($numero6) . "<br>";

    $numero1 = 35;
    $numero2 = 15;
    $resultado_entero = (int) ($numero1 / $numero2);
    echo "Resultado: $resultado_entero<br>";

    ?>

    <h2>Asignación aumentada</h2>
    <?php

    /* Operadores de asignación aumentada
    ++ aumento
    -- decremento
    *=
    -=
    *=
    /=
    %=
    */

    $numero = 4;
    $numero++; //Equivalente a numero = $numero + 1
    echo "Antes número era 4 ahora es $numero<br>";
    ++$numero; //Equivalente a $numero = $numero + 1
    echo "Antes número era 5, ahora es $numero<br>";

    $numero = 10;
    $resultado = $numero++ * 2;
    echo "El resultado es $resultado y el número es $numero<br>";

    $numero = 10;
    $resultado = ++$numero * 2;
    echo "El resultado es $resultado y el número es $numero<br>";

    $numero += 5; //Equivale a numero = numero + 5
    echo "El número es $numero<br>";
    $numero -= 5; //Equivale a numero = numero - 5
    ?>

    <h2>Operadores relacional</h2>
    <?php
    /*
        == igual a
        === Identico a
        != Distinto de
        !== distinto valor o distinto tipo
        > mayor que
        < menor que
        >= mayor o igual
        <= menor o igual
        <=> Nave espacial
    */

    $n1 = 5;
    $cadena = "5";
    $n2 = 8;

    $resultado = $n1 == $n2;
    echo "Es n1 igual a n2: " . (int)$resultado . "<br>";

    $resultado = $n1 == $cadena;
    echo "Es n1 igual a cadena: " . (int)$resultado . "<br>";

    $resultado = $n1 === $cadena;
    echo "Es n1 identico a cadena: " . (int)$resultado . "<br>";

    $resultado = $n1 !== $cadena;
    echo "Es n1 no identico a cadena: " . (int)$resultado . "<br>";

    //Funciona igual que el método compare to en Java
    /* Si n1 mayor que n2 -> 1,
    Si n1 es igual que $n 2 -> 0
    SI el $n1 es igual que -> -1;
    */

    $resultado = $n1 <=> $n2;
    echo "Es n1 menor, igual o mayo que n2: " . (int)$resultado . "<br>";

    ?>

    <h2>Operadores Lógicos</h2>

    <?php

    /*
    AND conjunción lógica
    OR disyunción lógica
    XOR exclusivo
    ! not
    && And lógico
    // Or lógico
    */

    $n1 = 9;
    $n2 = 5;
    $n3 = 10;
    $resultado = $n1 == $n2 or $n2 > $n3;
    $resultado = $n1 == $n2 and $n2 > $n3;
    echo "El resultado es " . (int)$resultado . "<br>";

    $resultado = $n1 == 9 or $n2 < $n1 and $n3 > 10;
    echo "El resultado es " . (int)$resultado . "<br>";

    $resultado1 = ($n1 == 9 or $n2 < $n1) and $n3 > 10;
    $resultado = $resultado1 and $n3 > 10;
    echo "El resultado es " . (int)$resultado . "<br>";

    $resultado = $n1 == 9 || $n2 < $n1 and $n3 > 10;
    echo "El resultado es " . (int)$resultado . "<br>";


    $resultado = $n1 + 5 / $n3 < $n1 ** 3 and $n3 / 5 + $n2 * 2 >= $n1 * $n2 / $n3 or $n1 - 3 % 2 == $n3 - 7;
    ?>

</body>

</html>