<?php
include('./include/funtions.php');
sec_session_start();

session_unset();
session_destroy();
$_SESSION = array();

header("Location:login.php");
?>