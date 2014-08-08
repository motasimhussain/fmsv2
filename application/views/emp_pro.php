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
 foreach ($emp_det as $row): 

 $pic=$row->pic;?>

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Employee Profile
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
                                    <h3 class="box-title">Employee Profile</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/edit_usr" method="post">
                                    <fieldset>
          <div class="col-xs-2 col-sm-2  col-md-2  col-lg-2 ">

                <img src="<?php echo $pic; ?>" height="170px" width="130px">
                </div>
          <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="f_name">First name</label>
                                        <div class="col-md-7">
                                        <input disabled id="f_name" name="name" value="<?php echo $row->name;?>" class="form-control input disabled-md" type="text"  >
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="l_name">Last name</label>
                                        <div class="col-md-7">
                                        <input disabled id="l_name" name="l_name" value="<?php echo $row->l_name;?>" class="form-control input disabled-md" type="text" >
                                          
                                        </div>
                                      </div>
                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="fathername">Fathers Name</label>
                                        <div class="col-md-7">
                                        <input disabled id="fathername" name="f_name" value="<?php echo $row->f_name;?>" class="form-control input disabled-md"  type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>
                                      </div>
                                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="desig">Designation</label>
                                        <div class="col-md-7">
                                        <input disabled id="desig" name="desig" value="<?php echo $row->desig;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="pop">Place Of Posting</label>
                                        <div class="col-md-7">
                                        <input disabled id="pop" name="pop" value="<?php echo $row->pop;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                                                            <div class="form-group">
                                        <label class="col-md-4 control-label" for="doj">Date Of Joining</label>
                                        <div class="col-md-7">
                                        <input disabled id="doj" name="doj" value="<?php echo $row->doj;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                        </div>
            <div class="clearfix">
                <hr>
            </div>
                        <div class="clearfix">
                <hr>
            </div>
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        
                                      
                                      <!-- Text input disabled-->
                                      
                                      <!-- Text input disabled-->


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="dob">Date of birth</label>
                                        <div class="col-md-7">
                                        <input disabled id="dob" name="dob" value="<?php echo $row->dob;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="address">Address</label>
                                        <div class="col-md-7">
                                        <input disabled id="address" name="address" value="<?php echo $row->address;?>" class="form-control input disabled-md"  type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="post_address">Postal Address</label>
                                        <div class="col-md-7">
                                        <input disabled id="post_address" name="post_address" value="<?php echo $row->post_address;?>" class="form-control input disabled-md"  type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="qualify">Qualifications</label>
                                        <div class="col-md-7">
                                        <input disabled id="qualify" name="qualify" value="<?php echo $row->qualify;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="exp">Exprience</label>
                                        <div class="col-md-7">
                                        <input disabled id="exp" name="exp" value="<?php echo $row->exp;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="prev_empl">Previous Employers</label>
                                        <div class="col-md-7">
                                        <input disabled id="prev_empl" name="prev_empl" value=" <?php echo $row->prev_empl;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->



                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="doc">Date Of Confirmation</label>
                                        <div class="col-md-7">
                                        <input disabled id="doc" name="doc" value="<?php echo $row->doc;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="p_salary">Present Salary</label>
                                        <div class="col-md-7">
                                        <input disabled id="p_salary" name="p_salary" value="<?php echo $row->p_salary;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="rv_on">Revised On</label>
                                        <div class="col-md-7">
                                        <input disabled id="rv_on" name="rv_on" value="<?php echo $row->rv_on;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>
                                      </div>

          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="inc_due">Increment Due On</label>
                                        <div class="col-md-7">
                                        <input disabled id="inc_due" name="inc_due" value="<?php echo $row->inc_due;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="inc_due_amnt">Amount</label>
                                        <div class="col-md-7">
                                        <input disabled id="inc_due_amnt" name="inc_due_amnt" value="<?php echo $row->inc_due_amnt;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="mar_stat">Marital Status</label>
                                        <div class="col-md-7">
                                        <input disabled id="mar_stat" name="mar_stat" value="<?php echo $row->mar_stat;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="n_depend">No. Of Dependants</label>
                                        <div class="col-md-7">
                                        <input disabled id="n_depend" name="n_depend" value="<?php echo $row->n_depend;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ntk">Next To Kin</label>
                                        <div class="col-md-7">
                                        <input disabled id="ntk" name="ntk" value="<?php echo $row->ntk;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_tel">Contact Tel</label>
                                        <div class="col-md-7">
                                        <input disabled id="c_tel" name="c_tel" value="<?php echo $row->c_tel;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                       <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ref">References</label>
                                        <div class="col-md-7">
                                        <input disabled id="ref" name="ref" value="<?php echo $row->ref;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="comment">Comments</label>
                                        <div class="col-md-7">
                                        <input disabled id="comment" name="comment" value="<?php echo $row->comment;?>" class="form-control input disabled-md" type="text">
                                          
                                        </div>
                                      </div>

                                     

                                      <!-- Text input disabled-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="recc">Reccomendations</label>
                                        <div class="col-md-7">
                                        <input disabled id="recc" name="recc" value="<?php echo $row->recc;?>" class="form-control input disabled-md" type="text">
                                          
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
                                    <input hidden type="text" name="id" value="<?php echo $emp_id ?>">
                                  </form>
</section>
</aside>
<?php endforeach; ?>