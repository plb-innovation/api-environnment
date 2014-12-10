<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 11/11/2014
 * Time: 19:13
 */

function prettyPrint($a) {
    print("<pre>".print_r($a,true)."</pre>");
}

function CreateTenant($host, $login, $password, $tenant){
    $result=array();

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlTenant.py $tenant");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/01-Tenant.xml 1 ");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreatePoolVlan($host, $login, $password, $i, $j, $vlan, $numEpg){
    $result=array();
    $mode="static";
    $rad="vlan-";

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlPool.py $mode $vlan $rad"."1".$i.$j."1 $rad"."1".$i.$j."$numEpg");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/02-Pool.xml 1 ");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreatePhysicalDomain($host, $login, $password, $physical, $vlan){
    $result=array();

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlPhysicalDomain.py $physical $vlan");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/03-Physical-Domain.xml 1 ");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreateBridgeDomain($host, $login, $password, $tenant, $bridge, $private, $i, $j, $k){
    $result=array();
    exec("python /var/www/API-frontend/script/gen-xml/GenXmlBridgeDomain.py 3 $tenant $bridge-"."1".$i.$j.$k." $private");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/05-Bridge-Domain.xml 1 ");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreateEpg($host, $login, $password, $tenant, $profile, $epg, $bridge, $i, $j, $k){
    $result=array();

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlAppEPG.py $tenant $profile $epg-"."1".$i.$j.$k." vlan-"."1".$i.$j.$k." $bridge-"."1".$i.$j.$k."");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/06-Application-Profile-EPG.xml 1");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}

