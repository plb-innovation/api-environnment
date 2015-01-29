<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 17/11/2014
 * Time: 19:04
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
<script src="js/index-dev.js"></script>

<div class="box" id="dashboard">
<div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
</div>

<div class="col-lg-12" >
    <div class="well well-sm">
        <p>The management interface APIs has been developed by the Innovation EPN team . They include a set of application programming interfaces in order to facilitate their use. They are available for another use and can be integrated into an application. You will find the APIs for the ACI and QvBN. These APIs were developed and built on this site. You can use some or all of the APIs of the site. Do not use abusive. These actions need heavy resource allocations.</p>
    </div>
</div>

<div class="col-lg-3 col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><a href="aci-configuration.php" style="color: white;">ACI</a></div>
                    <div>Configuration</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer"><a href="aci-configuration.php"></a>
                <span class="pull-left"><a href="aci-configuration.php">View Details</a></span>
                <span class="pull-right" ><a href="aci-configuration.php"><i class="fa fa-arrow-circle-right"></i></a></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary" style="border-color: #677F93;">
        <div class="panel-heading" style="background-color: #677F93;border-color: #677F93;">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"> <a href="qvbn-configuration.php" style="color: white;">QvBN</a></div>
                    <div>Configuration</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer"><a href="qvbn-configuration.php"></a>
                <span class="pull-left" style="color: #677F93;"><a style="color: #677F93;" href="qvbn-configuration.php">View Details</a></span>
                <span class="pull-right" style="color: #677F93;"><a style="color: #677F93;" href="qvbn-configuration.php"><i class="fa fa-arrow-circle-right"></i></a></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary" style="border-color: #3D9C38;">
        <div class="panel-heading" style="background-color: #3D9C38;border-color: #3D9C38;">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><a href="vlans-configuration.php" style="color: white;">Vlans</a></div>
                    <div>Configuration</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer"><a href="vlans-configuration.php"></a>
                <span class="pull-left" style="color: #3D9C38;"><a style="color: #3D9C38;" href="vlans-configuration.php">View Details</a></span>
                <span class="pull-right" style="color: #3D9C38;"><a style="color: #3D9C38;" href="vlans-configuration.php"><i class="fa fa-arrow-circle-right"></i></a></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>


<div class="col-lg-3 col-md-6">
    <div class="panel panel-primary" style="border-color: #EDC240;">
        <div class="panel-heading" style="background-color: #EDC240;border-color: #EDC240;">
            <div class="row">
                <div class="col-xs-3">
                    <i class="fa fa-tasks fa-5x"></i>
                </div>
                <div class="col-xs-9 text-right">
                    <div class="huge"><a href="term-configuration.php" style="color: white;">Term</a></div>
                    <div>Configuration</div>
                </div>
            </div>
        </div>
        <a href="#">
            <div class="panel-footer" href="term-configuration.php">
                <span class="pull-left" style="color: #EDC240;"><a style="color: #EDC240;" href="term-configuration.php">View Details</a></span>
                <span class="pull-right" style="color: #EDC240;"><a style="color: #EDC240;" href="term-configuration.php"><i class="fa fa-arrow-circle-right"></i></a></span>
                <div class="clearfix"></div>
            </div>
        </a>
    </div>
</div>

<div class="col-lg-5">
    <div class="chat-panel panel panel-default">
        <div class="panel-heading">
            <i class="fa fa-comments fa-fw"></i>Last actions
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <ul class="chat">
                <?php
                $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
                mysql_select_db('API_ENVIRONMENT');
                $reg=mysql_query("select * from actions ORDER BY date_action DESC limit 30");
                $i=0;
                while($rows = mysql_fetch_array($reg)){
                    $i=$i+1;
                    $Dquote='"';
                    $description_action=$rows['description_action'];
                    $date_action=$rows['date_action'];
                    $name_action=$rows['name_action'];
                    echo "<li class=$Dquote left clearfix $Dquote >";
                    if ($name_action == "ACI"){
                        echo "<span class=$Dquote chat-img pull-left $Dquote ><button class= $Dquote btn btn-primary btn-circle btn-lg $Dquote type= $Dquote button $Dquote></button></span>";
                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote ><a href=$Dquote aci-configuration.php $Dquote  style=$Dquote color:black; $Dquote ><strong class=$Dquote primary-font $Dquote >$name_action</strong></a>";
                    }elseif($name_action == "VLAN"){
                        echo "<span class=$Dquote chat-img pull-left $Dquote ><button class= $Dquote btn btn-success btn-circle btn-lg $Dquote type= $Dquote button $Dquote></button></span>";
                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote ><a href=$Dquote vlans-configuration.php $Dquote  style=$Dquote color:black; $Dquote ><strong class=$Dquote primary-font $Dquote >$name_action</strong></a>";
                    }else{
                        echo "<span class=$Dquote chat-img pull-left $Dquote ><img class= $Dquote img-circle $Dquote alt= $Quote User Avatar $Dquote src= $Dquote http://placehold.it/50/55C1E7/fff $Dquote></img></span>";
                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote ><a href=$Dquote aci-configuration.php $Dquote  style=$Dquote color:black; $Dquote ><strong class=$Dquote primary-font $Dquote >$name_action</strong></a>";
                    }

                    echo "<small class=$Dquote pull-right text-muted $Dquote ><i class=$Dquote fa fa-clock-o fa-fw $Dquote></i>$date_action</small></div>";
                    echo "<p> $description_action </p></div></li>";
                }

                ?>
            </ul>
        </div>
    </div>
