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
                <td class="col-xs-2 text-right">00-00-0000</td>
                <td class="col-xs-1 text-right">To:</td>
                <td class="col-xs-2 text-right">00-00-0000</td>
              </tr>
            </tbody>
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
                <td class="col-xs-2 ">0000000.00</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="col-xs-1">1</td>
                <td class="col-xs-2">00-00-0000</td>
                <td class="col-xs-4">this is the description of the transaction</td>
                <td class="col-xs-2">000000000.0</td>
                <td class="col-xs-2">000000000.0</td>
                <td class="col-xs-2">000000000.0</td>
              </tr>
            </tbody>
          </table>
        </div>

    </section>
</aside>