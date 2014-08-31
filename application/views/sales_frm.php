<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <ul class="list-inline">
            <li><h3 style="margin-top: 0px;margin-bottom: 0px;">Sales Form</h3></li>

            <li class="pull-right"><a accesskey="n" class="btn btn-success" href="<?php echo base_url(); ?>index.php/form_process/clear_session_sales">New</a></li>
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
                    <h3 class="box-title">Invoice Form</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        
                        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/form_process/sales_frm">
                            <fieldset>
                                <!-- Form Name -->
                                <!-- Select Basic -->
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                    <?php
                                                    if($sale_table != 'No Sales'){
                                                        //$data = $sale_table->row(0);
                                                        foreach ($sale_table as $row ) {
                                                            $inv_for = $row->inv_for;
                                                            $cmp_name = $row->cmp_name;
                                                            $bill_num = $row->bill_num;
                                                            $date = $row->date;
                                                        }
                                                    }
                                    ?>

                                    
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="inv_for">Company:</label>
                                        <div class="col-md-7">
                                            <select id="inv_for" name="inv_for" class="form-control">
                                                <?php foreach($select_workplace as $row): ?>
                                                <option value="<?php echo $row->id; ?>" <?php if(isset($inv_for)){if($row->id == $inv_for){echo " selected";}}?> ><?php echo $row->w_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="cmp_name">Customer:</label>
                                        <div class="col-md-7">
                                            <select id="cmp_name" name="cmp_name" class="form-control">
                                                <?php foreach($select_company as $row): ?>
                                                <option value="<?php echo $row->id; ?>"<?php if(isset($cmp_name)){if($row->id == $cmp_name){echo " selected";}}?>><?php echo $row->c_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-4 control-label" for="pay_type">Voucher type:</label>
                                        <div class="col-md-7">
                                            <select id="pay_type" name="pay_type" class="form-control">
                                                <option value="credit">Credit</option>
                                                <option value="debit">Debit</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="serial">Invoice #:</label>
                                        <div class="col-md-7">
                                            <input id="serial" name="serial" placeholder="" class="form-control input-md" required="" type="text" value="<?php echo $serial;?>">
                                            
                                        </div>
                                        </div>              <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="ref_num">Ref #:</label>
                                            <div class="col-md-7">
                                                <input id="ref_num" name="ref_num" placeholder="" class="form-control input-md" type="text" value="<?php echo $s_id;?>">
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="bill_num">Bill #:</label>
                                            <div class="col-md-7">
                                                <input id="bill_num" name="bill_num" placeholder="" class="form-control input-md" type="text" value="<?php if(isset($bill_num)){echo $bill_num;}?>">
                                                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="textinput">Date:</label>
                                            <div class="col-md-7" >
                                                <input id="pickdate" name="date" placeholder="" class="form-control input-md" type="text" value="<?php if(isset($date)){echo $date;}?>">
                                            </div>
                                        </div>
                                        
                                       <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_name">Item:</label>
                                        <div class="col-md-7">
                                            <select id="i_name" name="i_name" class="form-control">
                                                <?php foreach($select_item as $row): ?>
                                                <option value="<?php echo $row->i_name; ?>"><?php echo $row->i_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        </div>

                                        <!-- Text input-->
                                                                            <div class="form-group">
                                            <label class="col-md-4 control-label" for="wght">Unit Weight:</label>
                                            <div class="col-md-7">
                                                <select id="wght" name="wght" placeholder="" class="form-control input-md" required=""  class="form-control">
                                                    <option>Kilograms</option>
                                                    <option>Grams</option>
                                                    <option>Liters</option>
                                                    <option>Milliliters</option>
                                                    <option>Milligrams</option>
                                                    <option>Tons</option>
                                                    <option>Pounds</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        

                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="qunty">Quantity:</label>
                                            <div class="col-md-7">
                                                <input id="qunty" name="qunty" placeholder="" class="form-control input-md" required="" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="price">Unit Price</label>
                                            <div class="col-md-7">
                                                <input id="price" name="price" placeholder="" class="form-control input-md" required="" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Prepended checkbox -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="sales_tax">Sales Tax:</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                    <input type="checkbox" id="sales_tax_check">
                                                    </span>
                                                    <input id="sales_tax" name="sales_tax" class="form-control" placeholder="" type="text">
                                                    <span class="input-group-addon">%</span>
                                                </div> 
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="st_num">Sales Tax RS.</label>
                                            <div class="col-md-7">
                                                <input id="st_num" name="st_num" placeholder="" class="form-control input-md" type="text">
                                                
                                            </div>
                                        </div>

                                        <!-- Prepended checkbox -->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="fed_tax">F.E.D Tax:</label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <input id="fed_tax" name="fed_tax" class="form-control" placeholder="" type="text">
                                                    <span class="input-group-addon">%</span>
                                                </div>
                                                
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="fed_num">FED RS.</label>
                                            <div class="col-md-7">
                                                <input id="fed_num" name="fed_num" placeholder="" class="form-control input-md" type="text" >
                                                
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="amnt">Amount</label>
                                            <div class="col-md-7">
                                                <input id="amnt" name="amnt" placeholder="" class="form-control input-md" type="text">
                                                
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="tot_amnt">Amount Incl. Sales Tax</label>
                                            <div class="col-md-7">
                                                <input id="tot_amnt" name="tot_amnt" placeholder="" class="form-control input-md" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="amnt_wrd">Amount in Words</label>
                                            <div class="col-md-7">
                                                <input id="amnt_wrd" name="amnt_wrd" placeholder="" class="form-control input-md" type="text">
                                                
                                            </div>
                                        </div>
                                        <!-- Button -->
                                    </div>
                                        </fieldset>
                                    <fieldset>
                                        <div class="col-md-12">
                                            <button id="save_inv" name="save_inv" class="btn btn-primary pull-right">Save</button>
                                    </div>
                                </fieldset>
                                <!-- Script to dynamically generate words from numbers -->
                                <script type="text/javascript">
                                (function(){
                                        var getNum = document.getElementById("tot_amnt");
                                        function calc_tot(){
                                        console.log("triggered");
                                        var num = Math.floor(getNum.value);
                                        var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
                                        var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];
                                        function inWords (num) {
                                        if ((num = num.toString()).length > 9) return 'overflow';
                                        n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
                                        if (!n) return; var str = '';
                                        str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
                                        str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
                                        str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
                                        str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
                                        str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
                                        return str;
                                        }
                                        document.getElementById("amnt_wrd").value = inWords(num);
                                        }

                                        var quantity = document.getElementById('qunty');
                                        var ppu = document.getElementById('price');
                                        var tot_amnt = document.getElementById('tot_amnt');
                                        var sales_tax_check = document.getElementById('sales_tax_check');
                                        var sales_tax = document.getElementById('sales_tax');
                                        var st_num = document.getElementById('st_num');
                                        var amnt = document.getElementById('amnt');
                                        var fed_tax = document.getElementById('fed_tax');
                                        var fed_num = document.getElementById('fed_num');
                                        ppu.onkeyup = function(){
                                            var total = quantity.value * ppu.value;
                                            if(total>0){
                                                amnt.value = total.toFixed(2);
                                                if(sales_tax_check.checked){
                                                    var tax = (total/100)*sales_tax.value;
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    st_num.value = tax.toFixed(2);
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = total+tax+f_tax;
                                                }else{
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = (quantity.value * ppu.value)+f_tax;
                                                }
                                                calc_tot();
                                            }
                                        }
                                        quantity.onkeyup = function(){
                                            var total = quantity.value * ppu.value;
                                            if(total>0){
                                                amnt.value = total.toFixed(2);
                                                if(sales_tax_check.checked){
                                                    var tax = (total/100)*sales_tax.value;
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    st_num.value = tax.toFixed(2);
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = total+tax+f_tax;
                                                }else{
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = (quantity.value * ppu.value)+f_tax;
                                                }
                                                calc_tot();
                                            }
                                        }
                                        fed_tax.onkeyup = function(){
                                            var total = quantity.value * ppu.value;
                                            if(total>0){
                                                amnt.value = total.toFixed(2);
                                                if(sales_tax_check.checked){
                                                    var tax = (total/100)*sales_tax.value;
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    st_num.value = tax.toFixed(2);
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = total+tax+f_tax;
                                                }else{
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = (quantity.value * ppu.value)+f_tax;
                                                }
                                                calc_tot();
                                            }
                                        }
                                        sales_tax.onkeyup = function(){
                                            var total = quantity.value * ppu.value;
                                            if(total>0){
                                                amnt.value = total.toFixed(2);
                                                if(sales_tax_check.checked){
                                                    var tax = (total/100)*sales_tax.value;
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    st_num.value = tax.toFixed(2);
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = total+tax+f_tax;
                                                }else{
                                                    var f_tax = (total/100)*fed_tax.value;
                                                    fed_num.value = f_tax.toFixed(2);
                                                    tot_amnt.value = (quantity.value * ppu.value)+f_tax;
                                                }
                                                calc_tot();
                                            }
                                        }
                                })();
                                </script>
                            </form>
                            
                    </div><!-- /.box-body -->
            </div><!-- /.box -->








                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Current Sales</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body table-responsive">
                                        <div role="grid" class="dataTables_wrapper form-inline" id="example2_wrapper">
                                            <div class="row">
                                                
                                            </div>
                                            <table class="table table-bordered table-hover dataTable" id="example2" aria-describedby="example2_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">
                                                            Serial #:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Reference #:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Bill #:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Date:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Description:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Quatity:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Weight:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Price:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Sales Tax:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            FED Tax:
                                                        </th>
                                                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">
                                                            Amount:
                                                        </th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                                    <?php
                                                    if($sale_table != 'No Sales'){
                                                    foreach($sale_table as $row):
                                                    
                                                    
                                                    ?>
                                                    <tr class="even">
                                                        <td class="  sorting_1"><?php echo $row->serial;?></td>
                                                        <td class=" "><?php echo $row->ref_num;?></td>
                                                        <td class=" "><?php echo $row->bill_num;?></td>
                                                        <td class=" "><?php echo $row->date;?></td>
                                                        <td class=" "><?php echo $row->dscr;?></td>
                                                        <td class=" "><?php echo $row->qunty;?></td>
                                                        <td class=" "><?php echo $row->wght;?></td>
                                                        <td class=" "><?php echo $row->price;?></td>
                                                        <td class=" "><?php echo $row->sales_tax;?></td>
                                                        <td class=" "><?php echo $row->fed_tax;?></td>
                                                        <td class=" "><?php echo $row->amnt;?></td>
                                                    </tr>
                                                    <?php
                                                    $sale_sess = $row->sale_sess;
                                                    endforeach;
                                                    }  else{
                                                     $sale_sess = '0';
                                                  ?>
                                                    <tr class="even">
                                                        <td colspan="11" class="text-center">No Sales</td>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <form method="post" action="<?php echo base_url(); ?>index.php/site/gen_sales_inv">
 
                                        <fieldset>
                                            <div class="form-group">
                                            <input type="hidden" name = "sale_sess" value="<?php echo $sale_sess; ?>">
                                                <div class="col-md-12">
                                                    <button id="gen_inv" name="gen_inv" class="btn btn-primary pull-right">Generate Invoice</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                        </form>
                                    </div>
                                    
                                </div>
                                </section><!-- /.content -->
                                </aside><!-- /.right-side -->