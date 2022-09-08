<?php
/*
1. Crear una variable n y validar que sea un número positivo.
2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp2_backend</title>
</head>
<body>

<?php
$n=0;
echo "1. Crear una variable n y validar que sea un número positivo.";
?>
<br>
<?php
$n=3;
if ($n>0)
{
    echo "el número $n es positivo";
}
elseif ($n<0)
{
    echo "el número $n no es positivo";
}
else
    echo "el número $n es neutro";
?>
<br>
<?php
$n=-5;
if ($n>0)
{
    echo "el número $n es positivo";
}
elseif ($n<0)
{
    echo "el número $n no es positivo";
}
else
    echo "el número $n es neutro";
?>
<br>
<?php
$n=0;
if ($n>0)
{
    echo "el número $n es positivo";
}
elseif ($n<0)
{
    echo "el número $n no es positivo";
}
else
    echo "el número $n es neutro";
?>

<br><br><hr>

<?php
    echo "2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.";
?>
<br>
<?php
    $n2=4;
    if ($n2 > 1 && $n2 <10)
    {
       echo "el número $n2 es mayor que 1 y es menor a 10";
    }
    else
    {
       echo "el número $n2 no cumple la condición de ser mayor que 1 y menor a 10";
    }
    
?>
<br>
<?php
    $n2=11;
    if ($n2 > 1 && $n2 <10)
    {
       echo "el número $n2 es mayor que 1 y es menor a 10";
    }
    else
    {
       echo "el número $n2 no cumple la condición de ser mayor que 1 y menor a 10";
    }
    
?>
<br>
<?php
    $n2=-14;
    if ($n2 > 1 && $n2 <10)
    {
       echo "el número $n2 es mayor que 1 y es menor a 10";
    }
    else
    {
       echo "el número $n2 no cumple la condición de ser mayor que 1 y menor a 10";
    }
    
?>

<br><br><hr>

<?php
    echo "3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.";
?>
<br>
<?php
    $n3=15;
    if ($n3 > 10 || $n3 <2)
    {
       echo "el número $n3 es mayor que 10 o es menor a 2";
    }
    else
    {
       echo "el número $n3 no cumple la condición de ser mayor que 10 o menor a 2";
    }
    
?>
<br>
<?php
    $n3=1;
    if ($n3 > 10 || $n3 <2)
    {
       echo "el número $n3 es mayor que 10 o es menor a 2";
    }
    else
    {
       echo "el número $n3 no cumple la condición de ser mayor que 10 o menor a 2";
    }
    
?>
<br>
<?php
    $n3=7;
    if ($n3 > 10 || $n3 <2)
    {
       echo "el número $n3 es mayor que 10 o es menor a 2";
    }
    else
    {
       echo "el número $n3 no cumple la condición de ser mayor que 10 o menor a 2";
    }
    
?>

<br><hr>

<?php
    echo "4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
    mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
    numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.";
?>
<br><br>
<?php
$numero1=5;
$numero2=4;
echo "numero1=$numero1";
?>
<br>
<?php
echo "numero2=$numero2";
?>
<br>
<?php
if ($numero1>$numero2)
{
    echo "suma = ". ($numero1+$numero2);
    ?>
    <br>
    <?php
    echo "resta = ". ($numero1-$numero2);
}
elseif ($numero1<$numero2)
{
    echo "multiplicación = ". ($numero2*$numero1);
    ?>
    <br>
    <?php
    echo "división entera = ". floor($numero2/$numero1);
    ?>
    <br>
    <?php
    echo "resto de la división = ". ($numero2%$numero1);
}
else
{
    echo "“Los números ingresados son iguales”";
    
}
?>
<br>
<br><br>
<?php
$numero1=7;
$numero2=9;
echo "numero1=$numero1";
?>
<br>
<?php
echo "numero2=$numero2";
?>
<br>
<?php
if ($numero1>$numero2)
{
    echo "suma = ". ($numero1+$numero2);
    ?>
    <br>
    <?php
    echo "resta = ". ($numero1-$numero2);
}
elseif ($numero1<$numero2)
{
    echo "multiplicación = ". ($numero2*$numero1);
    ?>
    <br>
    <?php
    echo "división entera = ". floor($numero2/$numero1);
    ?>
    <br>
    <?php
    echo "resto de la división = ". ($numero2%$numero1);
}
else
{
    echo "“Los números ingresados son iguales”";
    
}
?>
<br><br>
<?php
$numero1=8;
$numero2=8;
echo "numero1=$numero1";
?>
<br>
<?php
echo "numero2=$numero2";
?>
<br>
<?php
if ($numero1>$numero2)
{
    echo "suma = ". ($numero1+$numero2);
    ?>
    <br>
    <?php
    echo "resta = ". ($numero1-$numero2);
}
elseif ($numero1<$numero2)
{
    echo "multiplicación = ". ($numero2*$numero1);
    ?>
    <br>
    <?php
    echo "división entera = ". floor($numero2/$numero1);
    ?>
    <br>
    <?php
    echo "resto de la división = ". ($numero2%$numero1);
}
else
{
    echo "“Los números ingresados son iguales”";
    
}
?>
</body>
</html>