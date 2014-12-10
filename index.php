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
    <a class="navbar-brand" href="index.php">Cisco Paris Lab Network API Environment</a>
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
                <a onclick="showStuff('aci-configuration')"><i class="fa fa-bar-chart-o fa-fw" id="menu-aci"></i>  ACI<span class="fa arrow"></span></a>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a onclick="showStuff('qvbn-configuration')"><i class="fa fa-bar-chart-o fa-fw" id="menu-qvbn"></i>  QvBN<span class="fa arrow"></span></a>
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

    <div class="col-lg-4 col-md-6">
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

    <div class="col-lg-4 col-md-6">
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

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Usage
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div id="morris-bar-chart-element"></div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>

    <div class="col-lg-6">
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
                        echo "<span class=$Dquote chat-img pull-left $Dquote ><img src= $Dquote http://placehold.it/50/55C1E7/fff $Dquote alt=$Dquote User Avatar $Dquote class=$Dquote img-circle $Dquote /></span>";
                        echo "<div class=$Dquote chat-body clearfix $Dquote ><div class=$Dquote header $Dquote > <strong class=$Dquote primary-font $Dquote >$name_action</strong>";
                        echo "<small class=$Dquote pull-right text-muted $Dquote ><i class=$Dquote fa fa-clock-o fa-fw $Dquote></i>$date_action</small></div>";
                        echo "<p> $description_action </p></div></li>";
                    }

                    ?>
                </ul>
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
<script>

