 <section class="content-header">
      <h1>Ekspedisi
        <small>PT.Tempo Banjarmasin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('ekspedisi')?>"><i class="fa fa-truck"></i></a></li>
        <li class="active">Ekspedisi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Data Ekspedisi</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('ekspedisi')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php // echo validation_errors() ?>
              <form action="" method="post">
                <div class="form-group <?php echo form_error('id_ekspedisi') ? 'has-error' : null?>">
                  <label>ID Ekspedisi *</label>
                  <input type="text" name="id_ekspedisi" value="<?php echo set_value('id_ekspedisi')?>" class="form-control">
                  <?php echo form_error('id_ekspedisi')?>
                </div>
                <div class="form-group <?php echo form_error('nama_ekspedisi') ? 'has-error' : null?>">
                  <label>Nama Ekspedisi *</label>
                  <input type="text" name="nama_ekspedisi" value="<?php echo set_value('nama_ekspedisi')?>" class="form-control">
                  <?php echo form_error('nama_ekspedisi')?>
                </div>
                <div class="form-group <?php echo form_error('alamat') ? 'has-error' : null?>">
                  <label>Alamat Ekspedisi *</label>
                  <textarea name="alamat" value="<?php echo set_value('alamat')?>" class="form-control"></textarea>
                  <?php echo form_error('alamat')?>
                </div>
                <div class="form-group <?php echo form_error('no_hp') ? 'has-error' : null?>">
                  <label>No Handphone*</label>
                  <input type="text" name="no_hp" value="<?php echo set_value('no_hp')?>" class="form-control">
                  <?php echo form_error('no_hp')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>


    </section>
    <!-- /.content -->