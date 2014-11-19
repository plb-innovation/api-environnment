<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 09/11/2014
 * Time: 16:41
 */

function prettyPrint($a) {
    print("<pre>".print_r(str_replace("<","&lt;",str_replace(">","&gt;",$a)),true)."</pre>");
    //foreach($a as $d){
    //    echo $d."</br>";
    //}
}

if (isset($_POST['tenant']) AND isset($_POST['bridge']) AND isset($_POST['subnet'])) {
    $result=array();
    $tenant=$_POST['tenant'];
    $bridge=$_POST['bridge'];
    $subnet=$_POST['subnet'];

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];
        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/delete/DeleteSubnet.py $host $login $passwd $tenant $bridge $subnet",$result);
        prettyPrint($result);
    } else {
        echo "Insert required information";

        if ($_POST['host'] == null){
            echo "Host name required";
        }

        if ($_POST['login'] == null){
            echo "Login required";
        }

        if ($_POST['password'] == null){
            echo "Password required";
        }
    }

}else{

    if ($_POST['tenant'] == null){
        echo "Tenant name required";
    }

    if ($_POST['bridge'] == null){
        echo "Bridge Domain name required";
    }

    if ($_POST['subnet'] == null){
        echo "IP Subnet required";
    }

}

?>