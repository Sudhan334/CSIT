<style type="text/css">
.green{
    color:green;
}
</style>

<?php
//type casting
$a=100; 

echo "<br>";
$b = "100";

// var_dump($a === $b); //== comparision operator (equals)
var_dump($a===$b);               // comparision operator (identical)


//type casting
echo "==================type casting with examples==================<br>";
$c =  "100";
$c = (int) $c;
var_dump($c);

$isActive = (bool) 0;

var_dump($isActive);

$abc = "<span class='green'>hellow world</span>";
echo $abc;



