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
    $numbers = array(23,45,68,34,36,54);
    echo "index 5 is " . $numbers[5] . "<br/>";
    $person = array("john","doe",24,array("php"," mysql"," javascript"), "cebu ");
    echo "Welcome " . strtoupper($person[0]) . " " . strtoupper($person[1]) . " who lives in $person[4] <br/>";
    echo "skills: {$person[3][0]},{$person[3][2]} . <br/>";
    print_r($person);
    echo "<br/>";
    ?>

    ASSOCIATIVE array
    <?php
    echo "<br/>";
    $data = array("fname" => "john", "lname" => "doe");
    echo "Welcome {$data["fname"]} {$data["lname"]}";
    ?>
    
<?php
    echo "<br/>";
    echo "Number of itmes: " . count($numbers) . "br/>"; 
    echo "max value" . max($numbers) . "<br/>";
    echo "min value" . min($numbers) . "<br/>";
    sort($numbers); //for reverse use (rsort)
    print_r($numbers);
    echo "<br/>";
    echo " is 68 in the numbers? " . in_array(68, $numbers);
    ?>

</body>
</html>