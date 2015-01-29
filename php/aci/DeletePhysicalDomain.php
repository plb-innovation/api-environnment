<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 08/11/2014
 * Time: 19:38
 */

function prettyPrint($a) {
    print("<pre>".print_r(str_replace("<","&lt;",str_replace(">","&gt;",$a)),true)."</pre>");
    //foreach($a as $d){
    //    echo $d."</br>";
    //}
}

if (isset($_POST['physical'])) {
    $result=array();
    $physical=$_POST['physical'];

    if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
        session_start();
        $host=$_POST['host'];
        $login=$_POST['login'];
        $passwd=$_POST['password'];
        $_SESSION['resultat'] = $resultat;
        exec("python /var/www/API-frontend/script/delete/DeletePhysicalDomain.py $host $login $passwd $physical",$result);
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

    if ($_POST['physical'] == null){
        echo "Phyisical Domain name required";
    }



}

?>