<?php
    session_start();
    unset($_SESSION["idutil"]);
    unset($_SESSION["email"]);
    unset($_SESSION["first_name"]);
    unset($_SESSION["last_name"]);
    header("Location:login.php");
?>