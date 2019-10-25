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
    if(isset($_POST['submit'])){
       // echo "OK";
       $fname = $_POST['FirstName'];
       $lname =$_POST['LastName'];
       $age = $_POST["Age"];
    //   if($age)
      
       if (empty($fname) || empty($lname) || empty($age)){
           // echo "Lacking input" . "<br/>";
            if(empty($fname)){
                echo "The First name is empty" . "<br/>";
            }
            if(empty($lname)){
                echo "The Last name is empty" . "<br/>";
            }
            if(empty($age)){
                echo "Age is empty" . "<br/";
            }
            echo "<a href=\"post.php\">go back </a>";
       }
       else{
        echo "Welcome " . "<br/>" . "$fname $lname <br/> Age is $age";
       }
    }
    else{
        //echo "Go to post.php first";
        header("location:post.php");
    }
    ?>
    
</body>
</html>