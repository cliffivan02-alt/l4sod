<?php

session_start();
session_unset();

header("Cache-control:no-store,no-cache,must-revalidate,max-age=0");
header("pragma:no-cache");
header("expires:0");

session_destroy();
 
header("Location:login.php");
exit();


?>