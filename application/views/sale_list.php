<script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>
<script src="<?=base_url(); ?>js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>
<link href="<?php echo base_url(); ?>css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<script src="<?=base_url(); ?>js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<style type="text/css" media="print">
    .table{
        font-size: 14px;
        text-align: center;
    }
    .table>thead>tr>th{
        text-align: center;
    }
    .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
        padding: 1px;
    }

    .table>thead {display: table-header-group;}

</style>


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/sale_list">

            <ul class="list-inline">
                <li><label class="control-label" for="reservation">Pick Date</label></li>
                <li>
                  <input readonly type="text" class="form-control getLedger" id="reservation" name="set_date" style="width:10em;">
                </li>
                <li>
                  <button class="btn btn-success" value="submit">Generate</button>
                </li>
            
            </ul>
          
        </form>
        <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol> -->
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            </div><!--/.col (left) -->
            <!-- right column -->

            <!-- general form elements  -->
                <div class="">
                    <div class="box-header">
                        <img src="<?=base_url() ?>img/pjic.png" style="padding-left:30px;">
                        <?php 
                            $phpdate = strtotime($this->session->userdata('st_date'));
                            $mysqldate = date( 'F , Y', $phpdate );
                        ?>
                        <h3 class="box-title pull-right goup" style="display:block-inline; padding-right:30px; margin-top:10px;">Sale <small><?php echo $mysqldate; ?></small></h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>NTN #</th>
                                <th>SALES TAX REGISTRATION</th>
                                <th>PARTY NAME</th>
                                <th>INVOICE NO</th>
                                <th>INVOICE DATE</th>
                                <th>EXCLUDING VALUE</th>
                                <th>SALES TAX 17%</th>
                                <th>WITHOLDING TAX 20%</th>
                                <th>INCLUDING VALUE</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            if ($sale_table != false):
                                $num = 1;
                                $excl_val = 0;
                                $stot = 0;
                                $wht = 0;
                                $tot = 0;
                                foreach($sale_table as $row): 
                        ?>
                            <tr>
                                <td><?php echo $num; ?></td>
                                <td><?php echo $row->c_ntn; ?></td>
                                <td><?php echo $row->c_gst; ?></td>
                                <td><?php echo $row->c_name; ?></td>
                                <td><?php echo $row->serial; ?></td>
                                <td><?php echo $row->date; ?></td>
                                <td><?php echo abs($row->amnt); $excl_val+= abs($row->amnt); ?></td>
                                <td><?php echo $row->sales_tax_tot; $stot += $row->sales_tax_tot; ?></td>
                                <td><?php echo (($row->sales_tax_tot/100)*20); $wht += (($row->sales_tax_tot/100)*20);?></td>
                                <td><?php echo abs($row->tot_amnt); $tot += abs($row->tot_amnt); ?></td>
                            </tr>
                        <?php
                                $num++;
                                endforeach;
                            endif; 
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><b>TOTAL SALE AMOUNT</b></td>
                                <td></td>
                                <td></td>
                                <td><b><?php if(isset($excl_val)){echo $excl_val;} ?></b></td>
                                <td><b><?php if(isset($excl_val)){echo $stot;} ?></b></td>
                                <td><b><?php if(isset($excl_val)){echo $wht;} ?></b></td>
                                <td><b><?php if(isset($excl_val)){echo $tot;} ?></b></td>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
    </section>
</aside>

<script type="text/javascript">
            $(function() {

                //Date range picker
                $('#reservation').daterangepicker({format: 'YYYY-MM-DD'});
            });

            // $(function() {
            //     $( "#reservation" ).datepicker({ dateFormat: "yy-mm-dd" });
            // });
</script>
