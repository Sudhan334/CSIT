<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>
</head>
<body>
    <style>
        .container{
            max-width:100%;
            background:black;
            margin:auto;
            padding:34px;
            color:green;
            font-size:15px;
        }
        .head{
            text-align: center;
        }
    </style>
    <div class="container">
        <h1 class="head">Lets learn Php.</h1>
    <p>This is container.</p>
    <?php
    $age = 7;
    if ($age > 18) {
        echo "you can go to the party";
    }
    elseif($age === 7)
    {
        echo "You are seven years old";
    }
else {
    echo "you can't go to the party.";
}

$languages = array("Python","C","JS","C++");
echo"<br>". $languages[3];
echo "<br>".count($languages);
echo "<br>";
echo "<pre>";
var_dump($languages);

//Loops In php
$a = 0;
while ($a < count($languages)) {
    echo "<br>"."The language $a is:$languages[$a]";
    // echo $a;
    $a++;
}
echo "<br>"."<br>";
$a = 44;
do {
    echo "<br>"."The value  a is:$a";
    // echo $a;
    $a++;
}while ($a < 10);
    ?>
     <?php
        function print5(){
            echo "<br>"."FIVE";
        }
        print5();
        function add($num){
           echo "<br>" .$num+5;
        }
        add(4);

        $str = "This is string.";
       echo "<br>" .str_word_count($str);
       echo "<br>" .strrev($str);
       echo "<br>" .strpos($str,"in");
       echo "<br>" .str_replace("is","at",$str);

       
    ?>
    </div>
   
</body>
</html>