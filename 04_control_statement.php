<?php
echo "<br>-----------------<h1>PHP Control Statements</h1>-----------<br>";
/*
 * 1.if
 * 2.if else
 * 3. if elseif else
 * 4. switch case
 * 5. nested if
 */

//if(condition)
//{
//    //block of code
//}

$a = 34;
if($a % 2 === 0)
{
    echo  $a . " is an even number";
}
echo "<br>";

// 2. if else

    if($a % 2 === 0)
    {
        echo  $a . " is an even number";
    }else{
        echo $a . " is an odd number";
    }

    // 2. if ...elseif...else
    echo "<br>-----------example of elseif----------<br>";

    $percent = 62;
    if($percent >= 80)
    {
        $result = "Distinction";
    }elseif($percent >=60) {
        $result = "1st Division";
    }elseif($percent >=50) {
        $result = "2nd Division";
    }elseif($percent >=45){
        $result = "3nd Division";
    }else{
        $result = "pass";
    }
    echo $result;


//    if($percent>=80 && $percent <=100)
//    {
//        echo "Distinction";
//    }elseif($percent>=60 && $percent<80)
//    {
//        echo "1st division";
//
//    }elseif($percent >=50 && $percent<60)
//    {
//        echo "2nd Division";
//    }elseif( $percent >=45 && $percent<50){
//        echo '3rd Division';
//    }else{
//        echo $result = "pass";
//    }


switch ($percent)
{
    case $percent>=80:
        echo "Distinction";
        break;
    case $percent>=60:
        echo "1st Divisiono";
        break;
    case $percent >=50:
        echo "2nd Division";
        break;
    case $percent>=45:
        echo "3rd Division";
        break;
    default:
        echo "passs";
}






