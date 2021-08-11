<?php
/*
 * php cookies
 * stored in user's machine, (i.e. Web browser)
 * to retrieve cookie values $_COOKIE array variable
 * to set cookie setcooking() function is used
 * cookie has expiration date, which we set when calling setcookie() funcion
 * $_COOKIE is superglobal array variable
 * superglobal variable is php are accessible anywhere in the project
 */

setcookie('test','test value',time()+10); //saving some value in cookie
setcookie('email','admin@admin.com',time()+60*60); //saving some value in cookie
setcookie('pswd','admin123',time()+60*60); //saving some value in cookie
echo "<pre>";
print_r($_COOKIE);
//echo $_COOKIE['test']; //retrieving cookie value from $_COOKIE array variable
//setcookie('test','');
?>