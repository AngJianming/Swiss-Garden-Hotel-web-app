<?php
session_start();
unset($_SESSION["user"]);
header("location:/source/Login-Sign-up/Login.php");
 // header("location:index.php");
?>