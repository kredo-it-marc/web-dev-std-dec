<?php
    session_start(); //connect to session
    session_unset(); //unset/remove the values from the session variables
    session_destroy(); //destroy the session itself
    header("Location: login.php"); //redirect to login page 
?>