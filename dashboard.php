<div class="box" id="dashboard">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>

    <div class="col-lg-12" >
        <div class="well well-sm">
            <p>The management interface APIs has been developed by the Innovation EPN team . They include a set of application programming interfaces in order to facilitate their use. They are available for another use and can be integrated into an application. You will find the APIs for the ACI and QvBN. These APIs were developed and built on this site. You can use some or all of the APIs of the site. Do not use abusive. These actions need heavy resource allocations.</p>
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
                <div class="panel-footer" onclick="showStuff('aci-configuration.php')">
                    <span class="pull-left" onclick="showStuff('aci-configuration.php')" >View Details</span>
                    <span class="pull-right" onclick="showStuff('aci-configuration.php')"><i class="fa fa-arrow-circle-right"></i></span>
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
                        <div class="huge" onclick="showStuff('qvbn-configuration.php')">QvBN</div>
                        <div>Configuration</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer" onclick="showStuff('qvbn-configuration.php')">
                    <span class="pull-left" onclick="showStuff('qvbn-configuration.php')">View Details</span>
                    <span class="pull-right" onclick="showStuff('qvbn-configuration.php')"><i class="fa fa-arrow-circle-right"></i></span>
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


    <div class="col-lg-8">
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

    <div class="col-lg-4">
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

