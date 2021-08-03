<?php
/*
 * PHP Operators
 * 1. Arithmetic Operators
 *      +
 *      -
 *      *
 *      /
 *      %     modulus
 *      **    exponentiation
 *
 *
 */

    $a=2;
    if($a % 2 == 0)
    {
        echo $a. "= even number";
    }else{
        echo $a. "= odd number";
    }

    echo "<br>..............exponentiation operaor..................<br>";
    echo $a**2;


echo "<br>-------------------2. Assignment Operators-------------<br>";
/*
    1. Assignment Operator     =
    2. += , -= .= ,/=

*/

echo "
        <br>
        \$a+=1
        output : ";

        echo $a+=1;
// $a = 5;
// $a+= 1;
// echo $a;  //outputs 6

echo "<br><br>---------------Comparision Operators-----------------<br>";
echo "
            <ol>
                <li>equal (==)</li>
                <li>identical (===)</li>
                <li>not equal (<>, !=)</li>
                <li>not identical (!==)</li>
                <li> greater than (>)</li>
                <li>greater or equal (>=)</li>
                <li>less than (<)</li>
                <li>less than or equal (<=)</li>
            </ol>
";

$a = "100";
$b = "100";
echo $a." ".$b;  
//"100" . " " . "100 " = 100 100

echo "\$a \"+\" \$b";
echo "<br>";
echo '$a \'+\' $b';


var_dump($a===$b);

echo "<br><br>-----not equal (!=) example ---------<br>";

var_dump($a != 100); //outputs false
echo "<br>";

var_dump($a !== 100); //outputs 


echo "akash sharma";
echo "helow \$world";

echo "<br><br>---------------Increment/Decrement Operators-----------------<br>";
echo "
            <ol>
                <li>Pre Increment Operator (++\$a)</li>
                <li>Post Increment Operator (\$a++)</li>
                <li>Pre Decrement Operator (--\$a)</li>
                <li>Post Decrement Operator (\$a--)</li>
                
            </ol>
";




$a = 5;
echo $a++ . "<br>"; // post-increment ( return value first and then does increment)
echo "for this line, value of \$a is 6";
echo ++$a . "<br>"; // pre-increment ( increases value by 1 at first only then returns the value)

echo "<br><br>---------------Logical Operators-----------------<br>";
echo "
            <ol>
                <li>Logical AND Operator (AND / &&)</li>
                <li>Logical OR Operator (OR / ||)</li>
                <li>Logical NOT Operator (!)</li>
            </ol>
";



echo "<br><br>---------------Strng Concatenation Operators-----------------<br>";
echo "
            <ol>
                <li> . (DOT)</li>
                <li> .= ()</li>
            </ol>
";


echo "<br><br>---------------Ternary Operators-----------------<br>";
echo "
            <ol>
                <li> ? :  </li>
            </ol>
";











?>

