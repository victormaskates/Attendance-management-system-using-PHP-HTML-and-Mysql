<?php
session_start();
unset($_SESSION["login_id"]);
unset($_SESSION["name"]);
header("Location:index.php");
?>