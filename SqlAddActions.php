<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 30/11/2014
 * Time: 22:10
 */


$name=htmlentities(trim($_POST['name']));
$description=htmlentities(trim($_POST['description']));
$time=date("Y-m-d H:i:s");

if ($name && $description && $time){
    $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
    mysql_select_db('API_ENVIRONMENT');
    $query=mysql_query("INSERT INTO actions VALUES('','$name','$description','$time')");
    mysql_close($connect);

}


?>