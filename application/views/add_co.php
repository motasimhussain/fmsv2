<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add Company
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol>
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
                                    <h3 class="box-title">Add Company</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url(); ?>index.php/form_process/add_co" method="post" class="form-horizontal">
                                        <fieldset>
                                        
                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="textinput">Company Name</label>  
                                          <div class="col-md-4">
                                          <input id="textinput" name="c_name" placeholder="Company Name" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="c_address">Company Address</label>  
                                          <div class="col-md-4">
                                          <input id="c_address" name="c_address" placeholder="Address" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="c_tel">Tel/Fax #</label>  
                                          <div class="col-md-4">
                                          <input id="c_tel" name="c_tel" placeholder="Tel/Fax" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="c_gst">GST #</label>  
                                          <div class="col-md-4">
                                          <input id="c_gst" name="c_gst" placeholder="GST #" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="c_ntn">NTN</label>  
                                          <div class="col-md-4">
                                          <input id="c_ntn" name="c_ntn" placeholder="NTN" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="op_bal">Opening Balance</label>  
                                          <div class="col-md-4">
                                          <input id="op_bal" name="op_bal" placeholder="Opening Balance" class="form-control input-md" type="text" required>
                                            
                                          </div>
                                          <div class="col-md-2">
                                            <select id="op_bal_type" name="op_bal_type" class="form-control">
                                                <option value="purchase">Credit</option>
                                                <option value="sales">Debit</option>
                                            </select>
                                          </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="singlebutton"></label>
                                          <div class="col-md-4">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="sumbit">Add</button>
                                          </div>
                                        </div>

                                        </fieldset>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->