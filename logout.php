<?php
session_start();

session_destroy();

header('location: 3userlogin.php');

?>