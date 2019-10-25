<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- this is a comment -->
    <!-- <?php //echo "hello PhP"; ?> <br/> -->
    <!-- <?php //echo "hello MySql"; ?> <br> -->
    <?php
    // echo is used to display text
    echo "hello";
    echo "<br/>";
    echo "web development";
    echo "<br/>";

    $number = 100;
    $number2 = 500;
    echo $number;   
    echo "<br/>";
    $firstName = "john";
    $lastName = "doe";
    echo $firstName . " " . $lastName;
    echo "<br/>";
    echo "Welcome, {$firstName} {$lastName}";
    ?>
    <hr>
    <?php
    $price = 30;
    echo $price . "<br>";
    $price = 40;
    echo "New price " . $price;
    echo "<br/>";
    define("pi" , 3.14);
    echo "the value of pi is " . pi;
     ?>

    <hr>
    <?php 
    $text = "the quick brown fox" . "<br/>";
    echo "The original text: ";
    echo ucfirst($text);
    echo ucwords($text);
    echo strtolower($text);
    echo strtoupper($text);
    echo "<hr>";
    // repeat
    $user = "John ";
    echo str_repeat($user, 5);
    echo "<br/>";
    $product = "computer";
    $product2 = "smartphone";
    //display > com-111;
    //display > sma- 1;
    echo substr($product,0,3) . "-001" . "<br/>";
    echo substr($product2,5,5) . "-001" . "<br/>"; 
    $text2 = "the quick brown fox" . "<br/>";  
    echo strpos($text2, "fox") . "<br/>";
    $item = "watermelon";
    echo 'the length of $item is' . strlen($item);
    echo "<br/>";
    echo str_replace("quick","slow",$text2);

    
    ?>
</body>
</html>