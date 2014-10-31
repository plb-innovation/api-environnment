<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 24/10/2014
 * Time: 11:01
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['vlan']) AND isset($_POST['from']) AND isset($_POST['to']) AND isset($_POST['mode'])) {
    $result=array();
    $vlan=$_POST['vlan'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $mode=$_POST['mode'];

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlPool.py $mode $vlan $from $to");

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];

        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/02-Pool.xml 1 ");
        exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
        prettyPrint($result);
    } else {
        echo "Insert required information";
    }
}else{

    if ($_POST['vlan'] == null){
        echo "Vlan Pool name required";
    }

    if ($_POST['from'] == null){
        echo "Start Vlan number required";
    }

    if ($_POST['to'] == null){
        echo "End Vlan number required";
    }

    if ($_POST['mode'] == null){
        echo "Allo mode required";
    }
}

?>