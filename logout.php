<?php

setcookie("cookie-user", "", time()-1);// BORRA COOKIE "user"
setcookie("cookie-psw", "", time()-1);// BORRA COOKIE "psw"
header("location: index.php");// REDIRIGE A index.php

?>