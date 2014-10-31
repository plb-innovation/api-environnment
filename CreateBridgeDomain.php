<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 23/10/2014
 * Time: 11:33
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['tenant']) AND isset($_POST['bridge']) AND isset($_POST['private']) AND isset($_POST['subnet'])) {
    $result=array();
        exec("python /var/www/API-frontend/script/gen-xml/GenXmlBridgeDomain.py $tenant $bridge $private $subnet");

        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
            session_start();
            $host=$_POST['host'];
            $login=$_POST['login'];
            $passwd=$_POST['password'];
            $tenant=$_POST['tenant'];
            $bridge=$_POST['bridge'];
            $private=$_POST['private'];
            $subnet=$_POST['subnet'];

            $_SESSION['resultat'] = $resultat;
            exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/05-Bridge-Domain-test.xml 1 ");
            exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
            prettyPrint($result);
        } else {
            echo "Insert required information";
        }
}else{

      if ($_POST['tenant'] == null){
          echo "Tenant name required";
      }

      if ($_POST['bridge'] == null){
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