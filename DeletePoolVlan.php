<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 24/10/2014
 * Time: 19:25
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['vlan'])) {
    $result=array();
    $vlan=$_POST['vlan'];

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];
        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/delete/DeleteVlanPool.py $host $login $passwd $vlan",$result);
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

    if ($_POST['vlan'] == null){
        echo "Vlan name required";
    }



}

?>