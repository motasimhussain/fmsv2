<aside class="right-side">
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <form class="form-inline" method="post" action="<?php echo base_url(); ?>index.php/site/acc_purchase">

          <ul class="list-inline">
            <li><label class="control-label" for="reservation">Pick Date</label></li>
            <li>
              <input type="text" class="form-control getLedger" id="reservation" name="led_date" style="width:10em;">
            </li>
            <li>
              <button class="btn btn-success" value="submit">Generate</button>
            </li>
            
          </ul>
          
        </form>
        
        <!-- <ol class="breadcrumb">
            <li><a href="#">Home</a></li>

            <li><a href="#">Forms</a></li>

            <li class="active">General Elements</li>
        </ol> -->
    </section><!-- Main content -->


    <script type="text/javascript">
        var getLedgerDate = document.getElementById('reservation');
        getLedgerDate.onblur = function(){
          console.log("wololo");

          // ajax will go here //

        }
    </script>


    <section class="content">
        <div class="row">
            <!-- left column -->
        </div><!--/.col (left) -->


        <div style="padding-right:5px;padding-left:5px;">
          <h1 class="text-center" >Accounts Ledger</h1>

          <table class="col-xs-12 table table-top" >
            <?php foreach($data as $row): ?>
            <tbody>
              <tr>
                <td class="col-xs-6">Placeholder</td>
                <td class="col-xs-1"></td>
                <td class="col-xs-2"></td>
                <td class="col-xs-1 text-right">Date:</td>
                <td class="col-xs-2 text-right"><?php echo date('d-m-Y'); ?></td>
              </tr>
              <tr>
                <td class="col-xs-6">Ledger Type</td>
                <td class="col-xs-1"></td>
                <td class="col-xs-2"></td>
                <td class="col-xs-1 text-right">Page#:</td>
                <td class="col-xs-2 text-right">1</td>
              </tr>
              <tr>
                <td class="col-xs-6">Place Holder</td>
                <td class="col-xs-1 text-right">From:</td>
                <td class="col-xs-2 text-right"><?php echo date('d-m-Y',strtotime($this->session->userdata('st_date'))); ?></td>
                <td class="col-xs-1 text-right">To:</td>
                <td class="col-xs-2 text-right"><?php echo date('d-m-Y',strtotime($this->session->userdata('en_date'))); ?></td>
              </tr>
            </tbody>
            <?php 
              break; endforeach; 
              $this->session->unset_userdata('st_date');
              $this->session->unset_userdata('en_date');
              $this->session->unset_userdata('workplace');
              $this->session->unset_userdata('company');
            ?>
          </table>

          <table class="col-xs-12 table-bordered" >
            <thead>
              <tr>
                <th class="col-xs-1">Ref#</th>
                <th class="col-xs-2">Date</th>
                <th class="col-xs-4">Description</th>
                <th class="col-xs-2">Debit</th>
                <th class="col-xs-2">Credit</th>
                <th class="col-xs-2">Balance</th>
              </tr>
              <tr>
                <td class="col-xs-2 text-right" colspan="5">Opening Balance:</td>
                <td class="col-xs-2 ">
                  <?php 
                    $op_bal = $this->session->userdata('prev_bal');
                    echo number_format($op_bal,2);
                    $this->session->unset_userdata('prev_bal');
                    $temp = $op_bal;
                    $deb = 0;
                    $cred = 0; 
                  ?>
                </td>
              </tr>
            </thead>
            <tbody>
            <?php foreach($data as $row): ?>
              <tr>
                <td class="col-xs-1"><?php echo $row->ref_num; ?></td>
                <td class="col-xs-2"><?php echo date('d-m-Y',strtotime($row->date)); ?></td>
                <td class="col-xs-4">
                  <?php 
                    $this->load->model('general_query');
                    $co = $this->general_query->get_company($row->cmp_name);
                    echo $co;
                    echo $row->dscr;
                  ?>
                </td>
                <?php if($row->pay_type == "debit"){ ?>
                <td class="col-xs-2"><?php echo number_format(abs($row->amnt),2); ?></td>
                <td class="col-xs-2"><?php echo "0"; ?></td>
                <?php 
                  $temp += $row->amnt;
                  $deb += $row->amnt;
                ?>

                <?php }else{ ?>
                <td class="col-xs-2"><?php echo "0"; ?></td>
                <td class="col-xs-2"><?php echo number_format(abs($row->amnt),2); ?></td>
                <?php 
                  $temp -= $row->amnt;
                  $cred += $row->amnt;
                ?>

                <?php } ?>
                <td class="col-xs-2"><?php echo number_format($temp,2); ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
              <th class="col-xs-1 text-right" colspan="3">Total:</th>
              <th class="col-xs-2"><?php echo(number_format($deb,2)); ?></th>
              <th class="col-xs-2"><?php echo(number_format($cred,2)); ?></th>
              <th class="col-xs-2"><?php echo number_format($temp,2 ); ?></th>
            </tfoot>
          </table>
        </div>

    </section>
</aside>