function CreateAttachableAccessEntityProfile($host, $login, $password, $aaep , $physical, $policy, $infra, $profile, $selector, $fromCardNum, $numIntProfile, $nameCard, $srange, $fromPort, $toPort, $nameSwitch){
    $result=array();

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlAttachableAccessEntityProfile.py $aaep $physical $policy $numIntProfile $profile $selector $fromCardNum $nameCard $fromPort $toPort $nameSwitch $infra $srange");
    exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $password xml /api/node/mo/.xml /var/www/API-frontend/xml/04-AAEP.xml 1");
    exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
    prettyPrint($result);
}
if (!isset($_POST['fileName'])){

    if (isset($_POST['host']) AND isset($_POST['login']) AND isset($_POST['password']) AND isset($_POST['tenant']) AND isset($_POST['private']) AND isset($_POST['slice']) AND isset($_POST['chain']) AND isset($_POST['numEpg']) AND isset($_POST['bridge']) AND isset($_POST['subnet']) AND isset($_POST['physical']) AND isset($_POST['profile']) AND isset($_POST['epg']) AND isset($_POST['aaep']) AND isset($_POST['policy']) AND isset($_POST['numIntProfile']) AND isset($_POST['nameIntProfile']) AND isset($_POST['selector']) AND isset($_POST['fromCardNum']) AND isset($_POST['nameCard']) AND isset($_POST['fromPort']) AND isset($_POST['toPort']) AND isset($_POST['nameSwitch']) AND isset($_POST['infra']) AND isset($_POST['srange'])){

        $host=$_POST['host'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        $tenant=$_POST['tenant'];
        $private=$_POST['private'];
        $slice=$_POST['slice'];
        $chain=$_POST['chain'];
        $numEpg=$_POST['numEpg'];
        $bridge=$_POST['bridge'];
        $subnet=$_POST['subnet'];
        $physical=$_POST['physical'];
        $vlan=$_POST['vlan'];
        $profile=$_POST['profile'];
        $epg=$_POST['epg'];
        $aaep=$_POST['aaep'];
        $policy=$_POST['policy'];
        $numIntProfile=$_POST['numIntProfile'];
        $nameIntProfile=$_POST['nameIntProfile'];
        $selector=$_POST['selector'];
        $fromCardNum=$_POST['fromCardNum'];
        $nameCard=$_POST['nameCard'];
        $fromPort=$_POST['fromPort'];
        $toPort=$_POST['toPort'];
        $nameSwitch=$_POST['nameSwitch'];
        $infra=$_POST['infra'];
        $srange=$_POST['srange'];

        if ($tenant != null AND $private != null AND $slice != null AND $chain != null AND $numEpg != null AND $bridge != null AND $physical != null AND $profile != null AND $epg != null AND $aaep != null AND $policy != null AND $numIntProfile != null AND $nameIntProfile != null AND $selector != null AND $fromCardNum != null AND $nameCard != null AND $fromPort != null AND $toPort != null AND $nameSwitch != null AND $infra != null AND $srange != null ) {
            exec("python /var/www/API-frontend/script/gen-xml/GenXmlAttachableAccessEntityProfile.py $aaep $physical $groupPolicy $numIntprofile $nameProfile $selector $numCard $nameCard $fromPort $toPort $switchProfile $infraName $range");

            if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
                $slice=(int)$slice;
                $chain=(int)$chain;
                $numEpg=(int)$numEpg;

                CreateTenant($host, $login, $password,$tenant);
                CreatePhysicalDomain($host, $login, $password, $physical, $vlan);

                for ($i = 1; $i <=$slice; $i++) {
                    for ($j = 1; $j <= $chain; $j++) {

                        CreatePoolVlan($host, $login, $password, $i, $j, $vlan, $numEpg);

                        for ($k = 1; $k <= $numEpg; $k++) {
                            CreateBridgeDomain($host, $login, $password, $tenant, $bridge, $private, $i, $j, $k);
                            CreateEpg($host, $login, $password,$tenant, $profile, $epg, $bridge, $i, $j, $k);
                        }

                    }
                }

                CreateAttachableAccessEntityProfile($host, $login, $password, $aaep , $physical, $policy, $infra, $profile, $selector, $fromCardNum, $numIntProfile, $nameCard, $srange, $fromPort, $toPort, $nameSwitch);


            } else {
                if($host == null){echo "Host name required"."</br>";}
                if($login == null){echo "Login required"."</br>";}
                if($password == null){echo "Password required"."</br>";}
            }
        }else{
            if($tenant == null){echo "Tenant name required"."</br>";}
            if($private == null){echo "Private Network name required"."</br>";}
            if($slice == null){echo "Slice number required";}
            if($chain == null){echo "Chain number per slice required"."</br>";}
            if($numEpg == null){echo "Epg number per chain required"."</br>";}
            if($bridge == null){echo "Bridge radical name required"."</br>";}
            if($physical == null){echo "Physical Domain name required"."</br>";}
            if($vlan == null){echo "Vlan pool name required"."</br>";}
            if($profile == null){echo "Application profile name required"."</br>";}
            if($epg == null){echo "EPG Radical name required"."</br>";}
            if($aaep == null){echo "AAEP name required"."</br>";}
            if($policy == null){echo "Group Policy Name required"."</br>";}
            if($numIntProfile == null){echo "Number Interface profile required"."</br>";}
            if($nameIntProfile == null){echo "Interface profile radical Name required"."</br>";}
            if($selector == null){echo "Selector name required"."</br>";}
            if($fromCardNum == null){echo "From card number required"."</br>";}
            if($nameCard == null){echo "Name card required"."</br>";}
            if($fromPort == null){echo "From port required"."</br>";}
            if($toPort == null){echo "To port required"."</br>";}
            if($nameSwitch == null){echo "Switch profile name required"."</br>";}
            if($infra == null){echo "Infrastructure name required"."</br>";}
            if($srange == null){echo "Start Range required"."</br>";}
        }
    } else {echo "Error insert."."</br>";}

}else {
    if ($_POST['fileName'] != null){
        $fileName=$_POST['fileName'];

        $string = file_get_contents("/var/www/API-frontend/config/config-save/$fileName");
        $config=json_decode($string,true);

        if (isset($config['host']) AND isset($config['login']) AND isset($config['password']) AND isset($config['tenant']) AND isset($config['private']) AND isset($config['slice']) AND isset($config['chain']) AND isset($config['epg_number']) AND isset($config['bridge']) AND isset($config['subnet']) AND isset($config['physical']) AND isset($config['profile']) AND isset($config['epg']) AND isset($config['aaep']) AND isset($config['policy']) AND isset($config['interface_profile_number']) AND isset($config['interface_profile_name']) AND isset($config['selector']) AND isset($config['from_card_number']) AND isset($config['card_name']) AND isset($config['from_port']) AND isset($config['to_port']) AND isset($config['switch_name']) AND isset($config['infra']) AND isset($config['srange'])){

            $host=$config['host'];
            $login=$config['login'];
            $password=$config['password'];
            $tenant=$config['tenant'];
            $private=$config['private'];
            $slice=$config['slice'];
            $chain=$config['chain'];
            $numEpg=$config['epg_number'];
            $bridge=$config['bridge'];
            $subnet=$config['subnet'];
            $physical=$config['physical'];
            $vlan=$config['vlan'];
            $profile=$config['profile'];
            $epg=$config['epg'];
            $aaep=$config['aaep'];
            $policy=$config['policy'];
            $numIntProfile=$config['interface_profile_number'];
            $nameIntProfile=$config['interface_profile_name'];
            $selector=$config['selector'];
            $fromCardNum=$config['from_card_number'];
            $nameCard=$config['card_name'];
            $fromPort=$config['from_port'];
            $toPort=$config['to_port'];
            $nameSwitch=$config['switch_name'];
            $infra=$config['infra'];
            $srange=$config['srange'];

            if ($tenant != null AND $private != null AND $slice != null AND $chain != null AND $numEpg != null AND $bridge != null AND $physical != null AND $profile != null AND $epg != null AND $aaep != null AND $policy != null AND $numIntProfile != null AND $nameIntProfile != null AND $selector != null AND $fromCardNum != null AND $nameCard != null AND $fromPort != null AND $toPort != null AND $nameSwitch != null AND $infra != null AND $srange != null ) {
                exec("python /var/www/API-frontend/script/gen-xml/GenXmlAttachableAccessEntityProfile.py $aaep $physical $groupPolicy $numIntprofile $nameProfile $selector $numCard $nameCard $fromPort $toPort $switchProfile $infraName $range");

                if ($config['host'] != null AND $config['login']!= null AND $config['password'] != null){
                    $slice=(int)$slice;
                    $chain=(int)$chain;
                    $numEpg=(int)$numEpg;

                    CreateTenant($host, $login, $password,$tenant);
                    CreatePhysicalDomain($host, $login, $password, $physical, $vlan);

                    for ($i = 1; $i <=$slice; $i++) {
                        for ($j = 1; $j <= $chain; $j++) {

                            CreatePoolVlan($host, $login, $password, $i, $j, $vlan, $numEpg);

                            for ($k = 1; $k <= $numEpg; $k++) {
                                CreateBridgeDomain($host, $login, $password, $tenant, $bridge, $private, $i, $j, $k);
                                CreateEpg($host, $login, $password,$tenant, $profile, $epg, $bridge, $i, $j, $k);
                            }

                        }
                    }

                    CreateAttachableAccessEntityProfile($host, $login, $password, $aaep , $physical, $policy, $infra, $profile, $selector, $fromCardNum, $numIntProfile, $nameCard, $srange, $fromPort, $toPort, $nameSwitch);


                } else {
                    if($host == null){echo "Host name required"."</br>";}
                    if($login == null){echo "Login required"."</br>";}
                    if($password == null){echo "Password required"."</br>";}
                }
            }else{
                if($tenant == null){echo "Tenant name required"."</br>";}
                if($private == null){echo "Private Network name required"."</br>";}
                if($slice == null){echo "Slice number required";}
                if($chain == null){echo "Chain number per slice required"."</br>";}
                if($numEpg == null){echo "Epg number per chain required"."</br>";}
                if($bridge == null){echo "Bridge radical name required"."</br>";}
                if($physical == null){echo "Physical Domain name required"."</br>";}
                if($vlan == null){echo "Vlan pool name required"."</br>";}
                if($profile == null){echo "Application profile name required"."</br>";}
                if($epg == null){echo "EPG Radical name required"."</br>";}
                if($aaep == null){echo "AAEP name required"."</br>";}
                if($policy == null){echo "Group Policy Name required"."</br>";}
                if($numIntProfile == null){echo "Number Interface profile required"."</br>";}
                if($nameIntProfile == null){echo "Interface profile radical Name required"."</br>";}
                if($selector == null){echo "Selector name required"."</br>";}
                if($fromCardNum == null){echo "From card number required"."</br>";}
                if($nameCard == null){echo "Name card required"."</br>";}
                if($fromPort == null){echo "From port required"."</br>";}
                if($toPort == null){echo "To port required"."</br>";}
                if($nameSwitch == null){echo "Switch profile name required"."</br>";}
                if($infra == null){echo "Infrastructure name required"."</br>";}
                if($srange == null){echo "Start Range required"."</br>";}
            }
        } else {echo "Bad configuration file."."</br>";}





    }else {
        echo "Insert File Name";
    }

}
?>
