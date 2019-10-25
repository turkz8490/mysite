<?php
session_start();
echo "Welcome " . $_SESSION['User'] . "<br/>";
echo "<a href=\"logout.php\"> LOGOUT </a>";
?>