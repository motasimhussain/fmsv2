<?php 	if (!isset($top_tables)) {
			$row2=NULL;
		}else {
			$row2=$top_tables->row(0); 
		}
?>

    <aside class="right-side">

    <section class="content-header">
            <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/gen_sales_tax_inv">
              <ul class="list-inline">
              <li>
                <label class="control-label" for="serial">Serial #</label>
              </li>
              <li>  
                <input type="text" class="form-control" id="serial" name="serial">
              </li>

              <li>
                <button class="btn btn-success" value="submit">Generate</button>
              </li>

              <li>
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
              </li>
              </ul>
            </form>
        </section><!-- Main content -->


<?php
if(!empty($row2)):

 ?>


<div class="pad margin no-print">
    <div class="alert alert-info" style="margin-bottom: 0!important;">
        <i class="fa fa-info"></i>
        <b>Note:</b> This page has been enhanced for printing. Click the print button at the top of the invoice to print.
    </div>
</div>
<section class="content invoice">
<div style="font-size:13px;">	
<div class="row" style="padding-right:30px;padding-left:30px;">

	<?php if($row2->w_name == "Pak Japan Textile"){ ?>
	<div class="row">
	  	<div style="float:left;">
	  		<img src="<?=base_url(); ?>img/pjt.png">
	  	</div>
	    <div class="pull-left" style="display:inline-block;padding-left:45px;">
	      <h1 class="text-right" style="margin-top:-10px;border:1px solid black; padding:5px; font-family:'Times New Roman';" >
	        <strong>Sales Tax Invoice</strong>
	      </h1>
	    </div>
	</div>

	<?php }else if($row2->w_name == "Pak Japan Ink Chemical"){ ?>
	<div class="row">
	    <div style="float:left;">
	      <img src="<?=base_url(); ?>img/pjic.png">
	    </div>
	    <div class="pull-left" style="display:inline-block;">
	      <h1 class="text-right" style="margin-top:3px; padding-left:65px;font-family:'Times New Roman';" >
	        <strong>Sales Tax Invoice</strong>
	      </h1>
	    </div>
	</div>
	<?php }else{ ?>
	 	<h3 class="pull-left"><strong><?php echo $row2->w_name;?></strong></h3>
	 	<h2 class="pull-left" style="display:inline-block;" ><strong>Sales Tax Invoice</strong></h2>
	<?php } ?>

</div>

	<table class="table-bordered" style="border-color: black;font-family:'Times New Roman';">
		
				<tr>
					<td class="col-xs-2">Serial#: <b><?php echo $row2->serial;?></b></td>
					<?php 
						$phpdate = strtotime( $row2->date );
						$mysqldate = date( 'd-m-Y', $phpdate );
					?>
					<td class="col-xs-3">Dated: <b><?php echo $mysqldate;?></b></td>
					<td class="col-xs-3">Time of supply:  
					<b><?php 
						date_default_timezone_set('GMT');
						echo date("g:i:s"); 
					?></b>
					</td>
					<td class="col-xs-3">Term of sale: <b>CREDIT</b></td>
					<td class="col-xs-1">Ref:<b><?php echo $row2->ref_num;?></b></td>
				</tr>
		</table>	
		<table class="table-bordered" style="border-color: black;font-family:'Times New Roman';">
			
			<tr>
				<td class="col-xs-2">Suppliers Name </td>
				<td class="col-xs-4 border-bottom" style="font-size:16px; height:40px;"><strong><?php echo $row2->w_name;?></strong></td>
				<td class="col-xs-2">Buyers Name </td>
				<td class="col-xs-4 border-bottom" style="font-size:16px;"><strong><?php echo $row2->c_name;?></strong></td>
			</tr>
			<tr>
				<td class="col-xs-2">Address</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_address; ?></strong></td>
				<td class="col-xs-2">Address</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->c_address; ?></strong></td>
			</tr>
			<tr>
				<td class="col-xs-2">Telephone #:</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_tel; ?></strong></td>
				<td class="col-xs-2">Telephone #:</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->c_tel; ?></strong></td>
			</tr>
			<tr>
				<td class="col-xs-2">GST #:</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_gst; ?></strong></td>
				<td class="col-xs-2">GST #:</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->c_gst; ?></strong></td>
			</tr>
			<tr>
				<td class="col-xs-2">NTN #:</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->w_ntn ?></strong></td>
				<td class="col-xs-2">NTN #:</td>
				<td class="col-xs-4 border-bottom"><strong><?php echo $row2->c_ntn ?></strong></td>
			</tr>
		</table>
		<table class="table-bordered" style="border-color: black;font-family:'Arial';">
	<thead>
		<tr>
			<th class="col-xs-1 text-center">Quantity</th>
			<th class="col-xs-3 text-center">Description of goods</th>
			<th class="col-xs-1 text-center">Rate</th>
			<th class="col-xs-2 text-center">Value Excluding Taxs Rs.Ps</th>
			<th class="col-xs-1 text-center">Rate of S.tax %</th>
			<th class="col-xs-1 text-center">Sales Tax Charged</th>
			<th class="col-xs-1 text-center">F.E.D. @ 2.5%</th>
			<th class="col-xs-2 text-center">Value including Taxs Rs.Ps</th>

		</tr>

	</thead>
	<tbody>

		<?php 
		    $s_num = 1;
		    foreach ($gen_inv as $row): 
		?>
		<tr>
			<td class="col-xs-1 text-center qty"><?php echo $row->qunty; ?></td>
			<td class="col-xs-3 text-center "><?php echo $row->i_name; ?></td>
			<td class="col-xs-1 text-center "><?php echo $row->price; ?></td>
			<td class="col-xs-2 text-center price"><?php echo $row->amnt; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->sales_tax; ?>%</td>
			<td class="col-xs-1 text-center totTax"><?php echo $row->sales_tax_tot; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->fed_tax; ?></td>
			<td class="col-xs-2 text-center totAmnt"><?php echo $row->tot_amnt;?></td>
		</tr>

		<?php $s_num++; endforeach; ?>
		  <tr  height='
		    <?php 
		      $num = sizeof($gen_inv);
		      echo (300-($num*15)); 
		    ?> '>

		    <td class="col-xs-1 text-center"></td>
			<td class="col-xs-3 text-center "></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-2 text-center"></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-1 text-center"></td>
			<td class="col-xs-2 text-center"></td>

		    </tr>
	</tbody>
	<tfoot><th class="col-xs-1 text-center" id="qty">Quantity</th>
			<th class="col-xs-3 text-center">Total</th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-2 text-center" id="price"></th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-1 text-center" id="totTax"></th>
			<th class="col-xs-1 text-center"></th>
			<th class="col-xs-2 text-center" id="totAmnt"></th>
