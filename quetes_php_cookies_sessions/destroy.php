<?php
include "inc/head.php";

$_SESSION=array();
session_destroy();
unset($_SESSION);
header('Location: index.php');