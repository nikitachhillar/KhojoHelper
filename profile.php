<?php 
session_start();
?>
<?php

$cat=$_POST["category"];
$cty=$_POST["city"];
$dis=$_POST["district"];
$sta=$_POST["state"];
$_SESSION["cat"]=$cat;
$_SESSION["cty"]=$cty;
$_SESSION["dis"]=$dis;
$_SESSION["sta"]=$sta;

 header('Location:profile.html');

?>

