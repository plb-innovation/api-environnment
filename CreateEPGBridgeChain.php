<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 10/12/2014
 * Time: 17:10
 *
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

function CreatePoolVlan($host, $login, $password, $vlan, $start, $end){
    $result=array();
    $mode="static";
    $rad="vlan-";

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlPool.py $mode $vlan $rad".$start." $rad".$end);
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/02-Pool.xml 1 ");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreateBridgeDomain($host, $login, $password, $tenant, $bridge, $private, $number){
    $result=array();
    exec("python /var/www/API-frontend/script/gen-xml/GenXmlBridgeDomain.py $tenant $bridge-".$number." $private");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/05-Bridge-Domain.xml 1 ");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreateEpg($host, $login, $password, $tenant, $profile, $epg, $bridge, $number){
    $result=array();

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlAppEPG.py $tenant $profile $epg-".$number." vlan-".$number." $bridge-".$number."");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/06-Application-Profile-EPG.xml 1");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

if (!isset($_POST['fileName'])){

    if (isset($_POST['tenant']) AND isset($_POST['bridge']) AND isset($_POST['profile']) AND isset($_POST['epg']) AND isset($_POST['specific']) AND isset($_POST['private']) AND isset($_POST['vlan'])) {
        $result=array();
        $tenant=$_POST['tenant'];
        $bridge=$_POST['bridge'];
        $profile=$_POST['profile'];
        $private=$_POST['private'];
        $epg=$_POST['epg'];
        $specific=$_POST['specific'];
        $vlan=$_POST['vlan'];

        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
            session_start();
            $host=$_POST['host'];
            $login=$_POST['login'];
            $passwd=$_POST['password'];

            $chain=explode(',', $specific );
            //prettyPrint($chain);
            //echo count($chain);


            for ($i = 0; $i < count($chain); $i++){

                if (preg_match("/^[0-9]{1,4}$/", $chain[$i])) {
                    CreatePoolVlan($host, $login, $passwd, $vlan, $chain[$i], $chain[$i]);

                    CreateBridgeDomain($host, $login, $passwd, $tenant, $bridge, $private, $chain[$i]);
                    CreateEpg($host, $login, $passwd,$tenant, $profile, $epg, $bridge, $chain[$i]);
                }

                if (preg_match("/^[0-9]{1,4}[-][0-9]{1,4}$/", $chain[$i])) {
                    $range=explode('-', $chain[$i]);

                    if ($range[0] < $range[1]){
                        CreatePoolVlan($host, $login, $passwd, $vlan, $range[0], $range[1]);

                        $cmpt=intval($range[1]) - intval($range[0]);
                        for ($j=0; $j <= $cmpt; $j++){

                            $arg=intval($range[0])+$j;

                            CreateBridgeDomain($host, $login, $passwd, $tenant, $bridge, $private,"{$arg}");
                            CreateEpg($host, $login, $passwd,$tenant, $profile, $epg, $bridge, "{$arg}");

                        }
                    }
                }
            }


        } else {
            echo "Insert required information</br>";
        }
    }else{

        if ($_POST['tenant'] == null){
            echo "Tenant name required</br>";
        }

        if ($_POST['bridge'] == null){
            echo "Bridge Domain name required</br>";
        }

        if ($_POST['private'] == null){
        echo "Private Network name required</br>";
        }
    }
}else{
    if ($_POST['fileName'] != null){
        $fileName=$_POST['fileName'];
        $string = file_get_contents("/var/www/API-frontend/config/config-bridge-chain/$fileName");
        $config=json_decode($string,true);

        if (isset($config['host']) AND isset($config['login']) AND isset($config['password']) AND isset($config['tenant']) AND isset($config['private']) AND isset($config['pool']) AND isset($config['profile']) AND isset($config['epg']) AND isset($config['bridge']) AND isset($config['specific'])){

            $host=$config['host'];
            $login=$config['login'];
            $password=$config['password'];
            $tenant=$config['tenant'];
            $private=$config['private'];
            $pool=$config['pool'];
            $profile=$config['profile'];
            $epg=$config['epg'];
            $bridge=$config['bridge'];
            $specific=$config['specific'];

            if ($tenant != null AND $private != null AND $pool != null AND $profile != null AND $epg != null AND $bridge != null AND $specific != null){

                if ($config['host'] != null AND $config['login']!= null AND $config['password'] != null){
                    session_start();

                    $chain=explode(',', $specific );

                    for ($i = 0; $i < count($chain); $i++){

                        if (preg_match("/^[0-9]{1,4}$/", $chain[$i])) {
                            CreatePoolVlan($host, $login, $password, $pool, $chain[$i], $chain[$i]);

                            CreateBridgeDomain($host, $login, $password, $tenant, $bridge, $private, $chain[$i]);
                            CreateEpg($host, $login, $passwd,$tenant, $profile, $epg, $bridge, $chain[$i]);
                        }

                        if (preg_match("/^[0-9]{1,4}[-][0-9]{1,4}$/", $chain[$i])) {
                            $range=explode('-', $chain[$i]);

                            if ($range[0] < $range[1]){
                                CreatePoolVlan($host, $login, $password, $pool, $range[0], $range[1]);

                                $cmpt=intval($range[1]) - intval($range[0]);
                                for ($j=0; $j <= $cmpt; $j++){

                                    $arg=intval($range[0])+$j;

                                    CreateBridgeDomain($host, $login, $password, $tenant, $bridge, $private,"{$arg}");
                                    CreateEpg($host, $login, $password,$tenant, $profile, $epg, $bridge, "{$arg}");

                                }
                            }
                        }
                    }

                }else {
                    if($host == null){echo "Host name required"."</br>";}
                    if($login == null){echo "Login required"."</br>";}
                    if($password == null){echo "Password required"."</br>";}
                }

            }else{
                if($tenant == null){echo "Tenant name required"."</br>";}
                if($private == null){echo "Private Network name required"."</br>";}
                if($pool == null){echo "Pool name required";}
                if($profile == null){echo "Profile Name required"."</br>";}
                if($epg == null){echo "Epg number per chain required"."</br>";}
                if($bridge == null){echo "Bridge radical name required"."</br>";}
                if($specific == null){echo "Physical Domain name required"."</br>";}

            }


        } else {echo "Bad configuration file."."</br>";}

    }else {
        echo "Insert File Name";
    }

}

?>