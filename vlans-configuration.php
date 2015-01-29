<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 29/01/2015
 * Time: 11:10
 */

session_start();

if($_SESSION['username']){

}else header("Location:login.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cisco Paris Lab </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

<?php include("navigation.php"); ?>

<div id="page-wrapper">

<!-- /.row -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="js/index.js"></script>

<div class="box" id="vlan-configuration">
    <div class="col-lg-12">
        <h1 class="page-header">Vlan Services</h1>
    </div>

    <div class="col-lg-7">
        <div class="well well-sm">
            <h4>Description</h4>
            <p>The virtual lan network service allows virtual networks to spread throughout the infrastructure. In our case, we are talking about :</p>
            <ul>
                <li>UCS Manager : Creation of vlan(s), vlan attachment to groups vlan attachment of Service Profile Templates</li>
                <li>VMware</li>
                <li>Switch(s) : Vlan statement (s), choice the interface</li>
                <li>Router(s) : Configure a dhcp</li>
            </ul>
            <p>All of these equipments are managed through application programming interface and are available for integration on various platform , demonstration and others.</p>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="chat-panel panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>Last actions
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body" style="height: 228px;">
                <ul class="chat">
                    <?php
                    $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
                    mysql_select_db('API_ENVIRONMENT');
                    $reg=mysql_query("SELECT * FROM actions WHERE name_action='VLAN' ORDER BY date_action DESC limit 30");
                    $i=0;
                    while($rows = mysql_fetch_array($reg)){
                        $i=$i+1;
                        $Dquote='"';
                        $description_action=$rows['description_action'];
                        $date_action=$rows['date_action'];
                        $name_action=$rows['name_action'];
                        echo "<li class=$Dquote left clearfix $Dquote >";
                        echo "<span class=$Dquote chat-img pull-left $Dquote ><button class= $Dquote btn btn-success btn-circle btn-lg $Dquote type= $Dquote button $Dquote></button></span>";
                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote > <strong class=$Dquote primary-font $Dquote >$name_action</strong>";
                        echo "<small class=$Dquote pull-right text-muted $Dquote ><i class=$Dquote fa fa-clock-o fa-fw $Dquote></i>$date_action</small></div>";
                        echo "<p> $description_action </p></div></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-red">
            <div class="panel-heading">
                Authentification UCS
            </div>
            <div class="panel-body" style="margin-bottom: 5%;">
                <form role="form" method="post" name="new-epg">
                    <div class="form-group">
                        <label>Name Host</label>
                        <input class="form-control" placeholder="Enter text" name="host" id="host-default-vlan" value="10.60.21.200">
                        <p class="help-block">IP address : 10.60.21.200</p>
                    </div>
                    <div class="form-group">
                        <label>Login</label>
                        <input class="form-control" placeholder="Enter text" name="login" id="login-default-vlan" value="admin">
                        <p class="help-block">example : admin</p>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-default-vlan" value="cisco">
                        <p class="help-block">example : cisco</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                Authentification Switch SW1
            </div>
            <div class="panel-body" style="margin-bottom: 5%;">
                <form role="form" method="post" name="new-epg">
                    <div class="form-group">
                        <label>Name Host</label>
                        <input class="form-control" placeholder="Enter text" name="host" id="host-default-vlan" value="10.60.21.200">
                        <p class="help-block">IP address : 10.60.21.200</p>
                    </div>
                    <div class="form-group">
                        <label>Login</label>
                        <input class="form-control" placeholder="Enter text" name="login" id="login-default-vlan" value="admin">
                        <p class="help-block">example : admin</p>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-default-vlan" value="cisco">
                        <p class="help-block">example : cisco</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Authentification NEXUS 5K
            </div>
            <div class="panel-body" style="margin-bottom: 5%;">
                <form role="form" method="post" name="new-epg">
                    <div class="form-group">
                        <label>Name Host</label>
                        <input class="form-control" placeholder="Enter text" name="host" id="host-default-vlan" value="10.60.21.200">
                        <p class="help-block">IP address : 10.60.21.200</p>
                    </div>
                    <div class="form-group">
                        <label>Login</label>
                        <input class="form-control" placeholder="Enter text" name="login" id="login-default-vlan" value="admin">
                        <p class="help-block">example : admin</p>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-default-vlan" value="cisco">
                        <p class="help-block">example : cisco</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel panel-yellow"">
        <div class="panel-heading">
            Authentification router GW
        </div>
        <div class="panel-body" style="margin-bottom: 5%;">
            <form role="form" method="post" name="new-epg">
                <div class="form-group">
                    <label>Name Host</label>
                    <input class="form-control" placeholder="Enter text" name="host" id="host-default-vlan" value="10.60.21.200">
                    <p class="help-block">IP address : 10.60.21.200</p>
                </div>
                <div class="form-group">
                    <label>Login</label>
                    <input class="form-control" placeholder="Enter text" name="login" id="login-default-vlan" value="admin">
                    <p class="help-block">example : admin</p>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-default-vlan" value="cisco">
                    <p class="help-block">example : cisco</p>
                </div>
            </form>
        </div>
    </div>
</div>


</div>


<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>

<!-- DataTables JavaScript -->
<script src="js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

<!-- Flot Charts JavaScript -->
<script src="js/plugins/flot/excanvas.min.js"></script>
<script src="js/plugins/flot/jquery.flot.js"></script>
<script src="js/plugins/flot/jquery.flot.pie.js"></script>
<script src="js/plugins/flot/jquery.flot.resize.js"></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="js/plugins/flot/flot-data.js"></script>

</body>

</html>