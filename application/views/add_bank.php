<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Add Bank
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
                                    <h3 class="box-title">Add Bank</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form action="<?php echo base_url(); ?>index.php/form_process/add_bank" method="post" class="form-horizontal">
                                        <fieldset>
                                        
                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="b_name">Bank Name</label>  
                                          <div class="col-md-4">
                                          <input id="b_name" name="b_name" placeholder="Bank Name" class="form-control input-md" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="b_address">Bank Address</label>  
                                          <div class="col-md-4">
                                          <input id="b_address" name="b_address" placeholder="Address" class="form-control input-md" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="b_tel">Tel/Fax #</label>  
                                          <div class="col-md-4">
                                          <input id="b_tel" name="b_tel" placeholder="Tel/Fax" class="form-control input-md" type="text" >
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="acc_num">Account #</label>  
                                          <div class="col-md-4">
                                          <input id="acc_num" name="acc_num" placeholder="Account Number" class="form-control input-md" type="text" >
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="owner">Account Holder</label>  
                                          <div class="col-md-4">
                                          <input id="owner" name="owner" placeholder="Account Holder" class="form-control input-md" type="text" >
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="op_bal">Opening Balance</label>  
                                          <div class="col-md-4">
                                          <input id="op_bal" name="op_bal" placeholder="Opening Balance" class="form-control input-md" type="text" >
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