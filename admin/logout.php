<?php

session_start();


unset($_SESSION['AdminID']);
unset($_SESSION['Name']);
unset($_SESSION['login']);


header("location:login.php");


?>