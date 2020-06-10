 <section class="content-header">
      <h1>Principal
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('principal')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Principal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo ucfirst($page)?> Product Principal</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('principal')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
        </div>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php // echo validation_errors() ?>
              <form action="<?php echo site_url('principal/process')?>" method="post">
                <div class="form-group <?php echo form_error('nama_principal') ? 'has-error' : null?>">
                  <label>Nama Principal *</label>
                  <input type="hidden" name="id_principal" value="<?php echo $row->id_principal?>">
                  <input type="text" name="nama_principal" value="<?php echo $row->nama_principal?>" class="form-control">
                  <?php echo form_error('nama_principal')?>
                </div>
                <div class="form-group <?php echo form_error('alamat') ? 'has-error' : null?>">
                  <label>Alamat Principal *</label>
                  <textarea name="alamat" value="<?php echo $row->alamat?>" class="form-control"></textarea>
                  <?php echo form_error('alamat')?>
                </div>
                <div class="form-group">
                    <button type="submit" name="<?php echo $page?>" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>

    </section>
    <!-- /.content -->