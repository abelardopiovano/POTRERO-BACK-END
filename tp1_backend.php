<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1_backend</title>
</head>
<body>
    <?php
        /*
        Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:
        1. Imprima por pantalla: “Hola mundo”.
        2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
        3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.
        4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
        pantalla.
        5. Implementar algoritmos que permitan:
        a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
        b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.
        */
        echo "Hola mundo";
    ?>
    <br>
    <br>
    <?php
        $cadena="Hola mundo";
        echo $cadena;
    ?>
    <br>
    <br>
    <?php
        $variable1=9;
        $variable2=4;
        echo "las variables son: " . $variable1 ." y ". $variable2;
    ?>
    <br>
    <?php
        echo "suma: ".($variable1+$variable2);
    ?>
    <br>
    <?php
        echo "resta: ".($variable1-$variable2);
    ?>
    <br>
    <?php
        echo "multiplicación: ".($variable1*$variable2);
    ?>
    <br>
    <?php
        
       $div1=(floor($variable1/$variable2));

        echo "división: ".$div1;
    ?>
    <br>
    <?php
        echo "resto: ".($variable1%$variable2);
    ?>
    <br>
    <br>
    <?php
        $grados=20;
        echo "Celsius: ".$grados." °C";
        
    ?>
    <br>
    <?php
        
        echo "Fahrenheit: ".(($grados*1.8)+32) ." °C";
    ?>
    <br>
    <br>
    <?php
        $base=18;
        $altura=12;
        echo "rectángulo base=18cm altura=12cm"
        
    ?>
    <br>
    <br>
    <?php
        echo "perímetro del rectángulo = ".(($base*2)+($altura*2));
        
    ?>
    <br>
    <?php
        echo "área del rectángulo = ".$base*$altura;
        
    ?>
    <br>
    <br>
    <?php
        $radio=30;
        echo "radio del círculo 30 cm";
        
    ?>
    <br>
    <br>
    <?php
        
        echo "perímetro del círculo: ". 2*3.1416*$radio;
        
    ?>
    <br>
    <?php
        
        echo "área del círculo: ". 3.1416*pow($radio,2);
        
    ?>

</body>
</html>