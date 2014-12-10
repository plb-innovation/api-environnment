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