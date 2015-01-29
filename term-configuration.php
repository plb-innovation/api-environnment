<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 29/01/2015
 * Time: 13:05
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/index.js"></script>

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