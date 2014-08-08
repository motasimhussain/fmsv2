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
 foreach ($bank_det as $row): 

;?>

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Bank Profile
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
                                    <h3 class="box-title">Bank Profile</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/edit_bank" method="post">
                                    <fieldset>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="b_name">Bank Name</label>
                                        <div class="col-md-7">
                                        <input disabled id="b_name" name="b_name" value="<?php echo $row->b_name;?>" class="form-control input disabled-md" type="text"  >
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="b_address">Bank Address</label>
                                        <div class="col-md-7">
                                        <input disabled id="b_address" name="b_address" value="<?php echo $row->b_address;?>" class="form-control input disabled-md" type="text" >
                                          
                                        </div>
                                      </div>
                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="acc_num">Account #</label>
                                        <div class="col-md-7">
                                        <input disabled id="acc_num" name="acc_num" value="<?php echo $row->acc_num;?>" class="form-control input disabled-md"  type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>
                                      </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="b_tel">Bank Tel #</label>
                                        <div class="col-md-7">
                                        <input disabled id="b_tel" name="b_tel" value="<?php echo $row->b_tel;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="owner">Account Holder</label>
                                        <div class="col-md-7">
                                        <input disabled id="owner" name="owner" value="<?php echo $row->owner;?>" class="form-control input disabled-md" type="text">
                                        </div>
                                      </div>
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
                                    <input hidden type="text" name="id" value="<?php echo $bank_id ?>">
                                  </form>
</section>
</aside>
<?php endforeach; ?>