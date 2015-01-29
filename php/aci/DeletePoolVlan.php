<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 24/10/2014
 * Time: 19:25
 */

function prettyPrint($a) {
    print("<pre>".print_r(str_replace("<","&lt;",str_replace(">","&gt;",$a)),true)."</pre>");
    //foreach($a as $d){
    //    echo $d."</br>";
    //}
}

if (isset($_POST['vlan']) AND isset($_POST['mode']) ) {
    $result=array();
    $vlan=$_POST['vlan'];
    $mode=$_POST['mode'];

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];
        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/delete/DeleteVlanPool.py $host $login $passwd $vlan $mode",$result);
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

    if ($_POST['mode'] == null){
        echo "Mode required";
    }


}

?>