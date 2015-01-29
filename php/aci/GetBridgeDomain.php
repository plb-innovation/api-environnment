<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 09/11/2014
 * Time: 18:29
 */

function prettyPrint($a) {
    //print("<pre>".print_r($a,true)."</pre>");

    foreach($a as $d){
            echo $d."</br>";
    }
}

if (isset($_POST['tenant'])) {
    $result=array();
    $tenant=$_POST['tenant'];

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];
        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/get/GetBridgeDomain.py $host $login $passwd $tenant",$result);
        prettyPrint($result);
    } else {
        echo "Insert required information";

        if ($_POST['host'] == null){
            echo "Host name required";
        }

        if ($_POST['login'] == null){
            echo "Login required";
        }

        if ($_POST['password'] == null){
            echo "Password required";
        }
    }

}else{

    if ($_POST['tenant'] == null){
        echo "Tenant name required";
    }



}

?>