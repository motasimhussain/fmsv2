
<style type="text/css">
  /*.table{
    font-size: 14px;
  }*/
  .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
    padding: 4px;
  }
  table thead th { 
    background-color: #ddd;
  }
  .hrJour{
    margin-top: 8px;
  }
  .hrP{
    margin-bottom: 8px;
  }
  .hrEnd{
    border: 0;
    border-bottom: 1px dashed #ccc;
    /*background: #999;*/
  }
</style>

<aside class="right-side">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/gen_sales_serial">
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

    <section class="content">

      <div style="padding-right:70px;padding-left:70px;">
      <h3 class="text-center"><b>Pak Japan Ink Chemical</b><?php //echo $row2->w_name;?></h3>
      <h5 class="text-center">M-II F92/4, SHERSHAH SITE KARACHI<?php //echo $row2->w_address ?></h5>

      <h4 class="text-center">Reciept Voucher</h4>

      <!-- <hr/> -->


      <span><b>Voucher No. <?php /*insert shit here*/ ?></b></span>
      <span class="pull-right" ><b>Date: <?php /*insert shit here*/ ?></b></span>
      <br/>
      <br/>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Particulars</th>
            <th>Chq/Cash Amount</th>
            <th>Income Tax</th>
            <th>Net Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <span>130065</span>
              <span>Unicol Limited</span>
              <br/>
              <span>CH# 3377576 MEEZAN 03/04/2014 AGAINTS INV# 1998 DATE: 14/02/2014</span>
            </td>
            <td>219,024.00</td>
            <td></td>
            <td>219,024.00</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Total:</th>
            <th>219,024.00</th>
            <th>219,024.00</th>
          </tr>
        </tfoot>
      </table>
      <p>Four Hundred Twenty-Five Thousand Nine Hundred Fifty-Two Rupees Only</p>
      <hr class="hrJour">

      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
          <hr class="hrP">
          <p class="text-center">Prepared By</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <hr class="hrP">
          <p class="text-center">Checked By</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <hr class="hrP">
          <p class="text-center">Director</p>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
          <hr class="hrP">
          <p class="text-center">Receiver Signature</p>
        </div>
      </div>

      <hr class="hrEnd hrJour">



    </section>
</aside>
