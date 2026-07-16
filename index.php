
<?php

$colors = array("red","blue","pink","green");
print_r($colors);
echo "<br>";   
print_r(count($colors));
echo "<br>"; 

$a = array("white");
$arrayNew = array_merge($a,$colors);
print_r($arrayNew);
echo "<br>"; 

array_pop($arrayNew);
print_r($arrayNew);
echo "<br>"; 

array_push($arrayNew,"yellow","orange");
print_r($arrayNew);
echo "<br>"; 

print_r(array_reverse($arrayNew));
echo "<br>"; 

print_r(array_search("blue", $arrayNew));
echo "<br>"; 

print_r(var_dump(array_search("purple", $arrayNew)));
echo "<br>"; 

sort($arrayNew);
echo implode("<br>", $arrayNew )

?>