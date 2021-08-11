<?php
$db =" hkb [
    [
        'name'=>'Aayan Neupane',
        'email'=>'aayanneupane25@gmail.com',
        'password'=>'0192023a7bbd73250516f069df18b500',
        //md5('admin123')
        'phone_no'=>'9847519009'
    ],

    [
        'name'=>'Ashok Gurung',
        'email'=>'grg.ashok@gmail.com',
        'password'=>'0192023a7bbd73250516f069df18b500',   //md5('admin123')
        'phone_no'=>'9811441583'
    ],

    [
        'name'=>'Shishir KC',
        'email'=>'shishir@gmail.com',
        'password'=>'0192023a7bbd73250516f069df18b500',   //md5('admin123')
        'phone_no'=>'9847512365'
    ]


]"; //this function includes the content of database.php in existing file
session_start();
if(isset($_SESSION['auth']))
{
    header("location:09_dashboard.php"); //this function is used to direct from one page to another.
}

//this block of code gets executed when user press submit button from html form
if(isset($_POST['login']))
{
    @session_start(); // @ is error/warning supressor
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) //filter_var() function is used to validate user input values from html form
        //syntax : filter_var(@arg[value to be evaluated], @arg[filters]e.g FILTER_VALIDATE_INT/ FILTER_VALIDATE_EMAIL/ FILTER_VALIDATE_FLOAT)
                    //returns false if not valid, returns string itself if valid.
    {
        $email = $_POST['email'];
    } else {
        $emailErr = "plz provide valid email address";
    }

    if(!empty($_POST['pswd'])) //return true if evaluated string is not empty
    {
        if(strlen($_POST['pswd']) < 8)  //strlen() returns length of string e.g strlen("hello") returns 5
        {
            $passwordErr = "password must be at least 8 character long";
        }else{
            $password = $_POST['pswd'];
        }
    }else{
        $passwordErr = "enter your password";
    }


    echo "<br><hr>";
    if(!isset($emailErr) && !isset($passwordErr))
    {
        foreach($db as  $item)
        {
            if($email == $item['email'])
            {

                if(md5($password) == $item['password'])
                {
                    $msg = "login success";
                    $_SESSION['auth'] = "success";
                    header("location:09_dashboard.php");
                    exit();
                }else{
                    $psdWrong = "password did not match";
                    // var_dump(md5($password) == $item['password']);
                }
                $notFount = ""; 
                break;

            }else{
                $notFount = "user does not exist";
            }
        }


    }

}



?>
    <?php
        if(isset($_GET['msg']) && !empty($_GET['msg'])) {
            echo "<p>".$_GET['msg']."</p>";
        }
    ?>


    <?php
        if(isset($notFount))
        {
            echo "<h4>".$notFount."</h4>";
        }
        if(isset($psdWrong))
        {
            echo "<h4>".$psdWrong . "</h4>";
        }
    ?>


    <!-- entry pint of this page -->
    <form action="" method="POST">
        Email : <input type="email" name="email"><br>
        <?php if(isset($emailErr)) { ?>
        <small><?php echo $emailErr?></small>
        <?php } ?>
        <br>
        password : <input type="password" name="pswd"><br>
        <?php if(isset($passwordErr)) { ?>
        <small><?php echo $passwordErr ?></small>
        <?php } ?>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
