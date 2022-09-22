<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp3_backend.php</title>
</head>
<body>
Crear un archivo “tp3_backend.php” y realizar los siguientes ejercicios:
<br>
1. Mostrar los números del 1 al 100.
<br>
2. Mostrar los números del 100 al 1.
<br>
3. Mostrar los números pares del 1 al 100.
<br>
4. Mostrar los números impares del 1 al 100.
<br>
5. Mostrar la suma de los números de 1 a 20.
<br>
6. Mostrar la suma de números pares de 1 a 20.
<br>
<hr>
</body>
</html>

<?php
echo ("1. Mostrar los números del 1 al 100.<br>");
$i=1;
while($i<100)
{
    print ("$i,");
    $i=$i+1;
}
print ("$i");
?>
<hr>
<?php
echo ("2. Mostrar los números del 100 al 1.<br>");
$i=100;
while($i>1)
{
    print ("$i,");
    $i=$i-1;
}
print ("$i");
?>
<hr>
<?php
echo ("3. Mostrar los números pares del 1 al 100.<br>");
$i=2;
while($i<100)
{
    print ("$i,");
    $i=$i+2;
}
print ("$i");
?>
<hr>
<?php
echo ("4. Mostrar los números impares del 1 al 100.<br>");
$i=1;
while($i<99)
{
    print ("$i,");
    $i=$i+2;
}
print ("$i");
?>
<hr>
<?php
echo ("5. Mostrar la suma de los números de 1 a 20.<br>");
$i=1;
$suma=2;
$total=0;
$subtotal=$i+$suma;

echo ("<br>$i + $suma = $subtotal");
for ($i=3;$i<=20;$i++)
{
    $total=0;
    $total=$subtotal+$i;
echo ("<br> $subtotal + $i = $total");
    $subtotal=$total;

}
?>
<hr>
<?php
echo ("6. Mostrar la suma de números pares de 1 a 20.<br>");
$i=2;
$suma=4;
$total=0;
$subtotal=$i+$suma;

echo ("<br>$i + $suma = $subtotal");
for ($i=6;$i<=20;$i++)
{
    $total=0;
    $total=$subtotal+$i;
    
echo ("<br> $subtotal + $i = $total");
    $subtotal=$total;
    $i=$i+1;

}
?>
<br>
<hr>