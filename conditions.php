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
    $grade = 75;
    if ($grade >74){
        echo "passed";
    }
    else{
        echo "failed";
    }
    ?>
    <br/>
    <?php
    //month: 1-12
    $month = 15  ;
    if($month == 1 ){
        echo "january";
    }
    else if($month == 2 ){
        echo "february";
    }
    else if($month == 3 ){
        echo "march";
    }
    else if($month == 4 ){
        echo "april";
    }
    else if($month == 5 ){
        echo "may";
    }
    else if($month == 6 ){
        echo "june";
    }
    else if($month == 7 ){
        echo "july";
    }
    else if($month == 8 ){
        echo "august";
    }
    else if($month == 9 ){
        echo "september";
    }
    else if($month == 10 ){
        echo "october";
    }
    else if($month == 11 ){
        echo "november";
    }
    else if($month == 12 ){
        echo "december";
    }
    else{
        echo "invalid" . "<br/>";
    }
    ?>

    <?php
    $e = 200;
    if(!isset($e)){
        echo 'variable $e is not set';
    }
    else{
        echo 'variable $e is set' . "<br/>";
    }
    ?>
    <?php
    $quantity = "34";
    if(is_numeric($quantity)){
    $total = 5 * $quantity;
    echo $total;
    }
    else{
        echo "invalid value";
    }
    ?>
    <br>
    <?php
    //empty will return true
    $username = "23";
    if (empty($username)){
        echo "It is empty";
    }
    else {
        echo "Not Empty";
    }
    ?>


</body>
</html>