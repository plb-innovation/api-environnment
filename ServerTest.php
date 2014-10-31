<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 06/10/2014
 * Time: 16:21
 */

function prettyPrint($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}

if (isset($_POST['tenant'])) {
    $result=array();
    $tenant=$_POST['tenant'];

    if ($tenant != null ) {
        exec("python /var/www/API-frontend/script/gen-xml/GenXmlTenant.py $tenant");


        if ($_POST['host'] != null AND $_POST['login']!= null AND $_POST['password'] != null){
            session_start();
            $resultat="challenge accepted";
            $host=$_POST['host'];
            $login=$_POST['login'];
            $passwd=$_POST['passwd'];
            $_SESSION['resultat'] = $resultat;
            //exec("python /var/www/API-frontend/script/post/GenConfigPost.py $host $login $passwd xml /api/node/mo/.xml /var/www/API-frontend/xml/01-Tenant.xml 1 ");
            //exec("python /var/www/API-frontend/script/post/PostRequest.py /var/www/API-frontend/config/request.cfg",$result);
            echo "L’Action catholique des milieux indépendants est un mouvement apostolique au sein de l'Église catholique comme les autres mouvements daction catholique. Lié à la Conférence des évêques de France il regroupe des équipes de base de laïcs, ouvertes, en lien avec des clercs. Lobjectif est dévangéliser, de pratiquer une relecture de vie et de participer à la réflexion de lÉglise. En plus de la relecture de vie avec des temps de méditations de la parole en lien avec la vie et la société, le mouvement choisit un thème denquête annuel.";
            //prettyPrint($result);
            //json_encode($result);
        } else {
            echo "Insert required information";
        }
    }else{
        echo "Name tenant required";

    }
}
else {
    echo "<p>Erreur de saisie, recommencer.<p>";
}

?>