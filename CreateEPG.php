<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 24/10/2014
 * Time: 15:48
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['tenant']) AND isset($_POST['profile']) AND isset($_POST['epg']) AND isset($_POST['vlan']) AND isset($_POST['bridge'])) {
    $result=array();
    $tenant=$_POST['tenant'];
    $profile=$_POST['profile'];
    $epg=$_POST['epg'];
    $vlan=$_POST['vlan'];
    $bridge=$_POST['bridge'];

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlappEPG.py $tenant $profile $epg $vlan,$bridge");

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];

        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/06-Application-Profile-EPG.xml 1 ");
        exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
        prettyPrint($result);
    } else {
        echo "Insert required information";
    }
}else{

    if ($_POST['tenant'] == null){
        echo "Tenant name required";
    }

    if ($_POST['profile'] == null){
        echo "Application Profile name required";
    }

    if ($_POST['epg'] == null){
        echo "EPG name required";
    }

    if ($_POST['vlan'] == null){
        echo "Vlan name required";
    }

    if ($_POST['bridge'] == null){
        echo "Bridge Domain name required";
    }


}

?>