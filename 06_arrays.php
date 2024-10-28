<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array</h1>
    <p>Un array es un conjunto de elementos que se referencian con el mismo nombre.
        A cada variable del array se le conoce como componente o elemento del array.
        Cada componente tiene asociado una clave que se emplea para acceder a ese elemento o ese componente.
    </p>
    <p>En php los arrays son muy flexibles. Hay de dos tipos: escalares y asociativos.
        Para acceder a aun elemento se usa su clase clave con el operador []. Si la clase es un número entero mayo o igual que cero.
        Si la clave es una cadena de caracteres entonces es un array asociativo.
    </p>

    <h2>Arrays Escalares</h2>

    <?php

    //Un array se puede definir de dos formas
    //Con la función Array()
    $notas = array(2, 5, 6, 1, 6.6, 9.5, 7, 6);
    //2da forma con un literal
    $numeros = [8, 2, 3, 5, 6, 3];

    //Si solo se indican los elementos del array, la clave comienza por cero desde la izquiera.
    echo "La primera nota es $notas[0]<br>";
    echo "La tercera nota es $notas[2]<br>";

    //Al definir el array podemos indicar los índices
    $notas = array(2 => 8.5, 4 => 4.75, 8 => 3.5);

    //Puede definir índice para algunos y no para otros
    $notas = array(3 => 5, 6.5, 8, 7 => 2, 9, 5);
    echo "Indice 3: $notas[3]<br>";
    echo "Indice 4: $notas[4]<br>";
    echo "Indice 5: $notas[5]<br>";
    echo "Indice 6: $notas[6]<br>";
    echo "Indice 7: $notas[7]<br>";
    echo "Indice 8: $notas[8]<br>";
    echo "Indice 9: $notas[9]<br>";

    //Borrar el elemento 4
    unset($notas[4]);
    if (isset($notas[4])) {
        echo "El elemento 4 es $notas[4]";
    } else echo "El elemento 4 no esta definido<br>";


    //Modificar un elemento
    $notas[5] = rand(1, 10);
    echo "Elemento 5 es $notas[5]<br>";

    $notas[] = 7.5;
    echo "He añadido el elemento con índice 10: $notas[10]<br>";
    ?>

    <h2>Arrays asociativos</h2>

    <p>Array que tiene una cadena de caracteres como claves</p>
    <?php

    $coche['1234BBC'] = "Seat León";
    $coche['4321CCB'] = "Ford Focus";

    echo "Mi coche es {$coche['1234BBC']}<br>";
    echo "Tu coche es " . $coche['4321CCB'] . "<br>";

    ?>

    <h2>Array Mixto</h2>
    <p>Cuando las claves son índices numéricos o cadenas indistintamente</p>

    <?php

    $alumno['nombre'] = "Juan Gómez";
    $alumno[0] = 4;
    $alumno[1] = 6;
    $alumno[2] = 5;
    $alumno["media"] = 5;

    echo "El alumno {$alumno['nombre']} y tiene de notas $alumno[0], $alumno[1] y $alumno[2]<br>";
    echo "Su media es {$alumno['media']}<br>";
    ?>

    <h2>Arrays bidimensionales</h2>
    <p>Arrays con dos dimensiones y por tanto para acceder a un elemento hacen falta dos claves</p>

    <?php
    $notas = array(
        array(2, 5, 6, 8, 9.5, 3),
        array(2, 5.5, 6, 2, 10),
        array(4.5, 3, 2.5, 7, 8),
        array(7, 1, 0, 1.5, 3.5)
    );

    echo "El elemento en la fiña 2 columna 3: {$notas[1][2]}<br>";

    $notas[][] = 9;

    echo "El úñtimo elemento de la última fila: {$notas[4][0]}<br>";
    $notas[3][] = 7.5;

    echo "El último elemento de la fila 4 es: {$notas[3][5]}<br>";

    //Se accede por clave no por indice
    $numeros = [-1 => 1, 2, 3, 4, 5];
    echo "El ultimo elemento del array es {$numeros[-1]}<br>";

    $coches = [
        '1234aada' => ['marca' => 'Seat', 'modelo' => 'Ibiza', 'Motor' => 'Diesel', 'pvp' => 18000],
        '2434soo' => ['marca' => 'Ford', 'modelo' => 'Focus', 'Motor' => 'Gasolina', 'pvp' => 21000]

    ];
    echo "EL primero coche es {$coches['1234aada']['marca']} modelo {$coches['1234aada']['modelo']}<br>";

    ?>

    <h2>Arrays multidimensionales</h2>
    <?php
    $notas = [
        [
            [3, 4, 5, 6],
            [2, 8, 9, 3]
        ],
        [
            [1, 9, 8, 5],
            [2, 8, 4, 5]
        ],
        [2, 8, 4, 6],
        [9, 10, 4, 3]
    ];

    echo "Accedo al elemento 1,1,2: {$notas[1][1][2]}<br>";
    $notas = [
        'juan' => [
            'T1' => ['dwes' => 6, 'dwec' => 5, 'daw' => 8, 'diw' => 7],
            'T2' => ['dwes' => 5.5, 'dwec' => 7.5, 'daw' => 6, 'diw' => 5.5],
            'T3' => ['dwes' => 7, 'dwec' => 7, 'daw' => 4.5, 'diw' => 4],
        ],
        'maria' => [
            'T1' => ['dwes' => 3, 'dwec' => 7, 'daw' => 9.5, 'diw' => 4.5],
            'T2' => ['dwes' => 6.5, 'dwec' => 8, 'daw' => 8, 'diw' => 5],
            'T3' => ['dwes' => 8, 'dwec' => 5, 'daw' => 5, 'diw' => 6],
        ]
    ];
    echo "La nota de maria en el segundo trimestre en dwec: {$notas['maria']['T2']['dwec']} <br>";
    //echo "La nota de maria en el segundo trimestre en dwec: {$notas[$alumno][$trimestre][$modulo]} <br>";

    ?>

    <h2>Recorrer un array </h2>


    <?php
    $numeros = [6, 19, 12, 7, 11, 9, 3];
    for ($i = 0; $i < count($numeros); $i++) {
        echo "Elemento $i es {$numeros[$i]}<br>";
    }

    //Para cualquier tipo de array tenemos el bucle foreach
    // foreach ($array as [$clave] => $valor){
    //
    // }
    echo "<h3>Bucle for each </h3>";
    foreach ($numeros as $numero) {
        echo "El numero es $numero <br>";
    }


    echo "<br>";
    $alumno = [];
    $alumno['nombre'] = "Juan Gomez";
    $alumno[0] = 4;
    $alumno[1] = 6;
    $alumno[2] = 5;
    $alumno['media'] = 5;

    foreach ($alumno as $clave  => $valor) {
        echo "ELemento con $clave y valor $valor <br>";
    }
    echo "<h3>Recorrido de arrays multidimensionales</h3>";

    /*
    Si es un aray bidimensional escalar podemos usar dos bucles for anindados y utilizamos los dos contadores de bucle
    
    for ($i = 0; $i < count($notas); $i++) {
        echo "Recorrido de la fila $i<br>";
        for ($j = 0; $j < count($notas[$i]); $j++) {
            echo "Fila $i Columna $j: {$notas[$i][$j]}<br>";
        }
    }
        */
    foreach ($notas as $alumno => $trimestres) {
        echo "Notas de $alumno: <br>";
        foreach ($trimestres as $trimestre => $modulos) {
            echo "Notas del trimestre $trimestre: <br>";
            foreach ($modulos as $modulo => $nota) {
                echo "MOdulo: $modulo Nota: $nota <br>";
            }
            echo "-------------------";
        }
    }

    echo "El array con los coche<br>";
    foreach ($coches as $matricula => $coche) {
        echo "Coche con matrícula: $matricula<br>";
        foreach ($coche as $clave => $valor) {
            echo "$clave: $valor<br>";
        }
        echo "------------------------<br>";
    }
    ?>

</body>

</html>