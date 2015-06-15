

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        All Companies
                        <small>advanced tables</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Data tables</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of all Companies</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Company Name</th>
                                                <th>Address</th>
                                                <th>Tel</th>
                                                <th>GST</th>
                                                <th>NTN</th>
                                                <th class="text-center">Edit</th>
                                                <th class="text-center">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(isset($all_co)): ?>
                                        <?php foreach ($all_co as $row):?>
                                            <tr>
                                                <td><?php echo $row->id;?></td>
                                                <td><a href="<?php echo base_url(); ?>index.php/site/co_list/<?php echo $row->id?>/view"><?php echo $row->c_name;?></a></td>
                                                <td><?php echo $row->c_address;?></td>
                                                <td><?php echo $row->c_tel;?></td>
                                                <td><?php echo $row->c_gst;?></td>
                                                <td><?php echo $row->c_ntn;?></td>
                                                <td class="text-center"><a href="<?php echo base_url(); ?>index.php/site/co_list/<?php echo $row->id?>/edit" class="glyphicon glyphicon-pencil"></a></td>
                                                <td class="text-center"><a href="<?php echo base_url(); ?>index.php/site/co_list/<?php echo $row->id?>/delete" class="glyphicon glyphicon-remove"></a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        </tbody>
                                       
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
 <!-- jQuery 2.1.0 -->
              <script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>

        <script src="<?=base_url(); ?>js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>

        <script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script src="<?=base_url(); ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
         <script src="<?=base_url(); ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

        <!-- AdminLTE App -->

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                // $('#example1').dataTable({
                //     "bPaginate": true,
                //     "bLengthChange": false,
                //     "bFilter": false,
                //     "bSort": true,
                //     "bInfo": true,
                //     "bAutoWidth": true,
                //     "aoColumns": [
                //                         null,
                //                         null //put as many null values as your columns

                //     ]
                // });
                $('#example1').dataTable();
                $("#example1_filter").addClass('pull-right');
            });


        </script>