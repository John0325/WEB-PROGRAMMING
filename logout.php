<?php
session_start();
session_destroy();
setcookie("UID",$uId,time()-36);
header('Location: login.php');
?>