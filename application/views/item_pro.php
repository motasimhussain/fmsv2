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
 foreach ($item_det as $row): 

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
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/edit_item" method="post">
                                    <fieldset>

                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_code">Item code</label>
                                        <div class="col-md-7">
                                        <input disabled id="i_code" name="i_code" value="<?php echo $row->i_code;?>" class="form-control input disabled-md" type="text"  >
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_name">Item Name</label>
                                        <div class="col-md-7">
                                        <input disabled id="i_name" name="i_name" value="<?php echo $row->i_name;?>" class="form-control input disabled-md" type="text" >
                                          
                                        </div>
                                      </div>
                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_cat">Item Category</label>
                                        <div class="col-md-7">
                                        <input disabled id="i_cat" name="i_cat" value="<?php echo $row->i_cat;?>" class="form-control input disabled-md"  type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>
                                      </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_p_price">Purchase Price</label>
                                        <div class="col-md-7">
                                        <input disabled id="i_p_price" name="i_p_price" value="<?php echo $row->i_p_price;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_s_price">Selling Price</label>
                                        <div class="col-md-7">
                                        <input disabled id="i_s_price" name="i_s_price" value="<?php echo $row->i_s_price;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                                                            <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_unit">Unit</label>
                                        <div class="col-md-7">
                                        <input disabled id="i_unit" name="i_unit" value="<?php echo $row->i_unit;?>" class="form-control input disabled-md" type="text">
                                          
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
                                    <input hidden type="text" name="id" value="<?php echo $item_id ?>">
                                  </form>
</section>
</aside>
<?php endforeach; ?>