<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $myvalue = -200;
    echo abs($myvalue);
    ?>
    exponential: pow(base,power)
    <?php
    echo "<br/>";
    echo pow(2,8);
    ?>
    square root: sqrt(value)
    <?php
    echo "<br/>";
    echo sqrt(144)
    ?>
    Modulo: 
    <?php
    echo "<br/>";
    echo fmod(1175,100) . "<br/>";
    ?>
    random value: body
    <?php
    echo "<br/>";
    echo rand(1,100) . "<br/>";
    ?>   
    ceil vs floor
    <?php
    echo "<br/>";
    echo "Ceil of 74.5" . ceil(74.4) . "<br/>";
    echo "Floor of 74.5" . floor(74.5) . "<br/>";
    echo "Round of 74.4 =>" . round(74.4) . "<br/>";
    ?>
    number format
    <?php
    echo "<br/>";
    $value = 23435.34;
    echo number_format($value,2) . "<br/>";
    ?>
    incrtement vs decrement
    <?php
    echo "<br/>";
    $queue = 2;
    $queue*=10;
    echo $queue . "<br/>";
    ?>
    array
    <?php
    echo "<br/>";
    $numbers = array(23,45,64,34,13,4);
    echo $numbers[1];
   ?>
 
</body>
</html>  