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
                    <p class="help-block">example : 100 (It will start at 101)</p>
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
        <select class="form-control" style="width: 15%;">
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
    <button class="btn btn-outline btn-primary btn-lg btn-block" type="button" style="width: 50%; margin-left: 25%; margin-bottom: 1%;">Start Demonstration</button>
    <div class="col-lg-12">
        <div class="well well-sm">
            <h4>Console</h4>
            <p id="resultat-chain-service-long"></p>
            <p id="resultat-chain-service-long1"></p>
            <p id="resultat-chain-service-long2"></p>
            <p id="resultat-chain-service-long3"></p>
            <p id="resultat-chain-service-long4"></p>
            <p id="resultat-chain-service-long5"></p>
        </div>
    </div>
</div>
<div id="profile" class="tab-pane fade">
<div class="col-lg-12">
    <div class="col-lg-6">
        <h4>New demo</h4>
    </div>
    <div class="col-lg-6">
        <input class="form-control" placeholder="Name configuration saved" style="margin-top: 1%; margin-bottom: 1%; width: 27%;" id="name-configuration-save">
    </div>
</div>
<!--/.panel-body-->
<div class="panel-body">
    <div class="col-lg-4">
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
                <input class="form-control" placeholder="Enter text" name="passwd" type="password" id="passwd-chain">
            </div>

            <div class="form-group">
                <label>Tenant</label>
                <input class="form-control" placeholder="Enter text" name="tenant" id="tenant-chain">
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
    <label>(Subnet)</label>
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
    </select>
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
    <p class="help-block">example : 100 (It will start at 101)</p>
</div>


<div class="panel-body">
    <input type="submit" class="btn btn-outline btn-primary btn-lg btn-block" id="demo-long" value="Submit" data-toggle="modal" data-target="#myModaldemolong" />
</div>
<button type="reset" class="btn btn-outline btn-danger">Reset</button>
<input class="btn btn-outline btn-success" style="float: right;" type="submit" value="Save" id="save-config-demo"/>
<p id="answer-save-config"></p>

<!-- Modal -->
<div class="modal fade" id="myModaldemolong" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <img src="load.gif" style="width: 15%;margin-top: 50%;margin-left: 44%;" alt="Mountain View" id="load">
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
        <select class="form-control" style="width: 15%;">
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
    <button class="btn btn-outline btn-danger" type="button" style="width: 50%; margin-left: 25%;">Remove Configuration </button>

</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>