<style type="text/css">
@media print {
  a[href]:after {
    content: none !important;
  }
}
</style>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        All Banks
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
                                    <h3 class="box-title">List of all Banks</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Bank Name</th>
                                                <th>Account #</th>
                                                <th>Address</th>
                                                <th>Tel</th>
                                                <th>Account Holder</th>
                                                <th class="text-center no-print">Edit</th>
                                                <th class="text-center no-print">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($all_bank as $row):?>
                                            <tr>
                                                <td><?php echo $row->id;?></td>
                                                <td><a href="<?php echo base_url(); ?>index.php/site/b_list/<?php echo $row->id?>/view"><?php echo $row->b_name;?></a></td>
                                                <td><?php echo $row->acc_num;?></td>
                                                <td><?php echo $row->b_address;?></td>
                                                <td><?php echo $row->b_tel;?></td>
                                                <td><?php echo $row->owner;?></td>
                                                <td class="text-center no-print"><a href="<?php echo base_url(); ?>index.php/site/b_list/<?php echo $row->id?>/edit" class="glyphicon glyphicon-pencil"></a></td>
                                                <td class="text-center no-print"><a href="<?php echo base_url(); ?>index.php/site/b_list/<?php echo $row->id?>/delete" class="glyphicon glyphicon-remove"></a></td>
                                            </tr>
                                            <?php endforeach; ?>
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
                $('#example1').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true,
                    "aoColumns": [
                                        null,
                                        null //put as many null values as your columns

                    ]
                });
                $("#example1_filter").addClass('pull-right');
            });


        </script>