</tfoot></table>
<strong><p id="amntWrd"></p></strong>
&nbsp;
<div class="row">
	<div class="row text-right" style="padding-right:40px;display:block">
		<p><b><?php echo $row2->w_name; ?></b></p>
	</div>
	&nbsp;
	&nbsp;
	<div class="row text-right" style="padding-right:40px;display:block">
		<p><b>Signature</b></p>
	</div>
	

</div>
	</div>
</section>

<script type="text/javascript">
(function(){
	var qty = document.getElementsByClassName("qty");
	var price = document.getElementsByClassName("price");
	var totTax = document.getElementsByClassName("totTax");
	var totAmnt = document.getElementsByClassName("totAmnt");

	var Tqty = document.getElementById("qty");
	var Tprice = document.getElementById("price");
	var TtotTax = document.getElementById("totTax");
	var TtotAmnt = document.getElementById("totAmnt");

	var qunty = 0,pr=0,tTax=0,tAmnt=0;

	for (var i = 0;i<qty.length; i++) {
		qunty = qunty + Number(qty[i].innerText);
	}

	for (var i = 0;i<price.length; i++) {
		pr = pr + Number(price[i].innerText);
	}

	for (var i = 0;i<totTax.length; i++) {
		tTax = tTax + Number(totTax[i].innerText);
	}

	for (var i = 0;i<totAmnt.length; i++) {
		tAmnt = tAmnt + Number(totAmnt[i].innerText);
	}


	Tqty.innerHTML = qunty;
	Tprice.innerHTML = pr;
	TtotTax.innerHTML = tTax;
	TtotAmnt.innerHTML = tAmnt;


    function calc_tot(tAmnt){
    console.log("triggered");
    var num = Math.floor(Number(tAmnt));
    var a = ['','One ','Two ','Three ','Four ', 'Five ','Six ','Seven ','Eight ','Nine ','Ten ','Eleven ','Twelve ','Thirteen ','Fourteen ','Fifteen ','Sixteen ','Seventeen ','Eighteen ','Nineteen '];
    var b = ['', '', 'Twenty','Thirty','Forty','Fifty', 'Sixty','Seventy','Eighty','Ninety'];
    function inWords (num) {
    if ((num = num.toString()).length > 9) return 'overflow';
    n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return; var str = '';
    str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'Crore ' : '';
    str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'Lakh ' : '';
    str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'Thousand ' : '';
    str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'Hundred ' : '';
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'Only ' : '';
    return str;
    }
    document.getElementById("amntWrd").innerHTML = inWords(num);
    }
    calc_tot(tAmnt);
    
})();
</script>




</aside>
<?php endif;?>