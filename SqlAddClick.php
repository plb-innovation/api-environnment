<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 23/11/2014
 * Time: 12:23
 */



$name=htmlentities(trim($_POST['nameEngagement']));
$date=date("Y-m-d");
$time=date("Y-m-d H:i:s");

if ($name){
    $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
    mysql_select_db('API_ENVIRONMENT');
    $query=mysql_query("INSERT INTO engagement VALUES('','$name','$date','$time')");
    mysql_close($connect);

}


?>