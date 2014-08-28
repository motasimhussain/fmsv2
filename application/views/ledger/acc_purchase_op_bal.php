<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                   <h1>
                        Purchase Opening Balance
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
                                    <h3 class="box-title">Opening Balance</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/acc_purchase_op_bal" method="post">
                                      <fieldset>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="pay_type">Balance type:</label>
                                            <div class="col-md-4">
                                                <select id="pay_type" name="pay_type" class="form-control">
                                                  <option value="debit">Debit</option>
                                                  <option value="credit">Credit</option>
                                                </select>
                                            </div>
                                        </div>

                                       <div class="form-group">
                                        <label class="col-md-4 control-label" for="cmp_name">Company:</label>
                                        <div class="col-md-4">
                                            <select id="cmp_name" name="cmp_name" class="form-control">
                                                <?php foreach($select_company as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="tot_amnt">Amount:</label>  
                                          <div class="col-md-4">
                                            <input id="tot_amnt" name="tot_amnt" placeholder="Amount" class="form-control input-md" type="text" required>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="dscr">Description:</label>  
                                          <div class="col-md-4">
                                            <input id="dscr" name="dscr" placeholder="Description" class="form-control input-md" type="text" required>
                                          </div>
                                        </div>

                                     <div class="form-group">
                                        <label class="col-md-4 control-label" for="apply"></label>
                                        <div class="col-md-4">
                                          <button id="apply" name="apply" class="btn btn-primary" type="sumbit">Save</button>
                                        </div>
                                      </div>
                                      </div>


                                      </fieldset>
                                      </form>
                                      </div>
                                      </div>
                                      </section>
                                      </aside>