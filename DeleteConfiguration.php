<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 02/12/2014
 * Time: 15:56
 */


if (isset($_POST['fileName'])){

    if ($_POST['fileName'] != null){
        $fileName=$_POST['fileName'];
        $row = exec("rm /var/www/API-frontend/config/config-save/$fileName",$output,$error);
        echo "File $fileName deleted";
    }else{echo "Bad select.";}
}else{ echo "File Name doesn't exist";}




?>