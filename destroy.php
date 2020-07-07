<?php 
//check for an existing session 
session_start();
//Destroy the session
session_destroy();
//really get rid of the information
$_SESSION['name'] = null;
//send user back to index.php
header('location:index.php');
?>