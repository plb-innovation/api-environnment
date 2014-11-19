<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 23/10/2014
 * Time: 13:28
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['physical']) AND isset($_POST['pool'])) {
    $result=array();
    $physical=$_POST['physical'];
    $pool=$_POST['pool'];
    exec("python /var/www/API-frontend/script/gen-xml/GenXmlPhysicalDomain.py $physical $pool");

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];

        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/03-Physical-Domain.xml 1 ");
        exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
        prettyPrint($result);
    } else {
        echo "Insert required information";
    }
}else{

    if ($_POST['physical'] == null){
        echo "Physical Domain name required";
    }

    if ($_POST['pool'] == null){
        echo "Physical Domain name required";
    }
}

?>