</div>

<div class="col-lg-7">
    <div class="panel panel-primary">

        <div class="panel-heading">
            <i class="glyphicon glyphicon-check"></i>Todo List</div>
        <div class="panel-body">
            <div class="list-group">
                <a class="list-group-item">
                    <input id="checkbox" type="checkbox" style="margin-right: 1%;">Add VmWare to vlan services
                    <span class="pull-right text-muted small"><em>34 minutes ago</em></span>
                    <span class="glyphicon glyphicon-pencil" style="float:right; margin: 0% 1% 0% 1%;"></span>
                    <span class="glyphicon glyphicon-trash" style="float:right"></span>
                </a>

                <a class="list-group-item">
                    <input id="checkbox" type="checkbox" style="margin-right: 1%;">Save Bridge chaining configuration
                    <span class="pull-right text-muted small"><em>30 minutes ago</em></span>
                    <span class="glyphicon glyphicon-pencil" style="float:right; margin: 0% 1% 0% 1%;"></span>
                    <span class="glyphicon glyphicon-trash" style="float:right"></span>
                </a>

                <a class="list-group-item">
                    <input id="checkbox" type="checkbox" style="margin-right: 1%;">Launch multi-session terminal
                    <span class="pull-right text-muted small"><em>22 minutes ago</em></span>
                    <span class="glyphicon glyphicon-pencil" style="float:right; margin: 0% 1% 0% 1%;"></span>
                    <span class="glyphicon glyphicon-trash" style="float:right"></span>
                </a>

                <a class="list-group-item">
                    <input id="checkbox" type="checkbox" style="margin-right: 1%;">Execute console into frontend
                    <span class="pull-right text-muted small"><em>17 minutes ago</em></span>
                    <span class="glyphicon glyphicon-pencil" style="float:right; margin: 0% 1% 0% 1%;"></span>
                    <span class="glyphicon glyphicon-trash" style="float:right"></span>
                </a>

                <a class="list-group-item">
                    <input id="checkbox" type="checkbox" style="margin-right: 1%;">Save terminal configuration
                    <span class="pull-right text-muted small"><em>14 minutes ago</em></span>
                    <span class="glyphicon glyphicon-pencil" style="float:right; margin: 0% 1% 0% 1%;"></span>
                    <span class="glyphicon glyphicon-trash" style="float:right"></span>
                </a>

                <a class="list-group-item">
                    <input id="checkbox" type="checkbox" style="margin-right: 1%;">Launch demonstration console
                    <span class="pull-right text-muted small"><em>11 minutes ago</em></span>
                    <span class="glyphicon glyphicon-pencil" style="float:right; margin: 0% 1% 0% 1%;"></span>
                    <span class="glyphicon glyphicon-trash" style="float:right"></span>
                </a>
            </div>

            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" class="form-control input-md" type="text" placeholder="Add new task">
                        <span class="input-group-btn">
                            <button id="btn-todo" class="btn btn-primary btn-md">Doesn't work</button>
                        </span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="well well-sm">
        <h4>Usage Information</h4>
        <p> A version of the functional code and if one wishes to make personal changes , we can download the code here.</p>
        <a class="btn btn-default btn-lg btn-block" href="https://github.com/plb-innovation/" target="_blank">View Source Code Documentation</a>
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
