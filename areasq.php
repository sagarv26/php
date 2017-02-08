<?php

$side=$_POST['side'];

$area=$side*$side;
$perimeter=4*$side;
$diagonal=sqrt(2)*$side;

echo 'Area of the Square: '.$area. "<br />";
echo 'Perimeter of the Square: '.$perimeter ."<br />";
echo 'Diagonal of the Square: '.$diagonal ."<br />";


?>