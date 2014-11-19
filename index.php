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

    <title>Cisco Paris Lab Network API Environment</title>

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
    <!--[if lt IE 9]>apt-get install python-flask
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
    <a class="navbar-brand" href="index.php">Cisco Paris Lab Network API Environment</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

<!-- /.dropdown -->
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
                <a onclick="showStuff('aci-configuration')"><i class="fa fa-bar-chart-o fa-fw"></i>  ACI<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a onclick="showStuff('qvbn-configuration')"><i class="fa fa-bar-chart-o fa-fw"></i>  QvBN<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>

            <li>
                <a href="index.php"><i class="fa fa-bar-chart-o fa-fw"></i> CSR<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="index.php"><i class="fa fa-bar-chart-o fa-fw"></i> UCS<span class="fa arrow"></span></a>
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
<script>

    function WindowsInit() {
        $('.box').hide();
        $('.subbox').hide();
        $('#dashboard').show();
        $('div[name=dataTablesGetBridge]').hide();
    }

    function showStuff(id) {
        $('.box').hide();
        $('#'+id).show();
    }

    function showStuffSub(id) {
        $('.subbox').hide();
        $('#'+id).show();
    }

    function showStuffNonesub() {
        $('.subbox').hide();
    }

    function traiterSubmit(f){
        if (f.host.value != null){
            alert("yes");

        }
    }
</script>

<div class="box" id="dashboard">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>

    <div class="col-lg-12" >
        <div class="well well-sm">
            <p>The management interface APIs has been developed by the Innovation EPN team . They include a set of application programming interfaces in order to facilitate their use. They are available for another use and can be integrated into an application.</p>
           </div>
    </div>

    <div class="col-lg-3 col-md-6">
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
        <div class="panel panel-primary">
            <div class="panel-heading">
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
                    <span class="pull-left" onclick="showStuff('qvbn-configuration')">View Details</span>
                    <span class="pull-right" onclick="showStuff('qvbn-configuration')"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">CSR</div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">UCS</div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

</div>

<script>

