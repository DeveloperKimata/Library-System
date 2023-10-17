<?php
session_start();

$userName = "joy";
$_SESSION['name'] = $userName;

echo $_SESSION['name'];


?>