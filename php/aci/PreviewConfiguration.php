<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 02/12/2014
 * Time: 13:43
 */

if (isset($_POST['fileName'])){

    if ($_POST['fileName'] != null){
        $fileName=$_POST['fileName'];

        $string = file_get_contents("/var/www/API-frontend/config/config-save/$fileName");
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