function WindowsInit() {
    $('.box').hide();
    $('.subbox').hide();

    $('#load-long').hide();
    $('#load-speed').hide();
    $('#start-demo-long-ok').hide();
    $('#comment-demo-long-succed').hide();

    $('#start-demo-speed-ok').hide();
    $('#comment-demo-speed-succed').hide();

    $('#dashboard').show();
    $('#progression-bar-demo-long').hide();
    $('#progression-bar-demo-speed').hide();
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

function sleep(milliSeconds){
    var startTime = new Date().getTime(); // get the current time
    while (new Date().getTime() < startTime + milliSeconds); // hog cpu
}



$(document).ready(function(){
    WindowsInit();
    $('#dataTables-get-bridge').dataTable();

    $("#new-tenant").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateTenant.php',
            {
                // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),   
                tenant : $("#tenant").val()
            },
            function(data){
                $("#resultat-new-tenant").html("<p>"+data+"</p>");

            },
            'text'
        );

        AddActions("ACI", "Tenant "+$("#tenant").val()+" has been created by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#new-bridge").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateBridgeDomain.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
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

        AddActions("ACI", "Bridge "+$("#bridge-domain-bridge").val()+" has been created by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#new-physical-domain").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreatePhysicalDomain.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    physical : $("#physical-domain-physical").val(),
                    pool : $("#vlan-pool-physical").val()
                },
                function(data){
                    $("#resultat-new-physical-domain").html("<p>"+data+"</p>");

                },
                'text'
        );

        AddActions("ACI", "Physical Domain "+$("#physical-domain-physical").val()+" has been created by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#new-pool-vlan").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreatePoolVlans.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
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

        AddActions("ACI", "Pool Vlans "+$("#vlan-pool-vlan").val()+" has been created by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#new-epg").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateEPG.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
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

        AddActions("ACI", "EPG "+$("#epg-epg").val()+" has been created by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#new-aaep").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('CreateAttachableAccessEntityProfile.php',
            {
                host : $("#host-default").val(),
                login : $("#login-default").val(),
                password : $("#passwd-default").val(),
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

        AddActions("ACI", "AAEP "+$("#aaep-aaep").val()+" has been created by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#del-tenant").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteTenant.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    tenant : $("#del-tenant-tenant").val()
                },
                function(data){
                    $("#resultat-del-tenant").html("<p>"+data+"</p>");

                },
                'text'
        );

        AddActions("ACI", "Tenant "+$("#del-tenant-tenant").val()+" has been deleted by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#del-pool-vlan").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeletePoolVlan.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    vlan : $("#del-vlan-pool-vlan").val(),
                    mode : $("#del-mode-pool-vlan").val()
                },
                function(data){
                        $("#resultat-del-pool-vlan").html("<p>"+data+"</p>");

                },
                'text'
        );

        AddActions("ACI", "Pool Vlan "+$("#del-vlan-pool-vlan").val()+" has been deleted by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#del-physical-domain").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeletePhysicalDomain.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    physical : $("#del-physical-physical-domain").val()
                },
                function(data){
                    $("#resultat-del-physical-domain").html("<p>"+data+"</p>");

                },
                'text'
        );

        AddActions("ACI", "Physical Domain "+$("#del-physical-physical-domain").val()+" has been deleted by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#del-aaep").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteAttachableAccessEntityProfile.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    aaep : $("#del-aaep-aaep").val()
                },
                function(data){
                    $("#resultat-del-aaep").html("<p>"+data+"</p>");

                },
                'text'
        );
        AddActions("ACI", "AAEP "+$("#del-aaep-aaep").val()+" has been deleted by <?php echo $_SESSION['username'];?>.");

    });

    $("#del-subnet").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('DeleteSubnet.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    tenant : $("#del-tenant-subnet").val(),
                    bridge : $("#del-bridge-domain-subnet").val(),
                    subnet : $("#del-subnet-subnet").val()
                },
                function(data){
                    $("#resultat-del-subnet").html("<p>"+data+"</p>");

                },
                'text'
        );

        AddActions("ACI", "Subnet "+$("#del-subnet-subnet").val()+" has been deleted by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#get-bridge-info").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetBridgeDomain.php',
                {
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
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
                    host : $("#host-default").val(),
                    login : $("#login-default").val(),
                    password : $("#passwd-default").val(),
                    tenant : $("#get-tenant-epg").val()
                },
                function(data){
                    $("#resultat-get-epg").html("<p>"+data+"</p>");

                },
                'text'
        );

        AddClicktoDatabase("ACI");
    });

    $("#verify-exist").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();
        $.post('GetExistTenant.php',
            {
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#passwd-chain").val(),
                tenant : $("#tenant-chain").val()
            },
            function(data){
                $("#resultat-chain-service").html("<p>"+data+"</p>");

            },
            'text'
        );
        AddClicktoDatabase("ACI");
    });

    $("#instance").click(function(e){
        showStuff('qvbn-configuration');
        e.preventDefault();

    });

    $("#demo-long").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();

    });

    $("#start-demo-long").click(function(e){
        showStuff('aci-configuration');
        $('#prevent-windows').hide();
        $('#load-long').show();

        e.preventDefault();

        $.post('CreateChainServices.php',
            {
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#passwd-chain").val(),
                tenant : $("#tenant-chain").val(),
                private : $("#private-network-chain").val(),
                slice : $("#slice-number-chain").val(),
                chain : $("#chain-per-slice-chain").val(),
                numEpg : $("#epg-per-chain").val(),
                bridge : $("#bridge-domain-radical-chain").val(),
                subnet : $("#subnet-bridge-chain").val(),
                physical : $("#physical-domain-chain").val(),
                vlan : $("#vlan-pool-physical-chain").val(),
                profile : $("#profile-epg-chain").val(),
                epg : $("#epg-name-chain").val(),
                aaep : $("#aaep-aaep-chain").val(),
                policy : $("#group-policy-aaep-chain").val(),
                numIntProfile : $("#num-profile-aaep-chain").val(),
                nameIntProfile : $("#profile-name-aaep-chain").val(),
                selector : $("#selector-aaep-chain").val(),
                fromCardNum : $("#from-card-aaep-chain").val(),
                nameCard : $("#name-card-aaep-chain").val(),
                fromPort : $("#from-port-aaep-chain").val(),
                toPort : $("#to-port-aaep-chain").val(),
                nameSwitch : $("#switch-profile-aaep-chain").val(),
                infra : $("#infra-name-aaep-chain").val(),
                srange : $("#start-range-aaep-chain").val()
            },
            function(data){
                $("#resultat-chain-service-long").html("<p>"+data+"</p>");
                $('#load-long').hide();
                $('#start-demo-long').hide();
                $('#comment-demo-long').hide();
                $('#prevent-windows').show();
                $('#start-demo-long-ok').show();
                $('#comment-demo-long-succed').show();
            },
            'text'
        );

        AddActions("ACI", "The demonstration on "+$("#host-chain").val()+" has been launched by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#start-demo-speed").click(function(e){
        showStuff('aci-configuration');
        $('#prevent-windows').hide();
        $('#load-speed').show();

        e.preventDefault();

        $.post('CreateChainServices.php',
            {
                fileName : $("#select-fileName").val()
            },
            function(data){
                $("#windows-chain-service-speed").show();
                $("#resultat-chain-service-speed").html("<p>"+data+"</p>");
                $('#load-speed').hide();
                $('#start-demo-speed').hide();
                $('#comment-demo-speed').hide();
                $('#prevent-windows').show();
                $('#start-demo-speed-ok').show();
                $('#comment-demo-speed-succed').show();
            },
            'text'
        );

        AddActions("ACI", "The demonstration "+$("#select-fileName").val()+" has been launched by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#demo-long").click(function(e){
        e.preventDefault();

        $('#start-demo-long-ok').hide();
        $('#comment-demo-long-succed').hide();
        $('#start-demo-long').show();
        $('#comment-demo-long').show();
    });

    $("#demo-speed").click(function(e){
        e.preventDefault();

        $('#start-demo-speed-ok').hide();
        $('#comment-demo-speed-succed').hide();
        $('#start-demo-speed').show();
        $('#comment-demo-speed').show();
    });

    $("start-demo-long-ok").click(function(e){
        e.preventDefault();

    });

    $("start-demo-speed-ok").click(function(e){
        e.preventDefault();

    });

    $("#save-config-demo").click(function(e){
        showStuff('aci-configuration');
        e.preventDefault();

        $.post('SaveConfigurationDemo.php',
            {
                fileName :$("#name-configuration-save").val(),
                host : $("#host-chain").val(),
                login : $("#login-chain").val(),
                password : $("#passwd-chain").val(),
                tenant : $("#tenant-chain").val(),
                private : $("#private-network-chain").val(),
                slice : $("#slice-number-chain").val(),
                chain : $("#chain-per-slice-chain").val(),
                numEpg : $("#epg-per-chain").val(),
                bridge : $("#bridge-domain-radical-chain").val(),
                subnet : $("#subnet-bridge-chain").val(),
                physical : $("#physical-domain-chain").val(),
                vlan : $("#vlan-pool-physical-chain").val(),
                profile : $("#profile-epg-chain").val(),
                epg : $("#epg-name-chain").val(),
                aaep : $("#aaep-aaep-chain").val(),
                policy : $("#group-policy-aaep-chain").val(),
                numIntProfile : $("#num-profile-aaep-chain").val(),
                nameIntProfile : $("#profile-name-aaep-chain").val(),
                selector : $("#selector-aaep-chain").val(),
                fromCardNum : $("#from-card-aaep-chain").val(),
                nameCard : $("#name-card-aaep-chain").val(),
                fromPort : $("#from-port-aaep-chain").val(),
                toPort : $("#to-port-aaep-chain").val(),
                nameSwitch : $("#switch-profile-aaep-chain").val(),
                infra : $("#infra-name-aaep-chain").val(),
                srange : $("#start-range-aaep-chain").val()
            },
            function(data){
                $("#answer-save-config").html("<p>"+data+"</p>")
            },
            'text'
        );

        AddActions("ACI", "The demonstration on "+$("#host-chain").val()+" has been saved by <?php echo $_SESSION['username'];?>.");
        AddClicktoDatabase("ACI");
    });

    $("#preview-configuration").click(function(e){
        e.preventDefault();
        $.post('PreviewConfiguration.php',
            {
                fileName : $("#select-fileName").val()
            },
            function(data){
                $("#comment-demo-preview").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-fileName").val()+" has been previewed by <?php echo $_SESSION['username'];?>.");

    });

    $("#preview-configuration-suppr").click(function(e){
        e.preventDefault();
        $.post('PreviewConfiguration.php',
            {
                fileName : $("#select-delete-configuration").val()
            },
            function(data){
                $("#comment-demo-preview-suppr").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-delete-configuration").val()+" has been previewed by <?php echo $_SESSION['username'];?>.");

    });

    $("#delete-configuration").click(function(e){
        e.preventDefault();
        $.post('DeleteConfiguration.php',
            {
                fileName : $("#select-delete-configuration").val()
            },
            function(data){
                $("#comment-delete").html("<p>"+data+"</p>");
            },
            'text'
        );

        AddClicktoDatabase("ACI");
        AddActions("ACI", "The configuration "+$("#select-delete-configuration").val()+" has been deleted by <?php echo $_SESSION['username'];?>.");

    });
});

$(function(){
<?php
    $connect=mysql_connect('127.0.0.1','mamorim','cisco') or die('Error'.mysql_error());
    mysql_select_db('API_ENVIRONMENT');
    $reg=mysql_query("select * from engagement");
    $total=mysql_num_rows($reg);
    $reg=mysql_query("select * from engagement where name_engagement='ACI' ");
    $rows=mysql_num_rows($reg);
    echo "var aci=$rows;";
    $reg=mysql_query("select * from engagement where name_engagement='QvBN' ");
    $rows=mysql_num_rows($reg);
    echo "var qvbn=$rows;";
?>
    Morris.Bar({
        element: 'morris-bar-chart-element',
        data: [{
            y: 'from 10/09/14 to today',
            a: aci,
            b: qvbn
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['ACI', 'QvBN'],
        hideHover: 'auto',
        resize: true
    });

});

function AddClicktoDatabase(name) {
    $.post('SqlAddClick.php',
        {
            nameEngagement : name
        },
        'text'
    );
}

function AddActions(name, description){
    $.post('SqlAddActions.php',
        {
            name : name,
            description : description
        },
        'text'
    );
}

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
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Default Configuration Authentification ACI
            </div>
            <div class="panel-body">
                <form role="form" method="post" name="new-epg">
                    <div class="form-group">
                        <label>Name Host</label>
                        <input class="form-control" placeholder="Enter text" name="host" id="host-default">
                        <p class="help-block">IP address : 10.60.9.165</p>
                    </div>
                    <div class="form-group">
                        <label>Login</label>
                        <input class="form-control" placeholder="Enter text" name="login" id="login-default">
                        <p class="help-block">example : admin</p>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-default">
                        <p class="help-block">example : cisco123</p>
                    </div>
                </form>
            </div>
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
                                                <h4>Console</h4>
                                                <p id="resultat-new-epg">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-new-pool-vlan">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-new-physical-domain">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-new-bridge-domain">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-new-tenant">bash>></p>
                                            </div>
                                        </div>
                                        <!-- /.row (nested) -->
                                    <!-- /.panel-body -->
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
                                                <h4>Console</h4>
                                                <p id="resultat-new-aaep">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-del-tenant">bash>></p>
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
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-pool-vlan">bash>></p>
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
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-physical-domain">bash>></p>
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
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-aaep">bash>></p>
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
                                                    <h4>Console</h4>
                                                    <p id="resultat-del-subnet">bash>></p>
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
                                                 <h4>Console</h4>
                                                 <p id="resultat-get-bridge">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-get-epg">bash>></p>
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
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                        <!--/.panel-heading-->
                        <div class="panel-body">
                            <!--Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">Lunch Demonstration</a>
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
                                        <select class="form-control" style="width: 15%;" id="select-fileName">
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
                                                <h4>Console</h4>
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
                                                <h4>Console</h4>
                                                <p id="resultat-chain-service">bash>></p>
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
                                                <h4>Console</h4>
                                                <p id="resultat-chain-service-long">bash>></p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id="messages" class="tab-pane fade">
                                    <h4>Remove</h4>
                                    <div class="form-group">
                                        <label>Select configuration</label>
                                        <select class="form-control" style="width: 15%;" id="select-delete-configuration">
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
                                                <p class="help-block">example : root</p>
                                            </div>

                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter text" name="passwd">
                                                <p class="help-block">example : cisco</p>
                                            </div>

                                            <div class="form-group">
                                                <label>...</label>
                                                <input class="form-control" placeholder="Enter text" name="tenant">
                                                <p class="help-block">example : ...</p>
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
                                                        <img src="load2.gif" style="width: 20%;margin-top: 50%;margin-left: 42%;" alt="Mountain View" id="">
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
                            <p>blabla</p>

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
