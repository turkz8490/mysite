1. initialization =>
10 - 100
=>10
2. condiiton
<=100
3. increment / decrement
++ / $val = $val + 1;
4. statement
<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    FOR LOOP:
    <br>
    <br>
    <?php
    for ($val = 1 ; $val<=10 ; $val++){
        echo $val . " - HELLO - " . "<br/>";
    }
    ?>
    <hr>
    <br>
    WHILE LOOP
    <br>
    <br>
    <?php
    $init = 0;
    while($init < 10){
        echo $init . ", ";
        $init ++;
    }
    ?>
    <hr>
<br>
<br>
FOREACH LOOP
<BR>
<BR>
<?php 
$data = array("John","Doe",24,"Cebu");
foreach($data as $person){
    echo $person . "<br/>";
}
?>
<hr>
<br>
<?php
$person = array(
    "first name" => "kevin",
    "Last_name" => "skoglund",
    "address" => "123 Main Street",
    "city" => "Beverly Hills",
    "state" => "CA",
    "zip_code" => "902010"
);
foreach($person as $attribute => $value){
     echo $attribute . " - " . $value . "<br/>";
}
?>
<hr>
<br>
<br>
<?php
$purchase = array(
    "product code:" => "001",
    "product:" => "LGtv50\"",
    "price:" => 23000,
    "Brand:" => "LG",
    "stock:" => 5
);
foreach($purchase as $data => $value){
    if (is_numeric($value)){
        $value = number_format($value);
    }
    echo $data . " " . $value . "<br/>";
}
?>
</body>
</html>