$(document).ready(function(){

    WindowsInit();
    $('#dataTables-get-bridge').dataTable();

    $("#new-tenant").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateTenant.php',
            {
                // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                host : $("#host").val(),
                login : $("#login").val(),
                password : $("#passwd").val(),   
                tenant : $("#tenant").val()
            },
            function(data){
                $("#resultat-new-tenant").html("<p>"+data+"</p>");

            },
            'text'
        );
    });

    $("#new-bridge").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateBridgeDomain.php',
                {
                    host : $("#host-bridge").val(),
                    login : $("#login-bridge").val(),
                    password : $("#passwd-bridge").val(),
                    tenant : $("#tenant-bridge").val(),
                    bridge : $("#bridge-domain-bridge").val(),
                    private : $("#private-network-bridge").val(),
                    subnet : $("#subnet-bridge").val()
                },
                function(data){
                    $("#resultat-new-bridge-domain").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#new-physical-domain").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreatePhysicalDomain.php',
                {
                    host : $("#host-physical").val(),
                    login : $("#login-physical").val(),
                    password : $("#passwd-physical").val(),
                    physical : $("#physical-domain-physical").val(),
                    pool : $("#vlan-pool-physical").val()
                },
                function(data){
                    $("#resultat-new-physical-domain").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#new-pool-vlan").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreatePoolVlans.php',
                {
                    host : $("#host-pool-vlan").val(),
                    login : $("#login-pool-vlan").val(),
                    password : $("#passwd-pool-vlan").val(),
                    tenant : $("#tenant-pool-vlan").val(),
                    mode : $("#mode-pool-vlan").val(),
                    vlan : $("#vlan-pool-vlan").val(),
                    from : $("#from-vlan-pool-vlan").val(),
                    to : $("#to-pool-vlan").val()
                },
                function(data){
                    $("#resultat-new-pool-vlan").html("<p>"+data+"</p>");

                },
                'text'
        );
    });


    $("#new-epg").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateEPG.php',
                {
                    host : $("#host-epg").val(),
                    login : $("#login-epg").val(),
                    password : $("#passwd-epg").val(),
                    tenant : $("#tenant-epg").val(),
                    profile : $("#profile-epg").val(),
                    epg : $("#epg-epg").val(),
                    vlan : $("#vlan-epg").val(),
                    bridge : $("#bridge-epg").val()
                },
                function(data){
                    $("#resultat-new-epg").html("<p>"+data+"</p>");

                    
                },
                'text'
        );
    });

    $("#new-aaep").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateAttachableAccessEntityProfile.php',
            {
                host : $("#host-aaep").val(),
                login : $("#login-aaep").val(),
                password : $("#passwd-aaep").val(),
                aaep : $("#aaep-aaep").val(),
                physical : $("#physical-aaep").val(),
                groupPolicy : $("#group-policy-aaep").val(),
                numIntprofile : $("#num-profile-aaep").val(),
                nameProfile : $("#profile-name-aaep").val(),
                selector : $("#selector-aaep").val(),
                numCard : $("#from-card-aaep").val(),
                nameCard : $("#name-card-aaep").val(),
                fromPort : $("#from-port-aaep").val(),
                toPort : $("#to-port-aaep").val(),
                switchProfile : $("#switch-profile-aaep").val(),
                infraName : $("#infra-name-aaep").val(),
                range : $("#start-range-aaep").val()
            },
            function(data){
                $("#resultat-new-aaep").html("<p>"+data+"</p>");

            },
            'text'
        );
    });

    $("#del-tenant").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteTenant.php',
                {
                    host : $("#del-host-tenant").val(),
                    login : $("#del-login-tenant").val(),
                    password : $("#del-passwd-tenant").val(),
                    tenant : $("#del-tenant-tenant").val()
                },
                function(data){
                    $("#resultat-del-tenant").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#del-pool-vlan").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeletePoolVlan.php',
                {
                    host : $("#del-host-pool-vlan").val(),
                    login : $("#del-login-pool-vlan").val(),
                    password : $("#del-passwd-pool-vlan").val(),
                    vlan : $("#del-vlan-pool-vlan").val(),
                    mode : $("#del-mode-pool-vlan").val()
                },
                function(data){
                        $("#resultat-del-pool-vlan").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#del-physical-domain").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeletePhysicalDomain.php',
                {
                    host : $("#del-host-physical-domain").val(),
                    login : $("#del-login-physical-domain").val(),
                    password : $("#del-passwd-physical-domain").val(),
                    physical : $("#del-physical-physical-domain").val()
                },
                function(data){
                    $("#resultat-del-physical-domain").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#del-aaep").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteAttachableAccessEntityProfile.php',
                {
                    host : $("#del-host-aaep").val(),
                    login : $("#del-login-aaep").val(),
                    password : $("#del-passwd-aaep").val(),
                    aaep : $("#del-aaep-aaep").val()
                },
                function(data){
                    $("#resultat-del-aaep").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#del-subnet").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteSubnet.php',
                {
                    host : $("#del-host-subnet").val(),
                    login : $("#del-login-subnet").val(),
                    password : $("#del-passwd-subnet").val(),
                    tenant : $("#del-tenant-subnet").val(),
                    bridge : $("#del-bridge-domain-subnet").val(),
                    subnet : $("#del-subnet-subnet").val()
                },
                function(data){
                    $("#resultat-del-subnet").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#get-bridge-info").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetBridgeDomain.php',
                {
                    host : $("#get-host-bridge").val(),
                    login : $("#get-login-bridge").val(),
                    password : $("#get-passwd-bridge").val(),
                    tenant : $("#get-tenant-bridge").val()
                },
                function(data){
                    $("#resultat-get-bridge").html("<p>"+data+"</p>");
                    $('div[name=dataTablesGetBridge]').show();
                    $("#dataTables-get-bridge-body").html("<tr><td>"+"0512334"+"</td><td>"+"BD-static-mamorim"+"</td><td>"+"23412434"+"</td><td>"+"124346643"+"</td><td>"+"98318"+"</td><td>"+"225.1.162.17"+"</td><td>"+"inherit"+"</td></tr>");
                    for (var t in data) {
                        alert("plop1");
                        var Stab=t['fvBD'];
                        for (var u in Stab){
                            $("#dataTables-get-bridge-body").html("<tr><td>"+Stab['attributes']['uid']+"</td><td>"+Stab['attributes']['name']+"</td><td>"+Stab['attributes']['pcTag']+"<td>"+Stab['attributes']['scope']+"</td><td>"+Stab['attributes']['seg']+"</td><td>"+Stab['attributes']['bcastP']+"</td><td>"+Stab['attributes']['mtu']+"</td>");
                        }
                    }
                },
                'text'
        );
    });

    $("#get-tenant-epg-info").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetEpgInfo.php',
                {
                    host : $("#get-host-epg").val(),
                    login : $("#get-login-epg").val(),
                    password : $("#get-passwd-epg").val(),
                    tenant : $("#get-tenant-epg").val()
                },
                function(data){
                    $("#resultat-get-epg").html("<p>"+data+"</p>");

                },
                'text'
        );
    });

    $("#verify-exist").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetExistTenant.php',
            {
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#password-chain").val(),
                tenant : $("#tenant-chain").val()
            },
            function(data){
                $("#resultat-chain-service").html("<p>"+data+"</p>");

            },
            'text'
        );
    });

    $("#instance").click(function(e){
        showStuff('qvbn-configuration');
        e.preventDefault();

    });

    function sleep(milliSeconds){
            var startTime = new Date().getTime(); // get the current time
            while (new Date().getTime() < startTime + milliSeconds); // hog cpu
        }

});


