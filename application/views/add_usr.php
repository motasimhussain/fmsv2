<!--Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add User
                        <small>Preview</small>
                    </h1>
                    <!-- <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol> -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        </div><!--/.col (left) -->
                        <!-- right column -->

                        <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Add User</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                  <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/add_usr" method="post">
                                    <fieldset>

                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        
                                      
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="username">Username</label>
                                        <div class="col-md-7">
                                        <input id="username" name="username" placeholder="Enter Username" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Password input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="password">Password</label>
                                        <div class="col-md-7">
                                          <input id="password" name="password" placeholder="Enter Password" class="form-control input-md" type="password">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="f_name">First name</label>
                                        <div class="col-md-7">
                                        <input id="f_name" name="name" placeholder="Enter First name" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="l_name">Last name</label>
                                        <div class="col-md-7">
                                        <input id="l_name" name="l_name" placeholder="Enter Last name" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="fathername">Fathers Name</label>
                                        <div class="col-md-7">
                                        <input id="fathername" name="f_name" placeholder="Fathers Name" class="form-control input-md" required type="text">
                                        <span class="help-block"> </span>
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="dob">Date of birth</label>
                                        <div class="col-md-7">
                                        <input id="dob" name="dob" placeholder="Enter Date of Birth" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="address">Address</label>
                                        <div class="col-md-7">
                                        <input id="address" name="address" placeholder="Address" class="form-control input-md" required type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="post_address">Postal Address</label>
                                        <div class="col-md-7">
                                        <input id="post_address" name="post_address" placeholder="Postal Address" class="form-control input-md"  type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="qualify">Qualifications</label>
                                        <div class="col-md-7">
                                        <input id="qualify" name="qualify" placeholder="Qualification" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="exp">Exprience</label>
                                        <div class="col-md-7">
                                        <input id="exp" name="exp" placeholder="Exprience" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="prev_empl">Previous Employers</label>
                                        <div class="col-md-7">
                                        <input id="prev_empl" name="prev_empl" placeholder="Previous Employers" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="doj">Date Of Joining</label>
                                        <div class="col-md-7">
                                        <input id="doj" name="doj" placeholder="Date Of Joining" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="doc">Date Of Confirmation</label>
                                        <div class="col-md-7">
                                        <input id="doc" name="doc" placeholder="Date Of Confirmation" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="desig">Designation</label>
                                        <div class="col-md-7">
                                        <input id="desig" name="desig" placeholder="Designation" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      </div>    <!-- END A COLUMN -->

                                      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        
                                      
                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="pop">Place Of Posting</label>
                                        <div class="col-md-7">
                                        <input id="pop" name="pop" placeholder="Place Of Posting" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="p_salary">Present Salary</label>
                                        <div class="col-md-7">
                                        <input id="p_salary" name="p_salary" placeholder="Present Salary" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="rv_on">Revised On</label>
                                        <div class="col-md-7">
                                        <input id="rv_on" name="rv_on" placeholder="Revised On" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="inc_due">Increment Due On</label>
                                        <div class="col-md-7">
                                        <input id="inc_due" name="inc_due" placeholder="Increment Due On" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="inc_due_amnt">Amount</label>
                                        <div class="col-md-7">
                                        <input id="inc_due_amnt" name="inc_due_amnt" placeholder="Amount" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="mar_stat">Marital Status</label>
                                        <div class="col-md-7">
                                        <input id="mar_stat" name="mar_stat" placeholder="Marital Status" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="n_depend">No. Of Dependants</label>
                                        <div class="col-md-7">
                                        <input id="n_depend" name="n_depend" placeholder="No. Of Dependants" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>


                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ntk">Next To Kin</label>
                                        <div class="col-md-7">
                                        <input id="ntk" name="ntk" placeholder="Next To Kin" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_tel">Contact Tel</label>
                                        <div class="col-md-7">
                                        <input id="c_tel" name="c_tel" placeholder="Contact Tel" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                       <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ref">References</label>
                                        <div class="col-md-7">
                                        <input id="ref" name="ref" placeholder="References" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="comment">Comments</label>
                                        <div class="col-md-7">
                                        <input id="comment" name="comment" placeholder="Comments" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                     

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="recc">Reccomendations</label>
                                        <div class="col-md-7">
                                        <input id="recc" name="recc" placeholder="Reccomendations" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      </div>

                                    </fieldset>

                                    <div class="row">
                                    <fieldset>
                                      <div class="form-group">
                                        <label class="control-label col-md-3" for="is_admin">Is Admin?</label>
                                        <div class="col-md-7">
                                          <label class="checkbox-inline" for="is_admin-0">
                                            <input name="is_admin" id="is_admin-0" value="1" type="checkbox">
                                          </label>
                                        </div>
                                        <button id="add_usr" name="add_usr" class="btn btn-primary">Create</button>
                                      </div>

                                    </fieldset>
                                    </div>
                                  </form>

<?php echo form_open_multipart('upload/do_upload','class="form-horizontal"');?>
<div class="box-header">
<fieldset>

<!-- Form Name -->
<legend>Add User Display Picture</legend>

<!-- File Button -->
<div class="form-group">
  

    <label class="col-md-4 control-label" for="userfile">Choose a picture</label>
  <div class="col-md-7">
    <input type="file" id="userfile" name="userfile" size="20" class="input-file col-md-7" required/>
  </div>

</div>

<div class="form-group">

  <label class="col-md-4 control-label" for="selectUser">Image for</label>
  <div class="col-md-4">
  <select id="selectUser" name="user_id" class="form-control col-md-7">
  <?php foreach($names as $row): ?>
  <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
  <?php endforeach; ?>
  </select>
  </div>
   <input  type="submit" value="upload" class="btn btn-success" />
</div>

</fieldset>
</div>
<?php form_close(); ?>



</div>

</div>





</div><!-- /.box-body -->
</div><!-- /.box -->
</div>
</div> <!-- /.row -->
</section><!-- /.content -->
</aside><!-- /.right-side