<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 13/01/2015
 * Time: 17:58
 */

if (isset($_POST['fileName'])){

    if ($_POST['fileName'] != null){
        $fileName=$_POST['fileName'];
        $row = exec("rm /var/www/API-frontend/config/config-bridge-chain/$fileName",$output,$error);
        echo "File $fileName deleted";
    }else{echo "Bad select.";}
}else{ echo "File Name doesn't exist";}




?>