</script>


<div class="box" id="aci-configuration">
    <div class="col-lg-12">
        <h1 class="page-header">ACI</h1>
    </div>

    <div class="col-lg-4" style="width: 100%">
        <div class="well well-sm">
            <h4>Description</h4>
            <p>In this category we can send requests to an ACI. Three levels are available. Orders "Create Order" and "Delete Order" makes changes to the ACI target. The order "Get Order" provide information only. All these orders using methods RESTFUL API and SDK Cobra. These queries affect the behavior of ACI, please do not abuse queries.</p>
        </div>
    </div>
    <div class="panel-body">
        <div id="accordion" class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseOne" data-parent="#accordion" data-toggle="collapse">Create order</a></h4>
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
                                <option onclick="showStuffSub('from-aaep')">Attachable Access Entity Profile</option>
                            </select>
                        </div>

                        <div class="subbox" id="from-epg">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" name="new-epg">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host-epg">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login-epg">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-epg">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-epg">
                                                    <p class="help-block">Exemple : test123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Application Profile Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="profile" id="profile-epg">
                                                    <p class="help-block">Exemple : Application-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>EPG Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="epg" id="epg-epg">
                                                    <p class="help-block">Exemple : epg-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="vlan" id="vlan-epg">
                                                    <p class="help-block">Exemple : vlan-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bridge Domain</label>
                                                    <input class="form-control" placeholder="Enter text" name="bridge" id="bridge-epg">
                                                    <p class="help-block">Exemple : bridge-domain-test</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-epg" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-new-epg">bash>></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-pool-vlan">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" name="new-pool-vlan">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host-pool-vlan">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login-pool-vlan">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-pool-vlan">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-pool-vlan">
                                                    <p class="help-block">Exemple : test123</p>
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
                                                    <p class="help-block">Exemple : toto</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From Vlan</label>
                                                    <input class="form-control" placeholder="Enter text" name="from" id="from-vlan-pool-vlan">
                                                    <p class="help-block">Exemple : Vlan-20</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>To Vlan</label>
                                                    <input class="form-control" placeholder="Enter text" name="to" id="to-pool-vlan">
                                                    <p class="help-block">Exemple : Vlan-234</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-pool-vlan" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-new-pool-vlan">bash>></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-physical-domain">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" name="new-physical-domain">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host-physical">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login-physical">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" type="password" name="passwd" id="passwd-physical">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Physical Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="physical-domain" id="physical-domain-physical">
                                                    <p class="help-block">Exemple : physical-Domain-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Vlan Pool Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="physical-domain" id="vlan-pool-physical">
                                                    <p class="help-block">Exemple : QvPC_Pool_test</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-physical-domain" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-new-physical-domain">bash>></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-bridge-domain">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" name="new-bridge-domain">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host-bridge">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login-bridge">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" type="password" name="passwd" id="passwd-bridge">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-bridge">
                                                    <p class="help-block">Exemple : test123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bridge Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="bridge-domain" id="bridge-domain-bridge">
                                                    <p class="help-block">Exemple : bridge-domain-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Private Network Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="private-network" id="private-network-bridge">
                                                    <p class="help-block">Exemple : network-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Subnet</label>
                                                    <input class="form-control" placeholder="Enter text" name="subnet" id="subnet-bridge">
                                                    <p class="help-block">Exemple : 192.168.90.1/24 </p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-bridge" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-new-bridge-domain">bash>></p>
                                            </div>
                                        </div>

                                    </div>
                                        <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                        <div class="subbox" id="from-create-tenant">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" name="new-tenant"  method="post">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant">
                                                    <p class="help-block">Exemple : test123</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="new-tenant" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-new-tenant">bash>></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                            </div>

                        </div>


                        <div class="subbox" id="from-aaep">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" name="new-aaep">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="host-aaep">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="login-aaep">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" type="password" name="passwd" id="passwd-aaep">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>AAEP Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="aaep-aaep">
                                                    <p class="help-block">Exemple : AAEP-test</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Physical Domain Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="physical-aaep">
                                                    <p class="help-block">Exemple : QvPC_Domain</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Group Policy Name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="group-policy-aaep">
                                                    <p class="help-block">Exemple : Int_Policy_Group-QvPC</p>
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
                                                    <p class="help-block">Exemple : Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Selector name (infraHPortS)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="selector-aaep">
                                                    <p class="help-block">Exemple : Selector-QvPC</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From card number</label>
                                                    <select class="form-control" id="from-card-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name card (infraPortBlk)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="name-card-aaep">
                                                    <p class="help-block">Exemple : block0</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>From port</label>
                                                    <select class="form-control" id="from-port-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>To port</label>
                                                    <select class="form-control" id="to-port-aaep">
                                                        <option>0</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Switch profile name</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="switch-profile-aaep">
                                                    <p class="help-block">Exemple :Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Infra name (infraLeafS)</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="infra-name-aaep">
                                                    <p class="help-block">Exemple :Leaf</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Start Range</label>
                                                    <input class="form-control" placeholder="Enter text" name="aaep" id="start-range-aaep">
                                                    <p class="help-block">Exemple : 101</p>
                                                </div>


                                                <input type="submit" class="btn btn-outline btn-primary" id="new-aaep" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-new-aaep">bash>></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse">Delete order</a></h4>
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
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <form role="form" method="post" name="del-tenant">
                                                    <div class="form-group">
                                                        <label>Name Host</label>
                                                        <input class="form-control" placeholder="Enter text" name="host" id="del-host-tenant">
                                                        <p class="help-block">IP address : 10.60.9.165</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Login</label>
                                                        <input class="form-control" placeholder="Enter text" name="login" id="del-login-tenant">
                                                        <p class="help-block">Exemple : admin</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="del-passwd-tenant">
                                                        <p class="help-block">Exemple : cisco123</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tenant</label>
                                                        <input class="form-control" placeholder="Enter text" name="tenant" id="del-tenant-tenant">
                                                        <p class="help-block">Exemple : Tenant existing</p>
                                                    </div>

                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-tenant" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-del-tenant">bash>></p>
                                            </div>
                                        </div>
                                            <!-- /.row (nested) -->
                                        </div>
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-vlan">
                                <div class="col-lg-12">
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <form role="form" method="post" name="del-pool-vlan">
                                                    <div class="form-group">
                                                        <label>Name Host</label>
                                                        <input class="form-control" placeholder="Enter text" name="host" id="del-host-pool-vlan">
                                                        <p class="help-block">IP address : 10.60.9.165</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Login</label>
                                                        <input class="form-control" placeholder="Enter text" name="login" id="del-login-pool-vlan">
                                                        <p class="help-block">Exemple : admin</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="del-passwd-pool-vlan">
                                                        <p class="help-block">Exemple : cisco123</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Vlan Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="vlan" id="del-vlan-pool-vlan">
                                                        <p class="help-block">Exemple : Vlan existing</p>
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

                                            <div class="col-lg-6">
                                                <div class="well well-sm">
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-pool-vlan">bash>></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        </div>
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-physical-dom">
                                <div class="col-lg-12">
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <form role="form" method="post" name="del-physical-domain">
                                                    <div class="form-group">
                                                        <label>Name Host</label>
                                                        <input class="form-control" placeholder="Enter text" name="host" id="del-host-physical-domain">
                                                        <p class="help-block">IP address : 10.60.9.165</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Login</label>
                                                        <input class="form-control" placeholder="Enter text" name="login" id="del-login-physical-domain">
                                                        <p class="help-block">Exemple : admin</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="del-passwd-physical-domain">
                                                        <p class="help-block">Exemple : cisco123</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Physical Domain Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="physical-domain" id="del-physical-physical-domain">
                                                        <p class="help-block">Exemple : Physical Domain existing</p>
                                                    </div>
                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-physical-domain" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="well well-sm">
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-physical-domain">bash>></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        </div>
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-aaep">
                                <div class="col-lg-12">
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <form role="form" method="post" name="del-aaep">
                                                    <div class="form-group">
                                                        <label>Name Host</label>
                                                        <input class="form-control" placeholder="Enter text" name="host" id="del-host-aaep">
                                                        <p class="help-block">IP address : 10.60.9.165</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Login</label>
                                                        <input class="form-control" placeholder="Enter text" name="login" id="del-login-aaep">
                                                        <p class="help-block">Exemple : admin</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="del-passwd-aaep">
                                                        <p class="help-block">Exemple : cisco123</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>AAEP Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="aaep" id="del-aaep-aaep">
                                                        <p class="help-block">Exemple : Profile existing</p>
                                                    </div>
                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-aaep" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="well well-sm">
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-aaep">bash>></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        </div>
                                        <!-- /.panel-body -->
                                </div>
                            </div>

                            <div class="subbox" id="from-del-subnet">
                                <div class="col-lg-12">
                                        <div class="panel-body">
                                            <div class="col-lg-6">
                                                <form role="form" method="post" name="del-subnet">
                                                    <div class="form-group">
                                                        <label>Name Host</label>
                                                        <input class="form-control" placeholder="Enter text" name="host" id="del-host-subnet">
                                                        <p class="help-block">IP address : 10.60.9.165</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Login</label>
                                                        <input class="form-control" placeholder="Enter text" name="login" id="del-login-subnet">
                                                        <p class="help-block">Exemple : admin</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="del-passwd-subnet">
                                                        <p class="help-block">Exemple : cisco123</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Tenant Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="tenant" id="del-tenant-subnet">
                                                        <p class="help-block">Exemple : Tenant existing</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Bridge Domain Name</label>
                                                        <input class="form-control" placeholder="Enter text" name="bridge-domain" id="del-bridge-domain-subnet">
                                                        <p class="help-block">Exemple : Bridge Domain existing</p>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Subnet IP</label>
                                                        <input class="form-control" placeholder="Enter text" name="subnet" id="del-subnet-subnet">
                                                    </div>

                                                    <input type="submit" class="btn btn-outline btn-primary" id="del-subnet" value="Submit" />
                                                    <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                                </form>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="well well-sm">
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-subnet">bash>></p>
                                                </div>
                                            </div>
                                            <!-- /.row (nested) -->
                                        </div>
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
                                     <div class="panel-body">
                                         <div class="col-lg-6">
                                             <form role="form" method="post" name="get-bridge-info">
                                                 <div class="form-group">
                                                     <label>Name Host</label>
                                                     <input class="form-control" placeholder="Enter text" name="host" id="get-host-bridge">
                                                     <p class="help-block">IP address : 10.60.9.165</p>
                                                 </div>
                                                 <div class="form-group">
                                                     <label>Login</label>
                                                     <input class="form-control" placeholder="Enter text" name="login" id="get-login-bridge">
                                                     <p class="help-block">Exemple : admin</p>
                                                 </div>

                                                 <div class="form-group">
                                                     <label>Password</label>
                                                     <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="get-passwd-bridge">
                                                     <p class="help-block">Exemple : cisco123</p>
                                                 </div>

                                                 <div class="form-group">
                                                     <label>Tenant</label>
                                                     <input class="form-control" placeholder="Enter text" name="tenant" id="get-tenant-bridge">
                                                     <p class="help-block">Exemple : test123</p>
                                                 </div>

                                                 <input type="submit" class="btn btn-outline btn-primary" id="get-bridge-info" value="Submit" />
                                                 <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                             </form>

                                         </div>

                                         <div class="col-lg-6">
                                             <div class="well well-sm">
                                                 <h4>Console</h4>
                                                 <p id="resultat-get-bridge">bash>></p>
                                             </div>
                                         </div>

                                         <!-- /.row (nested) -->
                                    </div>

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
                                                       </tr>
                                                       <tr class="even gradeC">
                                                           <td>Trident</td>
                                                           <td>Internet Explorer 5.0</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">5</td>
                                                           <td class="center">C</td>
                                                       </tr>
                                                       <tr class="odd gradeA">
                                                           <td>Trident</td>
                                                           <td>Internet Explorer 5.5</td>
                                                           <td>Win 95+</td>
                                                           <td class="center">5.5</td>
                                                           <td class="center">A</td>
                                                       </tr>
                                                       <tr class="even gradeA">
                                                           <td>Trident</td>
                                                           <td>Internet Explorer 6</td>
                                                           <td>Win 98+</td>
                                                           <td class="center">6</td>
                                                           <td class="center">A</td>
                                                       </tr>
                                                       <tr class="odd gradeA">
                                                           <td>Trident</td>
                                                           <td>Internet Explorer 7</td>
                                                           <td>Win XP SP2+</td>
                                                           <td class="center">7</td>
                                                           <td class="center">A</td>
                                                       </tr>
                                                       <tr class="even gradeA">
                                                           <td>Trident</td>
                                                           <td>AOL browser (AOL desktop)</td>
                                                           <td>Win XP</td>
                                                           <td class="center">6</td>
                                                           <td class="center">A</td>
                                                       </tr>
                                                       <tr class="gradeA">
                                                           <td>Gecko</td>
                                                           <td>Firefox 1.0</td>
                                                           <td>Win 98+ / OSX.2+</td>
                                                           <td class="center">1.7</td>
                                                           <td class="center">A</td>
                                                       </tr>
 -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                                                <!-- /.panel-body -->
                            </div>

                        </div>

                        <div class="subbox" id="get-epg-info">
                            <div class="col-lg-12">
                                    <div class="panel-body">
                                        <div class="col-lg-6">
                                            <form role="form" method="post" name="get-bridge-info">
                                                <div class="form-group">
                                                    <label>Name Host</label>
                                                    <input class="form-control" placeholder="Enter text" name="host" id="get-host-epg">
                                                    <p class="help-block">IP address : 10.60.9.165</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Login</label>
                                                    <input class="form-control" placeholder="Enter text" name="login" id="get-login-epg">
                                                    <p class="help-block">Exemple : admin</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="get-passwd-epg">
                                                    <p class="help-block">Exemple : cisco123</p>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tenant</label>
                                                    <input class="form-control" placeholder="Enter text" name="tenant" id="get-tenant-epg">
                                                    <p class="help-block">Exemple : test123</p>
                                                </div>

                                                <input type="submit" class="btn btn-outline btn-primary" id="get-tenant-epg-info" value="Submit" />
                                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                                            </form>

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="well well-sm">
                                                <h4>Console</h4>
                                                <p id="resultat-get-epg">bash>></p>
                                            </div>
                                        </div>

                                        <!-- /.row (nested) -->
                                    </div>
                                    <!-- /.panel-body -->
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#collapseFour" data-parent="#accordion" data-toggle="collapse">Service Chaining</a></h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="col-lg-6">
                            <form role="form" method="post" name="from-verify-exiting-tenant">
                                <div class="form-group">
                                    <label>Name Host</label>
                                    <input class="form-control" placeholder="Enter text" name="host" id="host-chain">
                                </div>
                                <div class="form-group">
                                    <label>Login</label>
                                    <input class="form-control" placeholder="Enter text" name="login" id="login-chain">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="password-chain">
                                </div>

                                <div class="form-group">
                                    <label>Tenant</label>
                                    <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-chain">
                                </div>

                                <input type="submit" class="btn btn-outline btn-primary" id="verify-exist" value="Submit" />
                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                            </form>

                        </div>
                        <div class="col-lg-6">
                            <div class="well well-sm">
                                <h4>Console</h4>
                                <p id="resultat-chain-service">bash>></p>
                            </div>
                        </div>

                    </div>

                    <div class="panel-body">
                        <div class="col-lg-6">
                            <form role="form" method="post" name="">

                                <div class="form-group">
                                    <label>Bridge Domain number</label>
                                    <input class="form-control" placeholder="Enter text" name="bridge-domain" id="">
                                    <p class="help-block">Exemple :</p>
                                </div>

                                <div class="form-group">
                                    <label>Bridge Domain Name radical</label>
                                    <input class="form-control" placeholder="Enter text" name="bridge-domain" id="">
                                    <p class="help-block">Exemple : </p>
                                </div>
                                <div class="form-group">
                                    <label>Bridge Domain number</label>
                                    <input class="form-control" placeholder="Enter text" name="bridge-domain" id="">
                                    <p class="help-block">Exemple : </p>
                                </div>
                                <input type="submit" class="btn btn-outline btn-primary" id="" value="Submit" />
                                <button type="reset" class="btn btn-outline btn-danger">Reset</button>
                            </form>

                        </div>
                        <div class="col-lg-6">
                            <div class="well well-sm">
                                <h4>Console</h4>
                                <p id="resultat-chain-service">bash>></p>
                            </div>
                        </div>

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
    <div class="row">
        <div class="col-lg-12">
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Lunch Instance</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Informations</a>
                        </li>
                        <li><a href="#messages" data-toggle="tab">Messages</a>
                        </li>
                        <li><a href="#settings" data-toggle="tab">Settings</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                            <h4>Instance QvBN</h4>
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <div class="col-lg-6">
                                        <form role="form" method="post" name="create-instance">
                                            <div class="form-group">
                                                <label>Name Host(uml)</label>
                                                <input class="form-control" placeholder="Enter text" name="host">
                                                <p class="help-block">IP address : x.x.x.x</p>
                                            </div>
                                            <div class="form-group">
                                                <label>Login</label>
                                                <input class="form-control" placeholder="Enter text" name="login">
                                                <p class="help-block">Exemple : root</p>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter text" name="passwd">
                                                <p class="help-block">Exemple : cisco</p>
                                            </div>

                                            <div class="form-group">
                                                <label>...</label>
                                                <input class="form-control" placeholder="Enter text" name="tenant">
                                                <p class="help-block">Exemple : ...</p>
                                            </div>

                                            <!--<button class="btn btn-outline btn-primary btn-lg btn-block" type="button">Start Instance</button>-->

                                            <div class="panel-body">
                                                <!-- Button trigger modal -->
                                                <!-- <button class="btn btn-outline btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">Start Instance</button> -->
                                                <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" id="instance" value="Start Instance" data-toggle="modal" data-target="#myModal" />

                                                <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" style="width: 1%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" id="progress-bar">
                                                        <span class="sr-only"></span>
                                                    </div>
                                                </div>
                                                <!-- Modal -->

                                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title" id="myModalLabel">Warning</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>You are about to instantiate a virtual machine. Which necessarily involves the use of resource.</p>
                                                                <p>Are you sure you want to run this instance ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Cancel</button>

                                                                <input type="submit" class="btn btn-outline btn-primary" id="confirm-instance" value="Confirm" data-dismiss="modal" name="confirm-instance"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->
                                            </div>

                                        </form>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="well well-sm">
                                            <h4>Description</h4>
                                            <p>La biscuiterie nantaise - BN - est une fabrique de biscuits historiquement implantée à Nantes (aujourd'hui à Vertou). Longtemps entreprise à capital familial, puis adossée à des multinationales (General Mills à partir de 1969, PepsiCo en 1992 puis depuis 1998 à United Biscuits lui-même contrôlé par PAI et Blackstone) depuis fin 2006. Elle n'est aujourd'hui plus dirigée par les familles nantaises fondatrices Cossé et Lotz.La fabrique est connue pour avoir produit durant les deux guerre mondiales les fameux pains de guerre, le « hard bread », destiné à nourrir les soldats au front, puis les biscuits caséinés riches en calories et peu coûteux. Durant les périodes de rationnement, ils étaient distribués dans les écoles et aux prisonniers de guerre.La biscuiterie connut un essor commercial avec son Cas’ Croûte, puis un nouvel essor Choco BN dont le biscuit est désormais fourré au chocolat.</p>
                                        </div>

                                    </div>

                                </div>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                           </div>
                        <div class="tab-pane fade" id="profile">
                            <h4>Informations</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="messages">
                            <h4>Messages Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div class="tab-pane fade" id="settings">
                            <h4>Settings Tab</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->

            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
    </div>



        <!-- /.panel -->
</div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
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
