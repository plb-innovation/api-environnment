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

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="navigation" name="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Cisco Paris Lab - API Environment</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

<!-- /.dropdown -->
    <li class="dropdown">
        <p><?php echo "Welcome, ".$_SESSION['username'];?></p>
    </li>

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>

            <li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
<!-- /.dropdown -->
    <li class="dropdown">
        <img src="ciscoLogo.png" alt="Mountain View" style="width:67px;;height:0%;">
    </li>

</ul>
<!-- /.navbar-top-links -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a  href="index.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard<span class="fa arrow"></span></a>
            </li>
            <li>
                <a onclick="showStuff('aci-configuration')"><i class="fa fa-tasks fa-fw" id="menu-aci"></i>  ACI<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a onclick="showStuff('qvbn-configuration')"><i class="fa fa-tasks fa-fw" id="menu-qvbn"></i>  QvBN<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a onclick="showStuff('vlan-configuration')"><i class="fa fa-sitemap fa-fw" id="menu-vlan"></i>  Vlan Services<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>


            <li>
                <a onclick="showStuff('term-configuration')"><i class="fa fa-bar-chart-o fa-fw" id="menu-term"></i>  Console Services<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">

<!-- /.row -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


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
                        <div class="huge" onclick="showStuff('aci-configuration')">ACI</div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer" onclick="showStuff('aci-configuration')">
                    <span class="pull-left" onclick="showStuff('aci-configuration')" >View Details</span>
                    <span class="pull-right" onclick="showStuff('aci-configuration')"><i class="fa fa-arrow-circle-right"></i></span>
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
                        <div class="huge" onclick="showStuff('qvbn-configuration')">QvBN</div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer" onclick="showStuff('qvbn-configuration')">
                    <span class="pull-left" onclick="showStuff('qvbn-configuration')" style="color: #677F93;">View Details</span>
                    <span class="pull-right" onclick="showStuff('qvbn-configuration')"style="color: #677F93;"><i class="fa fa-arrow-circle-right"></i></span>
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
                        <div class="huge" onclick="showStuff('vlan-configuration')">Vlans </div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer" onclick="showStuff('vlan-configuration')">
                    <span class="pull-left" onclick="showStuff('vlan-configuration')" style="color: #3D9C38;">View Details</span>
                    <span class="pull-right" onclick="showStuff('vlan-configuration')" style="color: #3D9C38;"><i class="fa fa-arrow-circle-right"></i></span>
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
                        <div class="huge" onclick="showStuff('term-configuration')">Term </div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer" onclick="showStuff('term-configuration')">
                    <span class="pull-left" onclick="showStuff('term-configuration')" style="color: #EDC240;">View Details</span>
                    <span class="pull-right" onclick="showStuff('term-configuration')" style="color: #EDC240;"><i class="fa fa-arrow-circle-right"></i></span>
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
                        }elseif($name_action == "VLAN"){
                            echo "<span class=$Dquote chat-img pull-left $Dquote ><button class= $Dquote btn btn-success btn-circle btn-lg $Dquote type= $Dquote button $Dquote></button></span>";
                        }else{
                            echo "<span class=$Dquote chat-img pull-left $Dquote ><img class= $Dquote img-circle $Dquote alt= $Quote User Avatar $Dquote src= $Dquote http://placehold.it/50/55C1E7/fff $Dquote></img></span>";
                        }

                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote > <strong class=$Dquote primary-font $Dquote >$name_action</strong>";
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

<script src="js/index.js"></script>

<script>
    $(function(){

        <?php
        $reg=mysql_query("select * from actions where description_action like '%tenant%' '%created%' OR description_action like '%tenant%' '%deleted%' ");
        $rowsTenant=mysql_num_rows($reg);
        $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%pool%'");
        $rowsPool=mysql_num_rows($reg);
        $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%physical%' OR description_action like '%Physical%'");
        $rowsPhysical=mysql_num_rows($reg);
        $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%Bridge%'");
        $rowsBridge=mysql_num_rows($reg);
        $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%EPG%'");
        $rowsEpg=mysql_num_rows($reg);
        $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%AAEP%'");
        $rowsAAEP=mysql_num_rows($reg);
        $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%demonstration%' OR description_action like '%configuration%'");
        $rowsServiceChain=mysql_num_rows($reg);
         echo "
            Morris.Bar({
            element: 'morris-bar-stat',
            data: [
            {y: 'Engagement Creation/Remove',a: $rowsTenant,b: $rowsPool,c: $rowsPhysical,d: $rowsBridge,e: $rowsEpg,f: $rowsAAEP,g: $rowsServiceChain},

            ],
            xkey: 'y',
            ykeys: ['a', 'b','c','d','e','f','g'],
            labels: ['Tenant', 'Vlan Pool','Physical domain','Bridge Domain','EPG Chaining','AAEP','Service Chaining'],
            hideHover: 'auto',
            resize: true
        });
        ";

        ?>


    });

    $(function() {

        <?php
            $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
            mysql_select_db('API_ENVIRONMENT');
            $reg=mysql_query("select * from actions where description_action like '%tenant%' '%created%' OR description_action like '%tenant%' '%deleted%' ");
            $rowsTenant=mysql_num_rows($reg);
            $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%pool%'");
            $rowsPool=mysql_num_rows($reg);
            $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%physical%' OR description_action like '%Physical%'");
            $rowsPhysical=mysql_num_rows($reg);
            $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%Bridge%'");
            $rowsBridge=mysql_num_rows($reg);
            $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%EPG%'");
            $rowsEpg=mysql_num_rows($reg);
            $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%AAEP%'");
            $rowsAAEP=mysql_num_rows($reg);
            $reg=mysql_query("select * from actions where name_action='ACI' AND description_action like '%demonstration%' OR description_action like '%configuration%'");
            $rowsServiceChain=mysql_num_rows($reg);
            $total=$rowsTenant+$rowsPool+$rowsPhysical+$rowsBridge+$rowsEpg+$rowsAAEP+$rowsServiceChain;
            $tenant=intval(($rowsTenant/$total)*100);
            $pool=intval(($rowsPool/$total)*100);
            $physical=intval(($rowsPhysical/$total)*100);
            $bridge=intval(($rowsBridge/$total)*100);
            $epg=intval(($rowsEpg/$total)*100);
            $aaep=intval(($rowsAAEP/$total)*100);
            $ServiceChain=intval(($rowsServiceChain/$total)*100);

            echo "
            Morris.Donut({
            element: 'morris-donut-chart',
            data: [{
                label: 'Tenant',
                value: $tenant
            }, {
                label: 'Vlan Pool',
                value: $pool
            }, {
                label: 'Physical Domain',
                value: $physical
            },{
                label: 'Bridge Domain',
                value: $bridge
            },{
                label: 'EPG/EPG Chain',
                value: $epg
            },{
                label: 'Attachable Access Entity Profile',
                value: $aaep
            },{
                label: 'Service Chaining',
                value: $ServiceChain
            }],
            resize: true
        });
            ";

        ?>

    });
