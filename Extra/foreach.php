<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
$languages = array("Python","C","JS","C++");

        foreach ($languages as  $value) {
           echo "<br>". "The value is:";
           echo $value;
        }
$arr = array("Banana","Apple","Bread","Cheese");
foreach ($arr as  $value) {
    echo "<br> $value ";
}

    ?>
    </div>
</body>
</html>