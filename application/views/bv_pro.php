         <script src="<?=base_url(); ?>js/jquery-2.1.0.min.js"></script>
                 <script src="<?=base_url(); ?>js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>

        <script src="<?=base_url(); ?>js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?=base_url(); ?>js/AdminLTE/app.js" type="text/javascript"></script>


 <?php
 if(!isset($action))
$action = "view";
if($action == "edit"):
    ?>

<script type="text/javascript">
$(function(){
    $("input[type=text]").removeAttr('disabled');

});
</script>
<?php
endif;
 foreach ($bv_det as $row): 

;?>

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Item Profile
                        <small>Preview</small>
                    </h1>
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
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Item Profile</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/edit_bv" method="post">
                                    <fieldset>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ref_num">Ref #</label>
                                        <div class="col-md-7">
                                        <input disabled id="ref_num" name="ref_num" value="<?php echo $row->ref_num;?>" class="form-control input disabled-md" type="text"  >
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="b_id">Bank ID</label>
                                        <div class="col-md-7">
                                        <input disabled id="b_id" name="b_id" value="<?php echo $row->b_id;?>" class="form-control input disabled-md" type="text" >
                                          
                                        </div>
                                      </div>
                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_id">Company ID</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_id" name="c_id" value="<?php echo $row->c_id;?>" class="form-control input disabled-md"  type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ch_num">Cheque #</label>
                                        <div class="col-md-7">
                                        <input disabled id="ch_num" name="ch_num" value="<?php echo $row->ch_num;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                    </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="trans_type">Transaction Type</label>
                                        <div class="col-md-7">
                                        <input disabled id="trans_type" name="trans_type" value="<?php echo $row->trans_type;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="date">Date</label>
                                        <div class="col-md-7">
                                        <input disabled id="pickdate" name="date" value="<?php echo $row->date;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                  

                                      <div class="form-group">
                                            <label class="col-md-4 control-label" for="desc">Description</label>
                                            <div class="col-md-7">
                                            <input disabled id="desc" name="desc" value="<?php echo $row->desc;?>" class="form-control input disabled-md" type="text">
                                              
                                            </div>
                                      </div>


                                      <div class="form-group">
                                            <label class="col-md-4 control-label" for="amnt">Amount</label>
                                            <div class="col-md-7">
                                            <input disabled id="amnt" name="amnt" value="<?php echo $row->amnt;?>" class="form-control input disabled-md" type="text">
                                              
                                            </div>
                                      </div>
                                </div>

                      </div>

                                        <div class="clearfix">
                                            <hr>
                                        </div>

                                    </fieldset>


<?php if($action == "edit"):
?>
                                    <div class="row">
                                    <fieldset>
                                       <div class="form-group">
                                          <div class="col-md-2 pull-right">
                                            <button type="sumbit" class="btn btn-primary" name="singlebutton" id="singlebutton">Add</button>
                                          </div>
                                        </div>

                                    </fieldset>
                                <?php endif;?>
                                    </div>
                                    <input hidden type="text" name="id" value="<?php echo $bv_id ?>">
                                  </form>
                                  </div>
</section>
</aside>
<?php endforeach; ?>

<script type="text/javascript">
            $(function() {

                //Date range picker
                $( "#pickdate" ).datepicker({ dateFormat: "yy-mm-dd" });
            });

            // $(function() {
            //     $( "#reservation" ).datepicker({ dateFormat: "yy-mm-dd" });
            // });
</script>