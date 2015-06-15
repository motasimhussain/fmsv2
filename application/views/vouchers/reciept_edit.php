<?php 

  foreach ($list as $row) {
    $date = $row->date;
    $description = $row->description;
    $amnt = $row->amnt;
    $income_tax = $row->income_tax;
    $witholding_tax = $row->witholding_tax;
    $inc_t_amnt = $row->inc_t_amnt;
    $wit_t_amnt = $row->wit_t_amnt;
    $date = $row->date;
    $id = $row->id;
  }

 ?>


<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <ul class="list-inline">
            <li><h3 style="margin-top: 0px;margin-bottom: 0px;">Add Reciept Voucher</h3></li>
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
                        <form action="<?php echo base_url(); ?>index.php/form_process/reciept_edit" method="post" class="form-horizontal">
                            <fieldset>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinput">Date:</label>
                                <div class="col-md-4" >
                                    <input id="pickdate" value="<?php echo $date; ?>" name="date" placeholder="" class="form-control input-md" type="text" value="<?php if(isset($date)){echo $date;}?>">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="description">Description</label>  
                              <div class="col-md-4">
                              <textarea id="description" name="description" placeholder="Description" class="form-control" ><?php echo $description; ?></textarea>  
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="amnt">Amount</label>  
                              <div class="col-md-4">
                              <input id="amnt" value="<?php echo $amnt; ?>" name="amnt" placeholder="Amount" class="form-control input-md" type="text" >
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="income_tax">Income Tax %</label>  
                              <div class="col-md-4">
                              <input id="income_tax" value="<?php echo $income_tax; ?>" name="income_tax" placeholder="Income Tax %" value="4" class="form-control input-md" type="text" >
                              
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="witholding_tax">Witholding Tax %</label>  
                              <div class="col-md-4">
                              <input id="witholding_tax" value="<?php echo $witholding_tax; ?>" name="witholding_tax" placeholder="Witholding Tax %" value="20" class="form-control input-md" type="text" >
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="inc_t_amnt">Income Tax Amount</label>  
                              <div class="col-md-4">
                              <input id="inc_t_amnt" value="<?php echo $inc_t_amnt; ?>" name="inc_t_amnt" readonly="" placeholder="" class="form-control input-md" type="text" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="wit_t_amnt">Witholding Tax Amount</label>  
                              <div class="col-md-4">
                              <input id="wit_t_amnt" value="<?php echo $wit_t_amnt; ?>" name="wit_t_amnt" readonly="" placeholder="" class="form-control input-md" type="text" >
                              </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="singlebutton"></label>
                              <div class="col-md-4">
                                <button id="singlebutton" name="singlebutton" class="btn btn-primary pull-right" type="sumbit">Edit</button>
                              </div>
                            </div>

                            </fieldset>
                            <input type="text" hidden name="id" value="<?php echo $id; ?>">
                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
                </div>
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</aside><!-- /.right-side -->


<script type="text/javascript">
(function(){
  
  var amnt = document.getElementById('amnt');
  amnt.onkeyup = function(){
    var income_tax = document.getElementById('income_tax');
    var witholding_tax = document.getElementById('witholding_tax');
    var inc_t_amnt = document.getElementById('inc_t_amnt');
    var wit_t_amnt = document.getElementById('wit_t_amnt');

    inc_t_amnt.value = ((amnt.value/100)*income_tax.value).toFixed(2);
    wit_t_amnt.value = ((amnt.value/100)*witholding_tax.value).toFixed(2);
  }


  var witholding_tax = document.getElementById('witholding_tax');
  witholding_tax.onkeyup = function(){
    var income_tax = document.getElementById('income_tax');
    var inc_t_amnt = document.getElementById('inc_t_amnt');
    var wit_t_amnt = document.getElementById('wit_t_amnt');

    inc_t_amnt.value = ((amnt.value/100)*income_tax.value).toFixed(2);
    wit_t_amnt.value = ((amnt.value/100)*witholding_tax.value).toFixed(2);
  }

  var income_tax = document.getElementById('income_tax');
  income_tax.onkeyup = function(){
    var witholding_tax = document.getElementById('witholding_tax');
    var inc_t_amnt = document.getElementById('inc_t_amnt');
    var wit_t_amnt = document.getElementById('wit_t_amnt');
    inc_t_amnt.value = ((amnt.value/100)*income_tax.value).toFixed(2);
    wit_t_amnt.value = ((amnt.value/100)*witholding_tax.value).toFixed(2);
  }



})();
</script>