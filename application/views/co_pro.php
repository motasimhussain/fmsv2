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
 foreach ($co_det as $row): 

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
                                    <h3 class="box-title">Company Profile</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/edit_co" method="post">
                                    <fieldset>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_name">Company Name</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_name" name="c_name" value="<?php echo $row->c_name;?>" class="form-control input disabled-md" type="text"  >
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_address">Company Address</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_address" name="c_address" value="<?php echo $row->c_address;?>" class="form-control input disabled-md" type="text" >
                                          
                                        </div>
                                      </div>
                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_tel">Company Tel</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_tel" name="c_tel" value="<?php echo $row->c_tel;?>" class="form-control input disabled-md"  type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>
                                      </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_gst">GST#</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_gst" name="c_gst" value="<?php echo $row->c_gst;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_ntn">NTN #</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_ntn" name="c_ntn" value="<?php echo $row->c_ntn;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                                                            <div class="form-group">
                                        <label class="col-md-4 control-label" for="crd_limit">Credit Limit</label>
                                        <div class="col-md-7">
                                        <input disabled id="crd_limit" name="crd_limit" value="<?php echo $row->crd_limit;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                  </div>

                                        <div class="clearfix">
                                            <hr>
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
                                    <input hidden type="text" name="id" value="<?php echo $co_id ?>">
                                  </form>
</section>
</aside>
<?php endforeach; ?>