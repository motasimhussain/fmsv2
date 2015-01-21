
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

<?php foreach ($list as $row): ?>
    
<?php foreach ($info as $row2): ?>


<aside class="right-side">
    <!-- Content Header (Page header) -->

    <section class="content-header">
          <ul class="list-inline">
          <li>
            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/site/reciept_list">Back</a>
          </li>
          <li>
            <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
          </li>
          </ul>
    </section><!-- Main content -->

    <section class="content">

      <div style="padding-right:70px;padding-left:70px;">
      <h3 class="text-center"><b>Pak Japan Ink Chemical</b><?php //echo $row2->w_name;?></h3>
      <h5 class="text-center">M-II F92/4, SHERSHAH SITE KARACHI<?php //echo $row2->w_address ?></h5>

      <h4 class="text-center">Reciept Voucher</h4>

      <!-- <hr/> -->


      <span><b>Voucher No. <?php echo $row->id; ?></b></span>
      <span class="pull-right" ><b>Date: <?php echo date("d-m-Y",strtotime($row->e_date)); ?></b></span>
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
              <span></span>
              <span><?php echo $row2->c_name; ?></span>
              <br/>
              <span><?php echo $row->description; ?></span>
            </td>
            <td><?php echo $row->amnt; ?></td>
            <td><?php echo $row->inc_t_amnt ?></td>
            <td><?php echo $row->amnt + $row->inc_t_amnt; ?></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>Total:</th>
            <th><?php echo $row->amnt; ?></th>
            <th><?php echo $row->inc_t_amnt ?></th>
            <th id="tot_amnt"><?php echo $row->amnt + $row->inc_t_amnt; ?></th>
          </tr>
        </tfoot>
      </table>

<?php endforeach; ?>
<?php endforeach; ?>

      <p id="amnt_wrd"></p>
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

<script type="text/javascript">
  (function(){

    var getNum = document.getElementById("tot_amnt");

    console.log("triggered");
    var num = Math.floor(getNum.innerHTML);
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
    str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
    return str;
    }
    console.log(inWords(num));
    document.getElementById("amnt_wrd").innerHTML = inWords(num);

  })();
    
</script>
