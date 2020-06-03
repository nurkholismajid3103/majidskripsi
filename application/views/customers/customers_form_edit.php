 <section class="content-header">
      <h1>Customers
        <small>PT.Tempo Banjarmasin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('customers')?>"><i class="fa fa-users"></i></a></li>
        <li class="active">Customers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Data Customers</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('customers')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php // echo validation_errors() ?>
              <form action="" method="post">
                <div class="form-grop <?php echo form_error('kode_plg') ? 'has-error' : null?>">
                  <label>Kode Pelanggan *</label>
                  <input type="text" name="kode_plg" value="<?php echo $this->input->post('kode_plg')? $this->input->post('kode_plg') : $row->kode_plg?>" class="form-control">
                  <?php echo form_error('kode_plg')?>
                </div>
                <div class="form-group <?php echo form_error('Nama_plg') ? 'has-error' : null?>">
                  <label>Nama Pelanggan *</label>
                  <input type="text" name="Nama_plg" value="<?php echo $this->input->post('Nama_plg')? $this->input->post('Nama_plg') : $row->Nama_plg?>" class="form-control">
                  <?php echo form_error('Nama_plg')?>
                </div>
                <div class="form-group <?php echo form_error('alamat') ? 'has-error' : null?>">
                  <label>AlamatPelanggan *</label>
                  <textarea name="alamat" value="<?php echo $this->input->post('alamat')? $this->input->post('alamat') : $row->alamat?>" class="form-control"></textarea>
                  <?php echo form_error('alamat')?>
                </div>
                <div class="form-group <?php echo form_error('no_hp') ? 'has-error' : null?>">
                  <label>No Handphone*</label>
                  <input type="text" name="no_hp" value="<?php echo $this->input->post('no_hp')? $this->input->post('no_hp') : $row->no_hp?>" class="form-control">
                  <?php echo form_error('no_hp')?>
                </div>
                <div class="form-group <?php echo form_error('nama_pemilik') ? 'has-error' : null?>">
                  <label>Nama Pemilik *</label>
                  <input type="text" name="nama_pemilik" value="<?php echo $this->input->post('nama_pemilik')? $this->input->post('nama_pemilik') : $row->nama_pemilik?>" class="form-control">
                  <?php echo form_error('nama_pemilik')?>
                </div>
                <div class="form-group <?php echo form_error('no_npwp') ? 'has-error' : null?>">
                  <label>No NPWP *</label>
                  <input type="text" name="no_npwp" value="<?php echo $this->input->post('no_npwp')? $this->input->post('no_npwp') : $row->no_npwp?>" class="form-control">
                  <?php echo form_error('no_npwp')?>
                </div>
                <div class="form-group <?php echo form_error('jenis_plg') ? 'has-error' : null?>">
                  <label>Jenis Pelanggan *</label>
                  <select name="jenis_plg" class="form-control">
                          <option value="">-- Pilih --</option>
                          <option value="1" <?php echo set_value('jenis_plg') == 1 ? "selected" : null?>> GT </option>
                          <option value="2" <?php echo set_value('jenis_plg') == 2 ? "selected" : null?>> CP </option>
                          <option value="3" <?php echo set_value('jenis_plg') == 3 ? "selected" : null?>> MT </option>
                  </select>
                  <?php echo form_error('jenis_plg')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>

    </section>
    <!-- /.content -->