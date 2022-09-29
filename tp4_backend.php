<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp-4 Back-end</title>
</head>

<body>
    <p>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</p>
    <?php
    $num_pares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    print "<pre>\n";
    print_r($num_pares);
    print "</pre>\n";
    ?>
    <hr>
    <p>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().</p>
    <?php
    $data1 = ["Pedro", "Ana", 34, 1];
    print "<pre>\n";
    print_r($data1);
    print "</pre>\n";
    ?>
    <hr>
    <p>3. Crear un array asociativo e introducir los siguientes valores:
        Nombre: Pedro
        Apellido: Torres
        Dirección: Av. Mayor 3703
        Teléfono: 1122334455</p>
    <?php
    $data2 = ['Nombre' => "Pedro", 'Apellido' => "Torres", 'Dirección' => "Av. Mayor 3703", 'Teléfono' => "1122334455"];
    ?>
    <p>$data2=['Nombre'=>"Pedro",'Apellido'=>"Torres",'Dirección'=>"Av. Mayor 3703",'Teléfono'=>"1122334455"];</p>
    <hr>
    <p>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
        Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</p>
    <p>$ciudades=["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];</p>

    <?php
    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
    $num = 0;
    foreach ($ciudades as $valor) {

        print "<p>La ciudad con el índice $num tiene por nombre $valor</p>";
        $num = $num + 1;
    }
    ?>
    <hr>
    <p>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
        LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
        Ejemplo: El índice de Madrid es MD.</p>
    <p>$ciudades=['MD'=>"Madrid",'BCL'=>"Barcelona",'LD'=>"Londres",'NY'=>"New York",'LA'=>"Los Ángeles",'CCG'=>"Chicago"];</p>
    <?php
    $ciudades = ['MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Ángeles", 'CCG' => "Chicago"];
    foreach ($ciudades as $indice => $valor) {

        print "<p>El índice de $valor es $indice.</p>";
    }

    ?>
    <hr>

</body>

</html>