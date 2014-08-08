<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Invoice Form
                        <small>Preview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
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
                                    <h3 class="box-title">Add Product</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/form_process/add_pro" method="post">
                                      <fieldset>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="i_for">Item for:</label>
                                        <div class="col-md-4">
                                            <select id="i_for" name="i_for" class="form-control">
                                                <?php foreach($select_workplace as $row): ?>
                                                <option value="<?php echo $row->id; ?>"><?php echo $row->w_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="item_code">Item Code</label>  
                                        <div class="col-md-4">
                                        <input id="item_code" name="item_code" placeholder="Item Code" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="des">Product Description</label>  
                                        <div class="col-md-4">
                                        <input id="des" name="des" placeholder="Product Description" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="cat">Category</label>  
                                        <div class="col-md-4">
                                        <input id="cat" name="cat" placeholder="Categoty" class="form-control input-md" type="text" required>
                                          
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="p_price">Unit Price(Purchasing)</label>  
                                        <div class="col-md-4">
                                        <input id="p_price" name="p_price" placeholder="Unit Price" class="form-control input-md" type="text" required>
                                        </div>
                                      </div>

                                      <!-- Text input-->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="s_price">Unit Price(Selling)</label>
                                        <div class="col-md-4">
                                        <input id="s_price" name="s_price" placeholder="Unit Price" class="form-control input-md" type="text" required>
                                        </div>
                                      </div>

                                      <!-- Select Basic -->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Unit(Weight)</label>
                                        <div class="col-md-4">
                                          <select id="selectbasic" name="unit" class="form-control">
                                            <option value="">Kilogram</option>
                                            <option value="">Grams</option>
                                            <option value="">Liters</option>
                                            <option value="">Milliliters</option>
                                          </select>
                                        </div>
                                      </div>

                                      <!-- Button -->
                                      <div class="form-group">
                                        <label class="col-md-4 control-label" for="singlebutton"></label>
                                        <div class="col-md-4">
                                          <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="sumbit">Add</button>
                                        </div>
                                      </div>

                                      </fieldset>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->