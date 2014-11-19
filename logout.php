<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 17/11/2014
 * Time: 23:57
 */
session_start();

session_destroy();

header("Location:login.php");


?>