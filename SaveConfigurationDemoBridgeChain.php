<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 13/01/2015
 * Time: 15:09
 */

if (isset($_POST['host']) AND isset($_POST['login']) AND isset($_POST['password']) AND isset($_POST['tenant']) AND isset($_POST['private']) AND isset($_POST['pool']) AND isset($_POST['profile']) AND isset($_POST['epg']) AND isset($_POST['bridge']) AND isset($_POST['specific']) AND isset($_POST['fileName'])){

    $host=$_POST['host'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $tenant=$_POST['tenant'];
    $private=$_POST['private'];
    $pool=$_POST['pool'];
    $profile=$_POST['profile'];
    $epg=$_POST['epg'];
    $bridge=$_POST['bridge'];
    $specific=$_POST['specific'];

    $fileName=$_POST['fileName'];

    if ($tenant != null AND $private != null AND $pool != null AND $profile != null AND $epg != null AND $bridge != null AND $specific != null AND $fileName != null ) {

        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){

            $file = fopen("/var/www/API-frontend/config/config-bridge-chain/$fileName.json", "w+");

            $config=array();
            $config['host']=$host;
            $config['login']=$login;
            $config['password']=$password;
            $config['tenant']=$tenant;
            $config['private']=$private;
            $config['pool']=$pool;
            $config['profile']=$profile;
            $config['epg']=$epg;
            $config['bridge']=$bridge;
            $config['specific']=$specific;
            fwrite($file, json_encode($config));
            fclose($file);

            echo "Configuration has been saved.";


        } else {
            if($host == null){echo "Host name required"."</br>";}
            if($login == null){echo "Login required"."</br>";}
            if($password == null){echo "Password required"."</br>";}
        }
    }else{
        if($tenant == null){echo "Tenant name required"."</br>";}
        if($private == null){echo "Private Network name required"."</br>";}
        if($pool == null){echo "Vlan Pool radical name required";}
        if($profile == null){echo "Profile Network required"."</br>";}
        if($epg == null){echo "Epg radical name required"."</br>";}
        if($bridge == null){echo "Bridge radical name required"."</br>";}
        if($specific == null){echo "Specific vlan id required"."</br>";}
    }
}
else {
    echo "Error insert."."</br>";
}

?>