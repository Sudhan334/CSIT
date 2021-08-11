<?php
session_start();
if(!isset($_SESSION['auth']))
{
    header("location:login_original.php?msg=you have to login to access dashboard");
    exit();
}
