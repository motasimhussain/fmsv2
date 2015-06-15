<?php if (!isset($top_tables)) {
  $row2=NULL;
   }else {
    $row2=$top_tables->row(0); 
   }
?>


    <aside class="right-side">

    <section class="content-header">
            <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/gen_challan">
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
	<div class="row text-center">
			<h2>Delivery Challan</h2>
			<h3 class="text-center"><?php echo $row2->w_name;?></h3>
			<p><?php echo $row2->w_address ?></p>
			<p>Tel / Fax #:<?php if($row2->sales_tax_tot != 0){echo $row2->w_tel;}else{echo "...";}?> Sales tax registration #: <?php if($row2->sales_tax_tot != 0){echo $row2->w_gst;}else{echo "...";}?></p>
			<p></p>
</div>
<table class="col-xs-12 invoice-table">
		<tr>
			<td class="col-xs-2">Serial #</td>
			<td class="col-xs-2 border-bottom"><?php echo $row2->serial;?></td>
			<td class="col-xs-6 text-right">Dated</td>
			<?php 
				$phpdate = strtotime( $row2->date );
				$mysqldate = date( 'd-m-Y', $phpdate );
			 ?>
			<td class="col-xs-2 border-bottom"><?php echo $mysqldate;?></td>
			
		</tr>
		<tr>
			<td class="col-xs-2">Ref. I</td>
			<td class="col-xs-2 border-bottom"><?php echo $row2->ref_num;?></td>
			<td class="col-xs-6 text-right">Bill #</td>
			<td class="col-xs-2 border-bottom"><?php echo $row2->bill_num;?></td>
			
		</tr>
		<tr>
			<td class="col-xs-2">Buyers name </td>
			<td class="col-xs-10 border-bottom"><?php echo $row2->c_name;?></td>
		</tr>
		<tr>
			<td class="col-xs-2">Address</td>
			<td class="col-xs-10 border-bottom"><?php echo $row2->c_address;?></td>
		</tr>
</table>
<table class="table-bordered">
	<thead>
		<tr>
			<th class="col-xs-1 text-center">S.No</th>
			<th class="col-xs-9 text-center">Description</th>
			<th class="col-xs-1 text-center">Quantity</th>
			<th class="col-xs-1 text-center">Unit</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		    $s_num = 1;
		    foreach ($gen_inv as $row): 
		?>
		<tr>
			<td class="col-xs-1 text-center border-right"><?php echo $s_num; ?></td>
			<td class="col-xs-9 text-center border-right"><?php echo $row->i_name; ?></td>
			<td class="col-xs-1 text-center border-right qunty"><?php echo $row->qunty; ?></td>
			<td class="col-xs-1 text-center"><?php echo $row->wght; ?></td>
		</tr>
		<?php $s_num++; endforeach; ?>
		  <tr  height='
		    <?php 
		      $num = sizeof($gen_inv);
		      echo (280-($num*15)); 
		    ?> '>

		    <td class="col-xs-1 text-center border-right"></td>
			<td class="col-xs-9 text-center border-right"></td>
			<td class="col-xs-1 text-center border-right"></td>
			<td class="col-xs-1 text-center"></td>

		    </tr>
	</tbody>
	<tfoot>
		<th class="col-xs-1 text-center"></th>
		<th class="col-xs-9 text-center">Total:</th>
		<th class="col-xs-1 text-center" id="totQty"></th>
		<th class="col-xs-1 text-center"></th>
	</tfoot>

	<script type="text/javascript">
		var arr = document.getElementsByClassName("qunty");
		var tot_qty = document.getElementById("totQty");
		var qty = 0;
		for(var i=0; i<arr.length; i++){
			qty = qty + Number(arr[i].innerText);
		}

		tot_qty.innerHTML = qty;

	</script>


</table>
<div class="row">
	<div class="row text-right" style="padding-right:40px;display:block">
		<p><b></b></p>
	</div>
	&nbsp;
	&nbsp;
	<div class="row text-right" style="padding-right:40px;display:block">
		<p><b>Signature</b></p>
	</div>
	

</div>
</div>
</section>


<?php endif;?>
</aside>