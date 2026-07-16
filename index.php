<?php
$sentence =  "merhaba PHP";

echo "merhaba PHP"."<br>";

echo strlen($sentence) ."<br>";

echo strrev($sentence)."<br>";

echo ($sentence[10]). "<br>"; 

echo strtoupper($sentence). "<br>";

echo strtolower($sentence). "<br>";

echo str_replace("PHP", "şeyma",$sentence). "<br>";

$number = "Şeyma";
$number1 = 25;
$number2 = 45.5;
$number3 = -144;
$numbers = [2,3,5,6,7,9];

echo var_dump(is_numeric($number)). "<br>";

echo var_dump(is_int($number1)). "<br>";

echo var_dump(is_int($number2)). "<br>";

echo var_dump(is_float($number1)). "<br>";

echo (ceil($number2)). "<br>";

echo (floor($number2)). "<br>";

echo (round($number2)). "<br>";

echo (abs($number3)). "<br>";

echo sqrt(abs($number3)). "<br>";

echo (min($numbers)). "<br>";

echo (max($numbers)). "<br>"; 

?>


