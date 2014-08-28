
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


                   <!--  Usage: 
                    $status =  GetServerStatus('http://domain.com',80)
                    or
                    $status =  GetServerStatus('IPAddress',80) -->
                    

                   <?php 
                   /*
                    function GetServerStatus($site, $port){
                        $status = array("OFFLINE", "ONLINE");
                        $fp = @fsockopen($site, $port, $errno, $errstr, 2);
                        if (!$fp) {
                            return $status[0];
                        } else 
                          { return $status[1];}
                    } 
                    */
                    ?> 

                <div class="row">

                    <div class="col-md-2 col-lg-2"></div>

                    <div class="col-md-3 col-lg-3 bg-aqua">
                        <h3>Local Server</h3>
                        <h4>Online</h4>
                        <div class="icon" style="text-align:center; font-size:70px;">
                            <i class="ion ion-refreshing"></i>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2"></div>

                    <div class="col-md-3 col-lg-3 bg-red">
                        <h3>Master Server</h3>
                        <h4>Offline</h4>
                        <div class="icon" style="text-align:center; font-size:70px;">
                            <i class="ion ion-close-circled"></i>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2"></div>

                </div>
                <div class="row">&nbsp;</div>
                <section class="col-lg-6 connectedSortable"> 
                    <div class="box box-danger" id="loading-example">
                        <div class="box-header">
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                            <i class="fa fa-warning"></i>

                            <h3 class="box-title">Near Credit Limit</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="row">
                                <div class="text-center">
                                
                                <?php if(isset($limit)){foreach ($limit as $row=>$crd_limit): ?>
                                    <ul class="list-inline">
                                    <li class="alert alert-info" style="padding:5px; margin-bottom:5px;">Credit limit reached for <?php echo $crd_limit["company"] ?></li>
                                    <li class="alert alert-info" style="padding:5px; margin-bottom:5px;">Current Limit:  <?php echo $crd_limit["limit"] ?></li>
                                    <li class="alert alert-danger" style="padding:5px; margin-bottom:5px;">Current Credit:  <?php echo $crd_limit["credit"] ?></li>
                                    </ul>
                                <?php endforeach;} ?>
                                
                                </div>
                            </div><!-- /.row - inside box -->
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <!-- //////////////////////////////////////////////////////////////////////////////////// -->
                            </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->        
                </section>

                <section class="col-lg-6 connectedSortable"> 
                    <div class="box box-danger" id="loading-example">
                        <div class="box-header">
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button class="btn btn-danger btn-sm refresh-btn" data-toggle="tooltip" title="Reload"><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-danger btn-sm" data-widget='collapse' data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-danger btn-sm" data-widget='remove' data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                            <i class="fa fa-bar-chart-o"></i>

                            <h3 class="box-title">Cheques Near Due</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="row">
                                
                                
                            </div><!-- /.row - inside box -->
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
                            </div><!-- /.row -->
                        </div><!-- /.box-footer -->
                    </div><!-- /.box -->        
                </section>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->