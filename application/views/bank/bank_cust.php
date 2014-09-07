<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                   <h1>
                        Bank
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                                    <h3 class="box-title">Customer Voucher</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/bank_cust" method="post">
                                      <fieldset>

                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="b_id">Bank:</label>
                                        <div class="col-md-4">
                                            <select id="b_id" name="b_id" class="form-control">
                                               <?php foreach($select_bank as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->b_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        </div>

                                       <div class="form-group">
                                        <label class="col-md-4 control-label" for="c_id">Customer:</label>
                                        <div class="col-md-4">
                                            <select id="c_id" name="c_id" class="form-control">
                                                <?php foreach($select_company as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        </div>


                                       <div class="form-group">
                                            <label class="col-md-4 control-label" for="ref_num">Reference #</label>  
                                            <div class="col-md-4">
                                                <input readonly id="ref_num" name="ref_num" placeholder="Reference #" class="form-control input-md input-disabled" type="text" value="<?php echo $v_serial; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="trans_type">Transaction type:</label>
                                            <div class="col-md-4">
                                                <select id="trans_type" name="trans_type" class="form-control">
                                                    <option value="debit">Debit</option>
                                                    <option value="credit">Credit</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="date">Date (Cheque Recieved)</label>
                                            <div class="col-md-4" >
                                                <input id="pickdate" name="date" placeholder="" required class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="ch_num">Cheque Number:</label>  
                                        <div class="col-md-4">
                                        <input id="ch_num" name="ch_num" placeholder="Cheque Number" class="form-control input-md" type="text">
                                          
                                        </div>
                                      </div>

                                      <div class="form-group">
                                            <label class="col-md-4 control-label" for="c_date">Date (Cheque Date)</label>
                                            <div class="col-md-4" >
                                                <input id="pickdate1" name="c_date" placeholder="" required class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="amnt">Amount:</label>  
                                        <div class="col-md-4">
                                        <input id="amnt" name="amnt" placeholder="Amount" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                        <div class="form-group">
                                        <label class="col-md-4 control-label" for="desc">Description:</label>  
                                        <div class="col-md-4">
                                        <input id="desc" name="desc" placeholder="Description" class="form-control input-md" type="text" required>
                                          
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