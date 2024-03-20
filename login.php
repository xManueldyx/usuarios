<?php
session_start();

if (!isset($_SESSION["user"])){
    $_SESSION["user"] = $_POST["usuario"];
};

echo '<h2>'.$_POST["usuario"].'</h2></br>';
echo '<h2>'.$_SESSION["user"].'</h2>';


if (!isset($_SESSION["id"])){
    session_regenerate_id();
    $_SESSION["id"] = session_id();
};
$_SESSION["id"] = session_id();
echo '<h1>'.$_SESSION["id"].'<h1>';

echo '<a href="logout.php" type="button" title="LogOut">Logout</a>';