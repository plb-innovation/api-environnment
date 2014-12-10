<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 11/11/2014
 * Time: 19:13
 */

function prettyPrint($a) {
    print("<pre>".print_r($a,true)."</pre>");

    //foreach($a as $d){
    //    echo $d."</br>";
    //}
}

if (isset($_POST['aaep']) AND isset($_POST['physical']) AND isset($_POST['groupPolicy']) AND isset($_POST['numIntprofile']) AND isset($_POST['nameProfile']) AND isset($_POST['selector']) AND isset($_POST['numCard']) AND isset($_POST['nameCard']) AND isset($_POST['fromPort']) AND isset($_POST['toPort']) AND isset($_POST['switchProfile']) AND isset($_POST['infraName']) AND isset($_POST['range'])) {
    $result=array();
    $aaep=$_POST['aaep'];
    $physical=$_POST['physical'];
    $groupPolicy=$_POST['groupPolicy'];
    $numIntprofile=$_POST['numIntprofile'];
    $nameProfile=$_POST['nameProfile'];
    $selector=$_POST['selector'];
    $numCard=$_POST['numCard'];
    $nameCard=$_POST['nameCard'];
    $fromPort=$_POST['fromPort'];
    $toPort=$_POST['toPort'];
    $switchProfile=$_POST['switchProfile'];
    $infraName=$_POST['infraName'];
    $range=$_POST['range'];

    if ($aaep != null AND $physical != null AND $groupPolicy != null AND $numIntprofile != null AND $nameProfile != null AND $selector != null AND $numCard != null AND $nameCard != null AND $fromPort != null AND $toPort != null AND $switchProfile != null AND $infraName != null AND $range != null ) {
        exec("python /var/www/API-frontend/script/gen-xml/GenXmlAttachableAccessEntityProfile.py $aaep $physical $groupPolicy $numIntprofile $nameProfile $selector $numCard $nameCard $fromPort $toPort $switchProfile $infraName $range");

        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
            session_start();
            $host=$_POST['host'];
            $login=$_POST['login'];
            $passwd=$_POST['password'];
            $_SESSION['resultat'] = $resultat;
            exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/04-AAEP.xml 1");
            exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
            prettyPrint($result);
        } else {
            echo "Insert required information";
        }
    }else{
        if($aaep == null){echo "AAEP name required";}
        if($physical == null){echo "Physical Domain name required";}
        if($groupPolicy == null){echo "Group Policy Name required";}
        if($numIntprofile == null){echo "Number Interface profile required";}
        if($nameProfile == null){echo "Interface profile radical Name required";}
        if($selector == null){echo "Selector name required";}
        if($numCard == null){echo "From card number required";}
        if($nameCard == null){echo "Name card required";}
        if($fromPort == null){echo "From port required";}
        if($toPort == null){echo "To port required";}
        if($switchProfile == null){echo "Switch profile name required";}
        if($infraName == null){echo "Infrastructure name required";}
        if($range == null){echo "Start Range required";}
    }
}
else {
    echo "Error insert.";
}

?>
