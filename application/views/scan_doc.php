 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Scan Documents
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
                    <!-- <div class="col-md-4"> -->

                        <!-- general form elements disabled -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Scan Documents</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                <?php $tags =  array('class' => 'form-horizontal'); ?>
                                    <?php echo form_open_multipart('scan_upload/do_upload',$tags);?>
<fieldset>

<!-- Form Name -->

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="docfor">Document for:</label>
  <div class="col-md-4">
      <select id="docfor" name="docfor" class="form-control">
<?php foreach($select_workplace as $row): ?>
<option value="<?php echo $row->id; ?>"><?php echo $row->w_name; ?></option>
<?php endforeach; ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="coname">Company Name:</label>
  <div class="col-md-4">
    <select id="coname" name="coname" class="form-control">
<?php foreach($select_company as $row): ?>
<option value="<?php echo $row->id; ?>"><?php echo $row->c_name; ?></option>
<?php endforeach; ?>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="desc">Description:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="desc" name="desc"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="scandoc">Select Document</label>
  <div class="col-md-4">
    <input id="scandoc" name="scandoc[]" class="input-file" type="file">
        <input id="scandoc" name="scandoc[]" class="input-file" type="file">
    <input id="scandoc" name="scandoc[]" class="input-file" type="file">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="docupload"></label>
  <div class="col-md-4">
    <button id="docupload" name="docupload" class="btn btn-primary">Upload</button>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="docupload"></label>
  <div class="col-md-4">
    <a href="<?php echo base_url();?>scan_uploads/index.php" class="btn btn-primary">View Uploads</a>
    <!-- <button id="docupload" name="docupload" class="btn btn-primary">Upload</button> -->
  </div>
</div>

</fieldset>
</form>

                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->