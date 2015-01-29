<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 01/12/2014
 * Time: 10:21
 */

if (isset($_POST['host']) AND isset($_POST['login']) AND isset($_POST['password']) AND isset($_POST['tenant']) AND isset($_POST['private']) AND isset($_POST['slice']) AND isset($_POST['chain']) AND isset($_POST['numEpg']) AND isset($_POST['bridge']) AND isset($_POST['subnet']) AND isset($_POST['physical']) AND isset($_POST['profile']) AND isset($_POST['epg']) AND isset($_POST['aaep']) AND isset($_POST['policy']) AND isset($_POST['numIntProfile']) AND isset($_POST['nameIntProfile']) AND isset($_POST['selector']) AND isset($_POST['fromCardNum']) AND isset($_POST['nameCard']) AND isset($_POST['fromPort']) AND isset($_POST['toPort']) AND isset($_POST['nameSwitch']) AND isset($_POST['infra']) AND isset($_POST['srange']) AND isset($_POST['fileName'])){

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
    $fileName=$_POST['fileName'];

    if ($tenant != null AND $private != null AND $slice != null AND $chain != null AND $numEpg != null AND $bridge != null AND $physical != null AND $profile != null AND $epg != null AND $aaep != null AND $policy != null AND $numIntProfile != null AND $nameIntProfile != null AND $selector != null AND $fromCardNum != null AND $nameCard != null AND $fromPort != null AND $toPort != null AND $nameSwitch != null AND $infra != null AND $srange != null AND $fileName != null ) {

        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){

            $file = fopen("/var/www/API-frontend/config/config-save/$fileName.json", "w+");

            $config=array();
            $config['host']=$host;
            $config['login']=$login;
            $config['password']=$password;
            $config['tenant']=$tenant;
            $config['private']=$private;
            $config['slice']=$slice;
            $config['chain']=$chain;
            $config['epg_number']=$numEpg;
            $config['bridge']=$bridge;
            $config['subnet']=$subnet;
            $config['physical']=$physical;
            $config['vlan']=$vlan;
            $config['profile']=$profile;
            $config['epg']=$epg;
            $config['aaep']=$aaep;
            $config['policy']=$policy;
            $config['interface_profile_number']=$numIntProfile;
            $config['interface_profile_name']=$nameIntProfile;
            $config['selector']=$selector;
            $config['from_card_number']=$fromCardNum;
            $config['card_name']=$nameCard;
            $config['from_port']=$fromPort;
            $config['to_port']=$toPort;
            $config['switch_name']=$nameSwitch;
            $config['infra']=$infra;
            $config['srange']=$srange;
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
}
else {
    echo "Error insert."."</br>";
}

?>