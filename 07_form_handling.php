<?php
/*
 * PHP Form Handling
 * 1. creative html form
 *      -html form element
 *          (input-type:text, input-type:number, input-type:text-area,input-type:radio/checkbox,input-type:password
 *           input-type:select/combo box, input-type:submit, button)
 *      - Form Validating
 *          (html form-validatin);
 *          (client side form validation with JQuery plugin)
 *          (server-side form validation)
 *      - Form Action and Method ($_GET, $_POST)
 *      - PHP Form Submit Variable ($_GET, $_POST); php Super Global Variable
 *
 */
?>

<style type="text/css">
    span{
        color:red;
    }
</style>
<?php
//print_r($_GET); //array variable when you use Form submit method = GET
//var_dump($_GET['submit']);
//var_dump(isset($_GET['submit']));
//$a=5;
//echo "<hr><br>";
//var_dump(isset($a));  isset($var), return  1 if variabel is set
//                                  return 0 if variable is not set
//                                  note: variable is set when it has some value.
//                                         eg $a; (undefined, and has null value)
//                                              $a=5 variable is set and has int(5) value

$email = "admin@admin.com";

//var_dump(filter_var("",FILTER_VALIDATE_EMAIL));

if(isset($_GET['submit']))
{
//    var_dump(preg_match("/^9[0-9]{9}$/",$_GET['phone_no'])); exit();

    $err=[];
    $name = !empty($_GET['name']) ? $_GET['name'] : $err['name']="name field is required";
    if(strlen($_GET['name'])<4)
    {
        $err['name'] = "name can not be less than 3 characters";
    }
//    if(!empty($_GET['name']))
//    {
//        $name = $_GET['name'];
//    }else{
//        $err['name'] = "name field is required";
//    }
    $email = filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ? $_GET['email'] : $err['email']="invalid email format.";
    $email = !empty($_GET['email']) ? $_GET['email'] : $err['email']="email field is required";
    $phone_no = !empty($_GET['phone_no']) ? $_GET['phone_no'] : $err['phone_no']="phone number field is required";
    if(preg_match("/^9[0-9]{9}$/",$_GET['phone_no'])) //preg_match function compares given string against regular expression patter, returns ture if it matches with the patter, and false if it does not
    {
        $phone_no = $_GET['phone_no'];
    }else{
        $err['phone_no'] = "Phone no has to be 9#########";
    }


//    $phone_no = $_GET['email'];
//    $phone_no = $_GET['phone_no'];

    if(count($err)==0)
    {
        echo $name . "<br>";
        echo $email . "<br>";
        echo $phone_no . "<br>";
    }else{
        echo "<pre>";
        print_r($err);
    }

}
?>

<!-- action = php script that processes the form -->
<!--Form submit methos are GET/ POST -->
<form action="" method="GET" novalidate>
    Full Name : <input type="text" name="name" required><br>
                <span><?php echo isset($err['name']) ? $err['name'] : ''; ?></span>
    <br>
    Email Id : <input type="email" name="email" required><br>
                <span><?php echo isset($err['email']) ? $err['email'] : ''; ?></span>
    <br>

    Phone No : <input type="number" name="phone_no" required><br>
                <span><?php echo isset($err['phone_no']) ? $err['phone_no'] : ''; ?></span>
    <br>
    <input type="submit" name="submit" value="Save">
</form>

