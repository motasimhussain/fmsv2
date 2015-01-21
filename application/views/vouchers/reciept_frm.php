<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <ul class="list-inline">
            <li><h3 style="margin-top: 0px;margin-bottom: 0px;">Add Reciept Voucher</h3></li>
            <li class="pull-right"><a class="btn btn-success" href="<?php echo base_url(); ?>index.php/site/reciept_list"><span class="fa fa-print"></span> Print Voucher</a></li>
        </ul>
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
                        <h3 class="box-title">Add Reciept Voucher</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <form action="<?php echo base_url(); ?>index.php/form_process/add_rv" method="post" class="form-horizontal">
                            <fieldset>
                            
                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="cust_id">Customer</label>
                              <div class="col-md-4">
                                  <select id="cust_id" name="cust_id" class="form-control">
                                      <?php foreach($select_company as $row): ?>
                                      <option value="<?php echo $row->id; ?>"<?php if(isset($cust_id)){if($row->id == $cust_id){echo " selected";}}?>><?php echo $row->c_name; ?></option>
                                      <?php endforeach; ?>
                                  </select>
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="pay_type">Payment Mode</label>  
                              <div class="col-md-4">
                                <select id="pay_type" name="pay_type" class="form-control">
                                  <option>Cheque</option>
                                  <option>Cash</option>
                                  <option>Online</option>
                                </select>
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="description">Amount</label>  
                              <div class="col-md-4">
                              <textarea id="description" name="description" placeholder="Description" class="form-control" ></textarea>  
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="amnt">Amount</label>  
                              <div class="col-md-4">
                              <input id="amnt" name="amnt" placeholder="Amount" class="form-control input-md" type="text" >
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="income_tax">Income Tax %</label>  
                              <div class="col-md-4">
                              <input id="income_tax" name="income_tax" placeholder="Income Tax %" value="4" class="form-control input-md" type="text" >
                              
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="witholding_tax">Witholding Tax %</label>  
                              <div class="col-md-4">
                              <input id="witholding_tax" name="witholding_tax" placeholder="Witholding Tax %" value="20" class="form-control input-md" type="text" >
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="inc_t_amnt">Income Tax Amount</label>  
                              <div class="col-md-4">
                              <input id="inc_t_amnt" name="inc_t_amnt" readonly="" placeholder="" class="form-control input-md" type="text" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="wit_t_amnt">Witholding Tax Amount</label>  
                              <div class="col-md-4">
                              <input id="wit_t_amnt" name="wit_t_amnt" readonly="" placeholder="" class="form-control input-md" type="text" >
                              </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="singlebutton"></label>
                              <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary pull-right" type="sumbit">Add</button>
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


<script type="text/javascript">
(function(){
  

  amnt.onkeyup = function(){
    var amnt = document.getElementById('amnt');
    var income_tax = document.getElementById('income_tax');
    var witholding_tax = document.getElementById('witholding_tax');
    var inc_t_amnt = document.getElementById('inc_t_amnt');
    var wit_t_amnt = document.getElementById('wit_t_amnt');

    inc_t_amnt.value = ((amnt.value/100)*income_tax.value).toFixed(2);
    wit_t_amnt.value = ((amnt.value/100)*witholding_tax.value).toFixed(2);
  }



})();
</script>