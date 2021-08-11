 <?php

 $db= "require_once('database.php')";
 $err=[];
 if(isset($_POST['login']))
 {
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
     {
       $email= $_POST['email'];
    } 
 }
 else {
     $err['email']="please input valid email";
 }

 if (filter_var($_POST['pass'],FILTER_VALIIDATE_REGEXP,["options"=>['regexp'=>"/^[a-zA-Z0-9@#$]{8,15}$/"]]) 
 {
    $pass = $_POST['pass'];
 }else
  {
     $err['pass']="please provide 8-15 character long password";
 }

 



 ?>
<style>
    input{
        margin:7px;
        border: 2px solid black;
        border-radius:4px;
    }
</style>
 <form action="" method="POST">
Email: <input type="email" name="email" id="email" placeholder="Enter your email"><br>
Password: <input type="password" name="pass" id="pass" placeholder="Enter the password"><br>
<input type="checkbox" name="remember" value="1">Remember me<br>
     <input type="button"name='login' value="Login">
 </form>