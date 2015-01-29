<?php
/**
 * Created by PhpStorm.
 * User: Amorim
 * Date: 29/01/2015
 * Time: 11:15
 */

session_start();

if($_SESSION['username']){

}else header("Location:login.php");

?>

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
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
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
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </li>
                <li><a  href="index.php" ><i class="fa fa-dashboard fa-fw"></i> Dashboard<span class="fa arrow"></span></a></li>

                <li><a href="aci-configuration.php"><i class="fa fa-tasks fa-fw" id="menu-aci"></i>  ACI<span class="fa arrow"></span></a></li>

                <li><a href="qvbn-configuration.php"><i class="fa fa-tasks fa-fw" id="menu-qvbn"></i>  QvBN<span class="fa arrow"></span></a></li>

                <li><a href="vlans-configuration.php"><i class="fa fa-sitemap fa-fw" id="menu-vlan"></i>  Vlan Services<span class="fa arrow"></span></a></li>

                <li><a href="term-configuration.php" ><i class="fa fa-bar-chart-o fa-fw" id="menu-term"></i>  Console Services<span class="fa arrow"></span></a></li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>