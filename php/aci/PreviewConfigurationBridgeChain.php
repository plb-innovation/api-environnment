<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 13/01/2015
 * Time: 17:18
 */
if (isset($_POST['fileName'])){

    if ($_POST['fileName'] != null){
        $fileName=$_POST['fileName'];

        $string = file_get_contents("/var/www/API-frontend/config/config-bridge-chain/$fileName");
        $config=json_decode($string,true);
        echo "Configuration file : ".$fileName."</br>";
        echo "</br>";
        foreach($config as $data => $value)
        {
            echo "<b> $data</b> : $value </br>";
        }
    }else{
        echo "Select file name.";
    }
}
?>