</script>

<div class="box" id="aci-configuration">
    <div class="col-lg-12">
        <h1 class="page-header">ACI</h1>
    </div>

    <div class="col-lg-12">
        <div class="well well-sm">
            <h4>Description</h4>
            <p>The Cisco Application Centric Infrastructure (ACI) is an architecture that allows the application to define the networking requirements in a programmatic way. This architecture simplifies, optimizes, and accelerates the entire application deployment life cycleKey features of the ACI include the following:</p>
            <ul>
                <li>Simplified automation with an application-driven policy model</li>
                <li>Common platform for managing physical, virtual, and cloud-based environments</li>
                <li>Centralized visibility with real-time, application health monitoring</li>
                <li>Operational simplicity, with common policy, management, and operation models across application, network, and security resources</li>
                <li>Open software flexibility for DevOps teams and ecosystem partner integration</li>
                <li>Scalable performance and secure multi-tenancy</li>
            </ul>
            <p>In this category we can send requests to an ACI. Three levels are available. Orders "Create Order" and "Delete Order" makes changes to the ACI target. The order "Get Order" provide information only. All these orders using methods RESTFUL API and SDK Cobra. These queries affect the behavior of ACI, please do not abuse queries.</p>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Authentification ACI
                <div class="tooltip-demo">
                    <img style="width:5%; float: right; margin-top: -5%;" alt="Mountain View" src="info.png" data-toggle="tooltip" data-placement="bottom" title="Authentication is neccessary for all order to be executed in this category">
                </div>
            </div>
            <div class="panel-body" style="margin-bottom: 5%;">
                <form role="form" method="post" name="new-epg">
                    <div class="form-group">
                        <label>Name Host</label>
                        <input class="form-control" placeholder="Enter text" name="host" id="host-default" value="10.60.9.165">
                        <p class="help-block">IP address : 10.60.9.165</p>
                    </div>
                    <div class="form-group">
                        <label>Login</label>
                        <input class="form-control" placeholder="Enter text" name="login" id="login-default" value="admin">
                        <p class="help-block">example : admin</p>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-default" value="cisco123">
                        <p class="help-block">example : cisco123</p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="chat-panel panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>Last actions
                <div class="tooltip-demo">
                    <img style="width:21px; float: right; margin-top: -21px;" alt="Mountain View" src="info.png" data-toggle="tooltip" data-placement="left" title="Displays the most recent actions performed on ACI">
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <ul class="chat">
                    <?php
                    $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
                    mysql_select_db('API_ENVIRONMENT');
                    $reg=mysql_query("SELECT * FROM actions WHERE name_action='ACI' ORDER BY date_action DESC limit 30");
                    $i=0;
                    while($rows = mysql_fetch_array($reg)){
                        $i=$i+1;
                        $Dquote='"';
                        $description_action=$rows['description_action'];
                        $date_action=$rows['date_action'];
                        $name_action=$rows['name_action'];
                        echo "<li class=$Dquote left clearfix $Dquote >";
                        echo "<span class=$Dquote chat-img pull-left $Dquote ><button class=$Dquote btn btn-primary btn-circle btn-lg $Dquote type=$Dquote button $Dquote></button></span>";
                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote > <strong class=$Dquote primary-font $Dquote >$name_action</strong>";
                        echo "<small class=$Dquote pull-right text-muted $Dquote ><i class=$Dquote fa fa-clock-o fa-fw $Dquote></i>$date_action</small></div>";
                        echo "<p> $description_action </p></div></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div id="accordion" class="panel-group">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseOne" data-parent="#accordion" data-toggle="collapse">Create order</a></h4>
                    <div class="tooltip-demo">
                        <img style="width:21px; float: right; margin-top: -21px;" alt="Mountain View" src="info.png" data-toggle="tooltip" data-placement="left" title="Choose a command by completing all required fields. This command will change configuration of ACI">
                    </div>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="form-group">
                            <label >Create</label>
                            <select class="form-control">
                                <option onclick="showStuffNonesub()">None</option>
                                <option onclick="showStuffSub('from-create-tenant')">Tenant </option>
                                <option onclick="showStuffSub('from-pool-vlan')">Pool Vlans</option>
                                <option onclick="showStuffSub('from-physical-domain')">Physical Domain</option>
                                <option onclick="showStuffSub('from-bridge-domain')">Bridge Domain</option>
                                <option onclick="showStuffSub('from-epg')">EPG</option>
                                <option onclick="showStuffSub('from-epg-bridge-chain')">EPG/Bridge Chain</option>
                                <option onclick="showStuffSub('from-aaep')">Attachable Access Entity Profile</option>
                            </select>
                        </div>

                        <div class="subbox" id="from-epg-bridge-chain">

                            <div class="col-lg-12">

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#Bridge-chain-form">Create Demonstration</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#edit-demonstration-bridge-chain-tab">Launch Demonstration</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#launch-demonstration-bridge-chain-tab">Remove Demonstration</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="Bridge-chain-form" class="tab-pane fade in active">
                                        <h4>Create Demonstration</h4>

                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="new-epg-bridge-chain">
                                                <div class="form-group">
                                                    <label>Configuration Name</label>
                                                    <input class="form-control" placeholder="Enter text"  id="name-configuration-epg-bridge-chain">
                                                    <p class="help-block">example : test-configuration</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text"  id="tenant-epg-bridge-chain">
                                                    <p class="help-block">example : test123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Pool Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="vlan" id="vlan-pool-epg-bridge-chain" >
                                                    <p class="help-block">example : toto</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Private Network Name</label>
                                                    <input class="form-control" placeholder="Enter text" id="private-epg-bridge-chain">
                                                    <p class="help-block">example : pn-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Application Profile Name</label>
                                                    <input class="form-control" placeholder="Enter text" id="profile-epg-bridge-chain">
                                                    <p class="help-block">example : pn-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>EPG Radical Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="epg" id="epg-radical-name-epg-bridge-chain">
                                                    <p class="help-block">example : epg</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bridge Domain Radical Name</label>
                                                    <input class="form-control" placeholder="Enter text" id="bridge-radical-name-epg-bridge-chain">
                                                    <p class="help-block">example : bd</p>
                                                </div>

                                                <div class="form-group" id="specific-epg-bridge-chain-box">
                                                    <label>Specific vlan number</label>
                                                    <textarea class="form-control" rows="3"  placeholder="Enter text" id="specific-epg-bridge-chain"></textarea>
                                                    <p class="help-block">example : 1111,1112,1113-1119, ...</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-epg-bridge-chain" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                <input class="btn btn-outline btn-success" style="float: right;" type="submit" value="Save" id="save-config-demo-bridge-chain"/>
                                            </form>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-new-epg-bridge-chain">></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="edit-demonstration-bridge-chain-tab" class="tab-pane fade">
                                        <h4>Launch Demonstration</h4>

                                        <div class="form-group">
                                            <label>Select configuration</label>
                                            <select class="form-control" style="width: 25%;" id="select-fileName-BridgeChain">
                                                <?php
                                                $row = exec('ls /var/www/API-frontend/config/config-bridge-chain',$output,$error);
                                                while(list(,$row) = each($output)){
                                                    echo "<option>$row</option>";
                                                }
                                                if($error){
                                                    echo "<option>$error</option>";
                                                    exit;
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="panel-body">
                                            <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" id="demo-bridge-chain" value="Start Demonstration" data-toggle="modal" data-target="#myModaldemospeedBridge" style="width: 50%; margin-left: 25%; margin-bottom: -1%;" />

                                        </div>

                                        <div class="modal fade" id="myModaldemospeedBridge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" id="prevent-windows">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p id="comment-demo-speed-bridge-chain">Are you sure you want to run this demonstration ?</p>
                                                    </div>
                                                    <div class="modal-footer" id="new-bouton-ok-demo-speed-chain">
                                                        <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Cancel</button>
                                                        <input type="submit" class="btn btn-outline btn-primary" id="start-demo-speed-bridge-chain" value="Confirm" name="confirm-instance"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <input type="submit" class="btn btn-outline btn-success" id="preview-configuration-bridge-chain" value="Preview" data-toggle="modal" data-target="#myModaldemopreviewBridgeChain" style="width: 10%; margin-left: 45%; margin-bottom: 1%;" />
                                        </div>

                                        <div class="modal fade" id="myModaldemopreviewBridgeChain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" id="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Configuration preview</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p id="comment-demo-preview-bridge-chain"></p>
                                                    </div>
                                                    <div class="modal-footer" id="">
                                                        <input type="button" class="btn btn-outline btn-primary" data-dismiss="modal" value="Ok" name="confirm-instance"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="subbox" id="windows-chain-service-speed-bridge-chain">
                                            <div class="col-lg-12">
                                                <div class="well well-sm">
                                                    <h4>Logs</h4>
                                                    <p id="resultat-chain-service-speed-bridge-chain"></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="launch-demonstration-bridge-chain-tab" class="tab-pane fade">
                                        <h4>Remove Demonstration</h4>

                                        <div class="form-group">
                                            <label>Select configuration</label>
                                            <select class="form-control" style="width: 25%;" id="select-delete-configuration-bridge-chain">
                                                <?php
                                                $row = exec('ls /var/www/API-frontend/config/config-bridge-chain',$output,$error);
                                                while(list(,$row) = each($output)){
                                                    echo "<option>$row</option>";
                                                }
                                                if($error){
                                                    echo "<option>$error</option>";
                                                    exit;
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="panel-body">
                                            <input type="submit" class="btn btn-outline btn-danger" id="configuration-deleted-bridge-chain" value="Delete Configuration" data-toggle="modal" data-target="#myModaldemopreviewdelBridgeChain" style="width: 50%; margin-left: 25%; margin-bottom: -1%;" />
                                        </div>

                                        <div class="modal fade" id="myModaldemopreviewdelBridgeChain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" id="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Remove Configuration</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p id="comment-demo-preview-del-bridge-chain">Do you want to delete this configuration ?</p>
                                                    </div>
                                                    <div class="modal-footer" id="">
                                                        <input type="button" class="btn btn-outline btn-danger" data-dismiss="modal" value="Cancel" name="confirm-instance"/>
                                                        <input type="submit" id="delete-configuration-bridge-chain" class="btn btn-outline btn-primary" data-dismiss="modal" value="Confim" name="confirm-instance-bridge-chain"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-body">
                                            <input type="submit" class="btn btn-outline btn-success" id="preview-configuration-suppr-bridge-chain" value="Preview" data-toggle="modal" data-target="#myModaldemopreviewsupprBridgeChain" style="width: 10%; margin-left: 45%; margin-bottom: 1%;" />
                                        </div>
                                        <p id="comment-delete" style="margin-left: 44%;"></p>
                                        <div class="modal fade" id="myModaldemopreviewsupprBridgeChain" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" id="">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Configuration preview</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p id="comment-demo-preview-suppr-bridge-chain"></p>
                                                    </div>
                                                    <div class="modal-footer" id="">
                                                        <input type="button" class="btn btn-outline btn-primary" data-dismiss="modal" value="Ok" name="confirm-instance"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="subbox" id="from-epg">
                            <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="new-epg">

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-epg">
                                                    <p class="help-block">example : test123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Application Profile Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="profile" id="profile-epg">
                                                    <p class="help-block">example : Application-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>EPG Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="epg" id="epg-epg">
                                                    <p class="help-block">example : epg-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="vlan" id="vlan-epg">
                                                    <p class="help-block">example : vlan-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bridge Domain</label>
                                                    <input class="form-control" placeholder="Enter text" name="bridge" id="bridge-epg">
                                                    <p class="help-block">example : bridge-domain-test</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-epg" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-new-epg">></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-pool-vlan">
                            <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="new-pool-vlan">
                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-pool-vlan">
                                                    <p class="help-block">example : test123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Allocation Mode</label>
                                                    <select class="form-control" id="mode-pool-vlan">
                                                        <option></option>
                                                        <option>dynamic</option>
                                                        <option>static</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Pool Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="vlan" id="vlan-pool-vlan" >
                                                    <p class="help-block">example : toto</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From Vlan</label>
                                                    <input class="form-control" placeholder="Enter text" name="from" id="from-vlan-pool-vlan">
                                                    <p class="help-block">example : Vlan-20</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>To Vlan</label>
                                                    <input class="form-control" placeholder="Enter text" name="to" id="to-pool-vlan">
                                                    <p class="help-block">example : Vlan-234</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-pool-vlan" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-new-pool-vlan">></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-physical-domain">
                            <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="new-physical-domain">
                                                <div class="form-group">
                                                    <label>Physical Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="physical-domain" id="physical-domain-physical">
                                                    <p class="help-block">example : physical-Domain-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Pool Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="physical-domain" id="vlan-pool-physical">
                                                    <p class="help-block">example : QvPC_Pool_test</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-physical-domain" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-new-physical-domain">></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-bridge-domain">
                            <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="new-bridge-domain">
                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-bridge">
                                                    <p class="help-block">example : test123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bridge Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="bridge-domain" id="bridge-domain-bridge">
                                                    <p class="help-block">example : bd-111 </p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Private Network Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="private-network" id="private-network-bridge">
                                                    <p class="help-block">example : network-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Subnet</label>
                                                    <input class="form-control" placeholder="Enter text" name="subnet" id="subnet-bridge">
                                                    <p class="help-block">example : 192.168.90.1/24 </p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-bridge" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-new-bridge-domain">></p>
                                            </div>
                                        </div>
                                    <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-create-tenant">
                            <div class="col-lg-12">
                                <div class="col-lg-4">
                                    <form role="form" name="new-tenant"  method="post">
                                        <div class="form-group">
                                            <label>Tenant</label>
                                            <input class="form-control" placeholder="Enter text" name="tenant" id="tenant">
                                            <p class="help-block">example : test123</p>
                                        </div>

                                        <input type="submit" class="btn btn-outline btn-primary" id="new-tenant" value="Submit" />
                                        <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                    </form>
                                </div>
                                <div class="col-lg-8">
                                    <div class="well well-sm">
                                        <h4>Logs</h4>
                                        <p id="resultat-new-tenant">></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="subbox" id="from-aaep">
                            <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="new-aaep">
                                                <div class="form-group">
                                                    <label>AAEP Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="aaep-aaep">
                                                    <p class="help-block">example : AAEP-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Physical Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="physical-aaep">
                                                    <p class="help-block">example : QvPC_Domain</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Group Policy Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="group-policy-aaep">
                                                    <p class="help-block">example : Int_Policy_Group-QvPC</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Number Interface profile</label>
                                                    <select class="form-control" id="num-profile-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Interface profile radical Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="profile-name-aaep">
                                                    <p class="help-block">example : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Selector name (infraHPortS)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="selector-aaep">
                                                    <p class="help-block">example : Selector-QvPC</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From card number</label>
                                                    <select class="form-control" id="from-card-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 1</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name card (infraPortBlk)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="name-card-aaep">
                                                    <p class="help-block">example : block0</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From port</label>
                                                    <select class="form-control" id="from-port-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>To port</label>
                                                    <select class="form-control" id="to-port-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Switch profile name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="switch-profile-aaep">
                                                    <p class="help-block">example : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Infra name (infraLeafS)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="infra-name-aaep">
                                                    <p class="help-block">example : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Start Range</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="start-range-aaep">
                                                    <p class="help-block">example : 101</p>
                                                </div>


                                                <input type="submit" class="btn btn-outline btn-primary" id="new-aaep" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-new-aaep">></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                        <!-- /.panel-body -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse">Delete order</a></h4>
                    <div class="tooltip-demo">
                        <img style="width:21px; float: right; margin-top: -21px;" alt="Mountain View" src="info.png" data-toggle="tooltip" data-placement="left" title="Choose a command by completing all required fields. This command will remove part or all of configuration ACI.">
                    </div>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Delete</label>
                                <select class="form-control">
                                    <option onclick="showStuffNonesub()">None</option>
                                    <option onclick="showStuffSub('from-delete-tenant')">Tenant</option>
                                    <option onclick="showStuffSub('from-del-vlan')">Pool Vlans</option>
                                    <option onclick="showStuffSub('from-del-physical-dom')">Physical Domain</option>
                                    <option onclick="showStuffSub('from-del-aaep')">Attachable Access Entity Profile</option>
                                    <option onclick="showStuffSub('from-del-subnet')">Subnet</option>
                                </select>
                            </div>

                            <div class="subbox" id="from-delete-tenant">
                                <div class="col-lg-12">
                                            <div class="col-lg-4">
                                                <form role="form" method="post" name="del-tenant">
                                                    <div class="form-group">
                                                        <label>Tenant</label>
                                                        <input class="form-control" placeholder="Enter text" name="tenant" id="del-tenant-tenant">
                                                        <p class="help-block">example : Tenant existing</p>
                                                    </div>

                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-tenant" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>
                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-del-tenant">></p>
                                            </div>
                                        </div>
                                            <!-- /.row (nested) -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-vlan">
                                <div class="col-lg-12">
                                            <div class="col-lg-4">
                                                <form role="form" method="post" name="del-pool-vlan">
                                                    <div class="form-group">
                                                        <label>Vlan Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="vlan" id="del-vlan-pool-vlan">
                                                        <p class="help-block">example : Vlan existing</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Allocation Mode</label>
                                                        <select class="form-control" id="del-mode-pool-vlan">
                                                            <option></option>
                                                            <option>dynamic</option>
                                                            <option>static</option>
                                                        </select>
                                                    </div>

                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-pool-vlan" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>

                                            </div>

                                            <div class="col-lg-8">
                                                <div class="well well-sm">
                                                    <h4>Logs</h4>
                                                    <p id="resultat-del-pool-vlan">></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-physical-dom">
                                <div class="col-lg-12">
                                            <div class="col-lg-4">
                                                <form role="form" method="post" name="del-physical-domain">
                                                    <div class="form-group">
                                                        <label>Physical Domain Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="physical-domain" id="del-physical-physical-domain">
                                                        <p class="help-block">example : Physical Domain existing</p>
                                                    </div>
                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-physical-domain" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>

                                            <div class="col-lg-8">
                                                <div class="well well-sm">
                                                    <h4>Logs</h4>
                                                    <p id="resultat-del-physical-domain">></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-aaep">
                                <div class="col-lg-12">
                                            <div class="col-lg-4">
                                                <form role="form" method="post" name="del-aaep">
                                                    <div class="form-group">
                                                        <label>AAEP Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="aaep" id="del-aaep-aaep">
                                                        <p class="help-block">example : Profile existing</p>
                                                    </div>
                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-aaep" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>

                                            <div class="col-lg-8">
                                                <div class="well well-sm">
                                                    <h4>Logs</h4>
                                                    <p id="resultat-del-aaep">></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-subnet">
                                <div class="col-lg-12">
                                            <div class="col-lg-4">
                                                <form role="form" method="post" name="del-subnet">
                                                    <div class="form-group">
                                                        <label>Tenant Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="tenant" id="del-tenant-subnet">
                                                        <p class="help-block">example : Tenant existing</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Bridge Domain Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="bridge-domain" id="del-bridge-domain-subnet">
                                                        <p class="help-block">example : Bridge Domain existing</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Subnet IP</label>
                                                        <input class="form-control" placeholder="Enter text" name="subnet" id="del-subnet-subnet">
                                                    </div>

                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-subnet" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>

                                            <div class="col-lg-8">
                                                <div class="well well-sm">
                                                    <h4>Logs</h4>
                                                    <p id="resultat-del-subnet">></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseThree" data-parent="#accordion" data-toggle="collapse">Get order</a></h4>
                    <div class="tooltip-demo">
                        <img style="width:21px; float: right; margin-top: -21px;" alt="Mountain View" src="info.png" data-toggle="tooltip" data-placement="left" title="Choose a command by completing all required fields. This command will grab data of ACI.">
                    </div>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Get</label>
                            <select class="form-control">
                                <option onclick="showStuffNonesub()">None</option>
                                <option onclick="showStuffSub('get-bridge-vlan-info')">Bridge Domain</option>
                                <option onclick="showStuffSub('get-epg-info')">EPG</option>
                            </select>
                        </div>

                        <div class="subbox" id="get-bridge-vlan-info">
                            <div class="col-lg-12">
                                         <div class="col-lg-4">
                                             <form role="form" method="post" name="get-bridge-info">
                                                 <div class="form-group">
                                                     <label>Tenant</label>
                                                     <input class="form-control" placeholder="Enter text" name="tenant" id="get-tenant-bridge">
                                                     <p class="help-block">example : test123</p>
                                                 </div>

                                                 <input type="submit" class="btn btn-outline btn-primary" id="get-bridge-info" value="Submit" />
                                                 <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                             </form>

                                         </div>

                                         <div class="col-lg-8">
                                             <div class="well well-sm">
                                                 <h4>Logs</h4>
                                                 <p id="resultat-get-bridge">></p>
                                             </div>
                                         </div>

                                         <!-- /.row (nested) -->


                                    <!-- /.panel-heading -->
                                    <div class="panel-body" name="dataTablesGetBridge">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-get-bridge">
                                                <thead>
                                                    <tr>
                                                        <th>UID</th>
                                                        <th>Name</th>
                                                        <th>PcTag</th>
                                                        <th>Scope</th>
                                                        <th>Segmentation</th>
                                                        <th>Broadcast</th>
                                                        <th>M.T.U</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="dataTables-get-bridge-body">
                                                <!--<tr class="odd gradeX">
                                                           <td>Trident</td>
                                                           <td>Internet Explorer 4.0</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">4</td>
                                                           <td class="center">X</td>
                                                       </tr>-->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                                <!-- /.panel-body -->
                            </div>

                        </div>

                        <div class="subbox" id="get-epg-info">
                            <div class="col-lg-12">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="get-bridge-info">
                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="get-tenant-epg">
                                                    <p class="help-block">example : test123</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="get-tenant-epg-info" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-get-epg">></p>
                                            </div>
                                        </div>

                                        <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseFour" data-parent="#accordion" data-toggle="collapse">Service Chaining</a></h4>
                    <div class="tooltip-demo">
                        <img style="width:21px; float: right; margin-top: -21px;" alt="Mountain View" src="info.png" data-toggle="tooltip" data-placement="left" title="Save and execute configuration automation process. It launch service chaining with your configuration.">
                    </div>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                        <!--/.panel-heading-->
                        <div class="panel-body">
                            <!--Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">Launch Demonstration</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#profile">Create demonstration</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#messages">Remove configuration</a>
                                </li>
                            </ul>

                            <!--Tab panes-->
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <h4>Demo</h4>
                                    <div class="form-group">
                                        <label>Select configuration</label>
                                        <select class="form-control" style="width: 25%;" id="select-fileName">
                                            <?php
                                            $row = exec('ls /var/www/API-frontend/config/config-save',$output,$error);
                                            while(list(,$row) = each($output)){
                                                echo "<option>$row</option>";
                                            }
                                            if($error){
                                                echo "<option>$error</option>";
                                                exit;
                                            }
                                            ?>
                                        </select>


                                    </div>
                                    <div class="panel-body">
                                        <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" id="demo-speed" value="Start Demonstration" data-toggle="modal" data-target="#myModaldemospeed" style="width: 50%; margin-left: 25%; margin-bottom: -1%;" />
                                    </div>

                                    <div class="modal fade" id="myModaldemospeed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <img src="load2.gif" style="width: 20%;margin-top: 50%;margin-left: 42%;" alt="Mountain View" id="load-speed">
                                            <div class="modal-content" id="prevent-windows">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p id="comment-demo-speed">Are you sure you want to run this demonstration ?</p>
                                                    <p id="comment-demo-speed-succed">Succed !</p>

                                                </div>
                                                <div class="modal-footer" id="new-bouton-ok-demo-speed">
                                                    <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Cancel</button>
                                                    <input type="submit" class="btn btn-outline btn-primary" id="start-demo-speed" value="Confirm" name="confirm-instance"/>
                                                    <input type="button" class="btn btn-outline btn-primary" data-dismiss="modal" id="start-demo-speed-ok" value="Ok" name="confirm-instance"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <input type="submit" class="btn btn-outline btn-success" id="preview-configuration" value="Preview" data-toggle="modal" data-target="#myModaldemopreview" style="width: 10%; margin-left: 45%; margin-bottom: 1%;" />
                                    </div>

                                    <div class="modal fade" id="myModaldemopreview" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" id="">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Configuration preview</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p id="comment-demo-preview"></p>
                                                </div>
                                                <div class="modal-footer" id="">
                                                    <input type="button" class="btn btn-outline btn-primary" data-dismiss="modal" value="Ok" name="confirm-instance"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="subbox" id="windows-chain-service-speed">
                                        <div class="col-lg-12">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-chain-service-speed"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile" class="tab-pane fade">
                                    <div class="col-lg-12">
                                        <div class="col-lg-6">
                                            <h4>New demo</h4>
                                        </div>
                                        <div class="col-lg-6">
                                            <input class="form-control" placeholder="Configuration name" style="margin-top: 1%; margin-bottom: 1%; width: 27%;" id="name-configuration-save">
                                        </div>
                                    </div>
                                    <!--/.panel-body-->
                                    <div class="panel-body">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="from-verify-exiting-tenant">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host-chain">
                                                    <p class="help-block">example : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login-chain">
                                                    <p class="help-block">example : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-chain">
                                                    <p class="help-block">example : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-chain">
                                                    <p class="help-block">example : MyTenant</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="verify-exist" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-chain-service">></p>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="panel-body">
                                        <div class="col-lg-4">
                                            <form role="form" method="post" name="">

                                                <h4 class="page-header">Structure</h4>
                                                <div class="form-group">
                                                    <label>Private Network Name</label>
                                                    <input class="form-control" placeholder="Enter text" id="private-network-chain" >
                                                    <p class="help-block">example : pn-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Slice number</label>
                                                    <select class="form-control" id="slice-number-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>chain(s) per Slice</label>
                                                    <select class="form-control" id="chain-per-slice-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select
                                                    <p class="help-block">example : 2</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>EPG(s) per Chain</label>
                                                    <select class="form-control" id="epg-per-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bridge Domain Radical Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="bridge-domain" id="bridge-domain-radical-chain">
                                                    <p class="help-block">example : bd </p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Subnet (optional)</label>
                                                    <input class="form-control" placeholder="Enter text" name="subnet" id="subnet-bridge-chain">
                                                    <p class="help-block">example : 192.168.90.1/24 </p>
                                                </div>

                                                <h4 class="page-header">Physical Domain</h4>
                                                <div class="form-group">
                                                    <label>Physical Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="physical-domain" id="physical-domain-chain">
                                                    <p class="help-block">example : physical-Domain-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Pool Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="physical-domain" id="vlan-pool-physical-chain">
                                                    <p class="help-block">example : QvPC_Pool_test</p>
                                                </div>

                                                <h4 class="page-header">EPG</h4>
                                                <div class="form-group">
                                                    <label>Application Profile Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="profile" id="profile-epg-chain">
                                                    <p class="help-block">example : Application-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>EPG radical Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="epg" id="epg-name-chain">
                                                    <p class="help-block">example : epg</p>
                                                </div>

                                                <h4 class="page-header">AAEP</h4>
                                                <div class="form-group">
                                                    <label>AAEP Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="aaep-aaep-chain">
                                                    <p class="help-block">example : AAEP-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Group Policy Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="group-policy-aaep-chain">
                                                    <p class="help-block">example : Int_Policy_Group-QvPC</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Number Interface profile</label>
                                                    <select class="form-control" id="num-profile-aaep-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Interface profile radical Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="profile-name-aaep-chain">
                                                    <p class="help-block">example : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Selector name (infraHPortS)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="selector-aaep-chain">
                                                    <p class="help-block">example : Selector-QvPC</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From card number</label>
                                                    <select class="form-control" id="from-card-aaep-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 1</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name card (infraPortBlk)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="name-card-aaep-chain">
                                                    <p class="help-block">example : block0</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From port</label>
                                                    <select class="form-control" id="from-port-aaep-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>To port</label>
                                                    <select class="form-control" id="to-port-aaep-chain">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                    <p class="help-block">example : 3</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Switch profile name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="switch-profile-aaep-chain">
                                                    <p class="help-block">example : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Infra name (infraLeafS)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="infra-name-aaep-chain">
                                                    <p class="help-block">example : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Start Range</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="start-range-aaep-chain">
                                                    <p class="help-block">example : 101</p>
                                                </div>


                                                <div class="panel-body">
                                                    <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" id="demo-long" value="Submit" data-toggle="modal" data-target="#myModaldemolong" />
                                                </div>
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                <input class="btn btn-outline btn-success" style="float: right;" type="submit" value="Save" id="save-config-demo"/>
                                                <p id="answer-save-config" style="margin-left: 27%;"></p>

                                                <!-- Modal -->
                                                <div class="modal fade" id="myModaldemolong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <img src="load2.gif" style="width: 20%;margin-top: 50%;margin-left: 42%;" alt="Mountain View" id="load-long">
                                                        <div class="modal-content" id="prevent-windows">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p id="comment-demo-long">Are you sure you want to run this demonstration ?</p>
                                                                <p id="comment-demo-long-succed">Succed !</p>

                                                            </div>
                                                            <div class="modal-footer" id="new-bouton-ok-demo-long">
                                                                <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Cancel</button>
                                                                <input type="submit" class="btn btn-outline btn-primary" id="start-demo-long" value="Confirm" name="confirm-instance"/>
                                                                <input type="button" class="btn btn-outline btn-primary" data-dismiss="modal" id="start-demo-long-ok" value="Ok" name="confirm-instance"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->
                                            </form>

                                        </div>
                                        <div class="col-lg-8">
                                            <div class="well well-sm">
                                                <h4>Logs</h4>
                                                <p id="resultat-chain-service-long">></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="messages" class="tab-pane fade">
                                    <h4>Remove</h4>
                                    <div class="form-group">
                                        <label>Select configuration</label>
                                        <select class="form-control" style="width: 25%;" id="select-delete-configuration">
                                            <?php
                                            $row = exec('ls /var/www/API-frontend/config/config-save',$output,$error);
                                            while(list(,$row) = each($output)){
                                                echo "<option>$row</option>";
                                            }
                                            if($error){
                                                echo "<option>$error</option>";
                                                exit;
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="panel-body">
                                        <input type="submit" class="btn btn-outline btn-danger" id="configuration-deleted" value="Delete Configuration" data-toggle="modal" data-target="#myModaldemopreviewdel" style="width: 50%; margin-left: 25%; margin-bottom: -1%;" />
                                    </div>

                                    <div class="modal fade" id="myModaldemopreviewdel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" id="">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Remove Configuration</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p id="comment-demo-preview-del">Do you want to delete this configuration ?</p>
                                                </div>
                                                <div class="modal-footer" id="">
                                                    <input type="button" class="btn btn-outline btn-danger" data-dismiss="modal" value="Cancel" name="confirm-instance"/>
                                                    <input type="submit" id="delete-configuration" class="btn btn-outline btn-primary" data-dismiss="modal" value="Confim" name="confirm-instance"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel-body">
                                        <input type="submit" class="btn btn-outline btn-success" id="preview-configuration-suppr" value="Preview" data-toggle="modal" data-target="#myModaldemopreviewsuppr" style="width: 10%; margin-left: 45%; margin-bottom: 1%;" />
                                    </div>
                                    <p id="comment-delete" style="margin-left: 44%;"></p>
                                    <div class="modal fade" id="myModaldemopreviewsuppr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" id="">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Configuration preview</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p id="comment-demo-preview-suppr"></p>
                                                </div>
                                                <div class="modal-footer" id="">
                                                    <input type="button" class="btn btn-outline btn-primary" data-dismiss="modal" value="Ok" name="confirm-instance"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- .panel-heading -->

        <div class="panel-group" id="accordionStat">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneStat">Statistics</a>
                    </h4>
                </div>
                <div id="collapseOneStat" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#homeStat" data-toggle="tab">Average</a>
                            </li>
                            <li><a href="#profileStat" data-toggle="tab">Other</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="homeStat">
                                <div class="col-lg-8">
                                    <div class="panel-body">
                                       <div id="morris-bar-stat"></div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="panel-heading" style="margin-left: 39%">
                                        Usage %
                                    </div>
                                    <div class="panel-body">
                                        <div id="morris-donut-chart"></div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="profileStat">
                                <h4></h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordionStat" href="#collapseTwoStat">Documentations</a>
                    </h4>
                </div>
                <div id="collapseTwoStat" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p>The management of the ACI using APIs was implemented through python scripts. They are executed by a php code shell. Given that we do not use SDK solution we need our own auto-generated XML. Therefore, we have two types of scripts in this solution:</p>
                        <ul>
                            <li> First of all, scripts will generate the query request and transcribe in XML. </li>
                            <li> Then, other scripts will retrieve the XML and send it RESTFUL. </li>
                        </ul>
                        <p>This solution allows to customize the configuration and save a set of demonstration. However, we use the SDK for the elimination of  actions. The advantage of using the SDK for deletion is the verification of the existence of objects automatically before deleting. This feature allows us to get feedback and to check the status of the application.</p>
                        <p>It is necessary to install:</p>
                        <h3>Python 2.7 Environment</h3>
                        <p>verify python 2.7 exist in your system :</p>
                        <code>root@python-devlpt-api:~# which python2.7</code></br>
                        <code>/usr/bin/python2.7</code></br>
                        <p>if no result is not returned you need to install python 2.7 environment.</p>
                        <strong>Step 1: Prerequisites</strong>
                        <p>The first step in Python's installation is running a configure script which snoops around your system, looking for packages that it needs to build various capabilities and extensions with. Having these packages installed before running configure makes sure it finds them.</p>
                        <p>Here are some packages that have to be installed to have various aspects of Python functioning:</p>
                        <code>$ sudo apt-get install libreadline-dev</code></br>
                        <code>$ sudo apt-get install libsqlite3-dev</code></br>
                        <code>$ sudo apt-get install libbz2-dev</code></br>
                        <code>$ sudo apt-get install libssl-dev</code></br>
                        <p> </p>
                        <strong>Step 2: Download and build Python</strong>
                        <p>Go to http://www.python.org/. In the "Quick links" section on the left-hand side of the page, "Source distribution" is a direct link to the tarball. Download it. Unzip the tarball, and from the root of the created directory (which will be called Python-2.7.2 or something similar, depending on the version): </p>
                        <code>$ ./configure</code></br>
                        <code>$ make -j</code></br>
                        <p> </p>
                        <p>You can now check that Python was correctly built by executing ./python and falling into its interactive terminal. If you want, you can also execute the Python test-suite with make test, though it may take a long time to run (~10 minutes on a relatively fast machine).</p>
                        <strong>Step 3: Install</strong>
                        <p>In the same directory, run:</p>
                        <code>$sudo make install</code></br>
                        <p> </p>
                        <p>This installs Python into /usr/local/bin. Depending on the configuration of your system, you may want to add symlinks to the newly created /usr/local/bin/python2.7 in /usr/bin/ as well.</p>
                        <p>That's it, you now have Python 2.7 installed.</p>
                        <h3>Library yaml and Cobra SDK</h3>
                        <strong>Step 1: Install Easy Install</strong></br>
                        <code>$ sudo apt-get install python-setuptools python-dev build-essential </code></br>
                        <p> </p>
                        <strong>Step 2: Install pip</strong></br>
                        <code>$ sudo easy_install pip </code></br>
                        <p> </p>
                        <strong>Step 3: Install Yaml</strong></br>
                        <code>$ sudo pip install pyyaml</code></br>
                        <p> </p>
                        <strong>Step 4: Install SDK Cobra</strong></br>
                        <p>Sources SDK to install : <a href="http://173.38.154.142:583/wordpress/wp-content/uploads/2014/10/acicobra-1.0.1_0e-py2.7.egg_.zip"><span id="result_box" class="short_text" lang="en"></span> acicobra-1.0.1_0e-py2.7.egg</a></p>
                        <code>$ easy_install -Z /*path*/acicobra-1.0.1_0e-py2.7.egg </code></br>
                        <p> </p>
                        <p>That's it, you now have Yaml and SDK Cobra installed.</p>
                        <h3>Apache2 and php5</h3>
                        <strong>Step 1: Check Apache2</strong></br>
                        <p>Check that Apache2 is installed and ready to use :</p>
                        <code>root@python-devlpt-api:~# dpkg -l | grep apache2</code></br>
                        <code>ii apache2 2.2.22-13+deb7u3 amd64 Apache HTTP Server metapackage</code></br>
                        <p> </p>
                        <p>Check Apache2 status :</p>
                        <code>root@python-devlpt-api:~# service apache2 status</code></br>
                        <code>Apache2 is running (pid xxxx).</code></br>
                        <p> </p>
                        <strong>Step2 : Install php5</strong></br>
                        <code># apt-get install php5-common libapache2-mod-php5 php5-cli</code></br>
                        <p> </p>
                        <p>Restart Apache2 service after php5 install.</p>
                        <h3>Import Code</h3>
                        <p>You can find the code here :<a href="https://github.com/plb-innovation/api-environnment" title="Download"> Download</a></p>
                        <p>Move the code in : /var/www/</p>

                    </div>
                </div>
            </div>
        </div>
        <!-- .panel-body -->
    </div>
</div>


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


<div class="col-lg-12">
    <div class="panel panel-default">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home-vlan" data-toggle="tab">Create Vlan(s)</a></li>
                <li><a href="#profile-vlan" data-toggle="tab">Remove Vlan(s)</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home-vlan">
                    <h4>New(s) Vlan(s)</h4>
                    <div class="col-lg-4">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Radical Vlan(s) Name</label>
                                <input class="form-control" placeholder="Enter text" id="radical-vlan-name-services">
                                <p class="help-block">example : vlan-</p>
                            </div>

                            <div class="form-group">
                                <label>Specific vlan number</label>
                                <textarea class="form-control" rows="3" placeholder="Enter text" id="specific-vlan-number-services"></textarea>
                                <p class="help-block">example : 1111,1112,1113-1120, ...</p>
                            </div>

                            <div class="form-group">
                                <label>Vlans Group</label>
                                <select class="form-control" id="attach-group-vlan-services">
                                    <option>None</option>
                                    <option>icehouse-to-aci</option>
                                    <option>to-plb-n5k</option>
                                </select>
                                <p class="help-block">example : icehouse-to-aci</p>
                            </div>

                            <div class="form-group">
                                <label>Organisation</label>
                                <select class="form-control" id="organisation-vlan-services">
                                    <option>root</option>
                                    <option>None</option>
                                </select>
                                <p class="help-block">example : root</p>
                            </div>

                            <div class="form-group">
                                <label>Template</label>
                                <select class="form-control" id="template-vlan-services">
                                    <option>ESX-TEMPLATE</option>
                                    <option>Cisco-Lattice-Stargen</option>
                                    <option>Cisco-icehouse-compute-qvpcdi</option>
                                    <option>Cisco-icehouse-ctrl-qvpcdi</option>
                                    <option>ESX-PROD</option>
                                    <option>Redhat-Server</option>
                                    <option>Redhat-Server-pxe</option>
                                    <option>Template-test-api</option>
                                    <option>None</option>
                                </select>
                                <p class="help-block">example : ESX-TEMPLATE</p>
                            </div>

                            <div class="form-group">
                                <label>Card</label>
                                <select class="form-control" id="card-vlan-services">
                                    <option>None</option>
                                    <option>vmnic0</option>
                                    <option>vmnic1</option>
                                    <option>vmnic2</option>
                                    <option>vmnic3</option>
                                    <option>vmnic4</option>
                                    <option>vmnic5</option>
                                    <option>vmnic6</option>
                                    <option>vmnic7</option>
                                    <option>Eth0</option>
                                    <option>Eth1</option>
                                    <option>Eth2</option>
                                    <option>Eth3</option>
                                    <option>Eth4</option>
                                    <option>Eth5</option>
                                </select>
                                <p class="help-block">example : vmnic0</p>
                            </div>

                            <input type="submit" class="btn btn-outline btn-primary" id="new-vlan-services" value="Submit" />
                            <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                        </form>
                    </div>

                    <div class="col-lg-8">
                        <div class="well well-sm">
                            <h4>Logs</h4>
                            <p id="resultat-new-vlan-services">></p>
                            <p id="resultat-new-vlan-services-error"></p>
                        </div>
                    </div>

                </div>

                <div class="tab-pane fade" id="profile-vlan">
                    <h4>Remove vlan(s)</h4>
                    <div class="col-lg-4">
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Radical Vlan(s) Name</label>
                                <input class="form-control" placeholder="Enter text" id="del-radical-vlan-name-services">
                                <p class="help-block">example : vlan-</p>
                            </div>

                            <div class="form-group">
                                <label>Specific vlan number</label>
                                <textarea class="form-control" rows="3"  placeholder="Enter text" id="del-specific-vlan-number-services"></textarea>
                                <p class="help-block">example : 1111,1112,1113-1120, ...</p>
                            </div>

                            <div class="form-group">
                                <label>Vlans Group</label>
                                <select class="form-control" id="detach-group-vlan-services">
                                    <option>None</option>
                                    <option>icehouse-to-aci</option>
                                    <option>to-plb-n5k</option>
                                </select>
                                <p class="help-block">example : icehouse-to-aci</p>

                                <div class="form-group">
                                    <label>Organisation</label>
                                    <select class="form-control" id="del-organisation-vlan-services">
                                        <option>root</option>
                                        <option>None</option>
                                    </select>
                                    <p class="help-block">example : root</p>
                                </div>

                                <div class="form-group">
                                    <label>Template</label>
                                    <select class="form-control" id="del-template-vlan-services">
                                        <option>ESX-TEMPLATE</option>
                                        <option>Cisco-Lattice-Stargen</option>
                                        <option>Cisco-icehouse-compute-qvpcdi</option>
                                        <option>Cisco-icehouse-ctrl-qvpcdi</option>
                                        <option>ESX-PROD</option>
                                        <option>Redhat-Server</option>
                                        <option>Redhat-Server-pxe</option>
                                        <option>Template-test-api</option>
                                        <option>None</option>
                                    </select>
                                    <p class="help-block">example : ESX-TEMPLATE</p>
                                </div>

                                <div class="form-group">
                                    <label>Card</label>
                                    <select class="form-control" id="del-card-vlan-services">
                                        <option>None</option>
                                        <option>vmnic0</option>
                                        <option>vmnic1</option>
                                        <option>vmnic2</option>
                                        <option>vmnic3</option>
                                        <option>vmnic4</option>
                                        <option>vmnic5</option>
                                        <option>vmnic6</option>
                                        <option>vmnic7</option>
                                        <option>Eth0</option>
                                        <option>Eth1</option>
                                        <option>Eth2</option>
                                        <option>Eth3</option>
                                        <option>Eth4</option>
                                        <option>Eth5</option>
                                    </select>
                                    <p class="help-block">example : vmnic0</p>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-outline btn-primary" id="del-vlan-services" value="Submit" />
                            <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                        </form>
                    </div>

                    <div class="col-lg-8">
                        <div class="well well-sm">
                            <h4>Logs</h4>
                            <p id="resultat-remove-vlan-services">></p>
                            <p id="resultat-remove-vlan-services-error"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.panel-body -->
    </div>

    <div class="panel-group" id="accordionStat">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOneStatVlan">Statistics</a>
                </h4>
            </div>
            <div id="collapseOneStatVlan" class="panel-collapse collapse in">
                <div class="panel-body">

                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionStat" href="#collapseTwoStatVlan">Documentations</a>
                </h4>
            </div>
            <div id="collapseTwoStatVlan" class="panel-collapse collapse">
                <div class="panel-body">
                    <p></p>
                </div>
            </div>
        </div>
    </div>


</div>

</div>


<div class="box" id="qvbn-configuration">
    <div class="col-lg-12">
        <h1 class="page-header">QvBN</h1>

    </div>

</div>
    <!-- /.col-lg-12 -->


<!-- /.row -->
<div class="box" id="term-configuration">
    <div class="col-lg-12">
        <h1 class="page-header">Console Services</h1>

        <div class="col-lg-12">

            <ul class="nav nav-tabs">
                <li class="active">
                    <a data-toggle="tab" href="#Console">Console</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#edit-demonstration">Edit démonstration</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#launch-demonstration">Launch demonstration</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="Console" class="tab-pane fade in active">

                    <div class="well well-sm" style="margin-top: 17px;">
                        <h4 >Description</h4>
                    </div>

                    <div class="form-group">
                        <label>Select Console</label>
                        <select class="form-control" id="select-console-services">
                            <option>None</option>
                            <option>Terminal server</option>
                            <option>Parlab Samba</option>
                            <option>Prime Infrastructure</option>
                        </select>
                        <p class="help-block">example : Terminal server</p>
                    </div>

                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" frameborder="0" src="http://127.0.0.1:8022/" style="width: 50%;padding-bottom: 25%;"></iframe>
                    </div>

                    <!--<iframe src="http://plb-api.cisco.com:6275/"></iframe>-->
                    <button class="btn btn-outline btn-primary" type="button" style="float: right;" >Add Console</button>

                </div>
                <div id="edit-demonstration" class="tab-pane fade">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicin…</p>
                </div>
                <div id="launch-demonstration" class="tab-pane fade">
                    <p>bloublou</p>
                </div>
            </div>
        </div>
</div>

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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
