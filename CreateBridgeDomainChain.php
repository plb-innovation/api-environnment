<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 19/11/2014
 * Time: 16:58
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['tenant']) AND isset($_POST['nbridge']) AND isset($_POST['bridge']) AND isset($_POST['srange']) AND isset($_POST['private']) AND isset($_POST['subnet'])) {
    $result=array();
    $tenant=$_POST['tenant'];
    $nbridge=$_POST['nbridge'];
    $bridge=$_POST['bridge'];
    $srange=$_POST['srange'];
    $private=$_POST['private'];
    $subnet=$_POST['subnet'];

    exec("python /var/www/API-frontend/script/gen-xml/GenXmlBridgeDomainChain.py $tenant $nbridge $srange $bridge $private $subnet");

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];

        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/05-Bridge-Domain.xml 1 ");
        exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
        prettyPrint($result);

    } else {
        echo "Insert required information";
    }
}else{

    if ($_POST['tenant'] == null){
        echo "Tenant name required";
    }

    if ($_POST['nbridge'] == null){
        echo "Bridge Domain number required";
    }
    if ($_POST['bridge'] == null){
        echo "Bridge Domain name required";
    }

    if ($_POST['srange'] == null){
        echo "Bridge Domain name required";
    }

    if ($_POST['private'] == null){
        echo "Private Network name required";
    }

    if ($_POST['subnet'] == null){
        echo "Subnet name required";
    }


}

?>