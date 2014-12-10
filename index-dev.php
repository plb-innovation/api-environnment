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
                    <a  onclick="showStuff('dashboard.php')" ><i class="fa fa-dashboard fa-fw"></i> Dashboard<span class="fa arrow"></span></a>
                </li>
                <li>
                    <a onclick="showStuff('aci-configuration.php')"><i class="fa fa-bar-chart-o fa-fw" id="menu-aci"></i>  ACI<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a onclick="showStuff('qvbn-configuration.php')"><i class="fa fa-bar-chart-o fa-fw" id="menu-qvbn"></i>  QvBN<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>

                <li>
                    <a href="index.php"><i class="fa fa-bar-chart-o fa-fw" id="menu-csr"></i> CSR<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="index.php"><i class="fa fa-bar-chart-o fa-fw" id="menu-ucs"></i> UCS<span class="fa arrow"></span></a>
                    <!-- /.nav-second-level -->
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">

    <div id="includedContent"></div>

<script>

function WindowsInit() {
    $("#includedContent").load("dashboard.php");
    alert('plop3');
}

function showStuff(id) {
    $("#includedContent").load(id);


    if(id == "aci-configuration.php" ){

        $('.subbox').hide();
        $('#load').hide();
        $('#start-demo-long-ok').hide();
        $('#comment-demo-long-succed').hide();
        $('#progression-bar-demo-long').hide();
        $('div[name=dataTablesGetBridge]').hide();
        AddClicktoDatabase("ACI");
    }

    if(id == "qvbn-configuration.php" ){
        AddClicktoDatabase("QvBN");
    }

    if(id == "ucs-configuration.php" ){
        AddClicktoDatabase("UCS");
    }

    if(id == "csr-configuration.php" ){
        AddClicktoDatabase("CSR");
    }
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


$("#includedContent").load("dashboard.php");

$(document).ready(function(){
    alert('plop1');
    $("#includedContent").load("dashboard.php");
    alert('plop2');
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

        AddActions("ACI", "Tenant "+$("#tenant").val()+" has been created.");
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

        AddActions("ACI", "Bridge "+$("#bridge-domain-bridge").val()+" has been created");
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

        AddActions("ACI", "Physical Domain "+$("#physical-domain-physical").val()+" has been created.");
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

        AddActions("ACI", "Pool Vlans "+$("#vlan-pool-vlan").val()+" has been created.");
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

        AddActions("ACI", "EPG "+$("#epg-epg").val()+" has been created.");
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

        AddActions("ACI", "AAEP "+$("#aaep-aaep").val()+" has been created.");
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

        AddActions("ACI", "Tenant "+$("#del-tenant-tenant").val()+" has been deleted.");
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

        AddActions("ACI", "Pool Vlan "+$("#del-vlan-pool-vlan").val()+" has been deleted.");
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

        AddActions("ACI", "Physical Domain "+$("#del-physical-physical-domain").val()+" has been deleted.");
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

        AddActions("ACI", "Subnet "+$("#del-subnet-subnet").val()+" has been deleted.");
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
        $('#load').show();

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
                $('#load').hide();
                $('#start-demo-long').hide();
                $('#comment-demo-long').hide();
                $('#prevent-windows').show();
                $('#start-demo-long-ok').show();
                $('#comment-demo-long-succed').show();
            },
            'text'
        );

        AddActions("ACI", "The demonstration to"+$("#host-chain").val()+" has been lunched on Tenant"+$("#tenant-chain").val());
    });

    $("#demo-long").click(function(e){
        e.preventDefault();

        $('#start-demo-long-ok').hide();
        $('#comment-demo-long-succed').hide();
        $('#start-demo-long').show();
        $('#comment-demo-long').show();
    });

    $("start-demo-long-ok").click(function(e){
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

        AddActions("ACI", "The demonstration to"+$("#host-chain").val()+" has been saved");
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
            b: qvbn,
            c: 1,
            d: 1
        }],
        xkey: 'y',
        ykeys: ['a', 'b','c','d'],
        labels: ['ACI', 'QvBN','UCS','CSR'],
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

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
