<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 23/10/2014
 * Time: 10:25
 */

function prettyPrint($a) {
    print("<pre>".print_r($a,true)."</pre>");

    //foreach($a as $d){
    //    echo $d."</br>";
    //}
}

if (isset($_POST['tenant'])) {
    $result=array();
    $tenant=$_POST['tenant'];

    if ($tenant != null ) {
        exec("python /var/www/API-frontend/script/gen-xml/GenXmlTenant.py $tenant");

        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
            session_start();
            $host=$_POST['host'];
            $login=$_POST['login'];
            $passwd=$_POST['password'];
            $_SESSION['resultat'] = $resultat;
            exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/01-Tenant.xml 1 ");
            exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
            prettyPrint($result);
        } else {
            echo "Insert required information";
        }
    }else{
        echo "Name tenant required";

    }
}
else {
    echo "Error insert.";
}

?>