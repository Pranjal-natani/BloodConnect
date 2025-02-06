<?php
session_start();
$_SESSION["tab"] = "newmenu";
$_SESSION["login"] = 0;
session_destroy();
header('Location: index.php');
?>