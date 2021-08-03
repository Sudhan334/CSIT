<?php
echo "<br>..........types of loops available in php...........</br>";
/*
 * 1. for loop
 * 2. while loop
 * 3. do while loop
 * 4. foreach loop // this loop is used with array data
 */





echo "<br>..........1. For Loop ..............</br>";
$sum = 0;
for($i=1;$i<=10;$i++)
{
    $sum += $i; //$sum = $sum + $i
    echo $i . "<br>";
}

echo "<br> Sum of (1-10) = ". $sum;





echo "<br/>.............2. White Loop ............<br/>";
    $j = 1;
    $sum = 0;

    While($j<=10)
    {
        echo $j . "<br>";
        $sum = $sum + $j;
        $j++;
    }
    echo "<br/>". $sum;


    echo "<br/>................3. Do While Loop .............<br/>";

    $k = 1;
    $sum = 0;
    do
    {
        echo $k . "<br/>";
        $sum = $sum + $k;
        $k++;
    }while($k<=10);

    echo "sum = " . $sum;



    echo "<br/>................3. Foreach Loop .............<br/>";






