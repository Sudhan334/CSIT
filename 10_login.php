<?php
session_start();
if(isset($_POST['login']))
{
//    echo "<pre>";
//    print_r($_POST);
//    var_dump(isset($_POST['remember']));
//    exit();

    $db_email = "admin@admin.com";
    $db_name = "Administrator";
    $db_pswd = "admin123";

    $err=[];
//    echo "<pre>";
//    print_r($_POST);
//    var_dump(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $email = $_POST['email'];
    }else{
        $err['email'] ="input valid email";
    }

    if(filter_var($_POST['pswd'], FILTER_VALIDATE_REGEXP,["options"=>['regexp'=>"/^[a-zA-Z0-9\.-_!@#\$]{8,15}$/"]]))
    {
        $pswd = $_POST['pswd'];
    }else{
        $err['pswd']="plz provide 8-15 character long alpha-numeric password. use [!@#$-_] etc to make your password strong";
    }

    if(count($err) == 0)
    {
        // codes for form being valid
        if($email === $db_email){
            if($pswd === $db_pswd)
            {
                    //login success
                    $_SESSION['auth'] = TRUE;
                    $_SESSION['name'] = $db_name;
                    if(isset($_POST['remember']) && $_POST['remember'] == 1)
                    {
                        setcookie('email',$email,time()+24*60*60);
                        setcookie('pswd',$pswd,time()+24*60*60);
                    }else
                            setcookie('email', '');
                            setcookie('pswd', '');
                    }
                    header("location:dashboard.php");
            } else {
                $err['log'] = "password did not match";
            }
        }else{
            $err['log'] = "sorry, we did not find any record for this user";
        }

    }



?>

<style type="text/css">
    .error{
        color:red;
    }
</style>

<form action="" method="POST">
    Email : <input type="email" name="email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>" ><br>
    <?php if(isset($err['email'])) { ?>
        <span class="error"><?php echo $err['email']; ?></span>
        <?php } ?>
    <br>
    password : <input type="password" name="pswd" value="<?php echo isset($_COOKIE['pswd']) ? $_COOKIE['pswd'] : ''; ?>"><br>
    <br>
    <input type="checkbox" name="remember" value="1" <?php echo  isset($_COOKIE['pswd']) ? 'checked' : ''; ?>> Remember me <br>
    <button type="submit" name="login" value="login">Login</button>
</form>


