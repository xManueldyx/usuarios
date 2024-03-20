<?php
session_start();

echo '<h1>'.$_SESSION["user"].'<h1>';

$_SESSION["user"] = null;
$_SESSION["id"] = null;

session_unset();
session_destroy();
header("location:index.php");


exit();