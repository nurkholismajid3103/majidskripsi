 <section class="content-header">
      <h1>Salesman
        <small>PT.Tempo Banjarmasin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('salesman')?>"><i class="fa fa-users"></i></a></li>
        <li class="active">Salesman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Data Salesman</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('salesman')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-plus"></i> Back
            </a>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php // echo validation_errors() ?>
              <form action="" method="post">
                <div class="form-group <?php echo form_error('id_salesman') ? 'has-error' : null?>">
                  <label>ID Salesman *</label>
                  <input type="text" name="id_salesman" value="<?php echo $this->input->post('id_salesman') ? $this->input->post('id_salesman') : $row->id_salesman?>" class="form-control">
                  <?php echo form_error('id_salesman')?>
                </div>
                <div class="form-group <?php echo form_error('nama') ? 'has-error' : null?>">
                  <label>Nama *</label>
                  <input type="text" name="nama" value="<?php echo $this->input->post('nama') ? $this->input->post('nama') : $row->nama?>" class="form-control">
                  <?php echo form_error('nama')?>
                </div>
                <div class="form-group <?php echo form_error('tgl_lahir') ? 'has-error' : null?>">
                  <label>Tanggal Lahir *</label>
                  <input type="date" name="tgl_lahir" value="<?php echo $this->input->post('tgl_lahir') ? $this->input->post('tgl_lahir') : $row->tgl_lahir?>" class="form-control">
                  <?php echo form_error('tgl_lahir')?>
                </div>
                <div class="form-group <?php echo form_error('jenis_kelamin') ? 'has-error' : null?>">
                  <label>Jenis Kelamin </label>
                  <select name="jenis_kelamin" class="form-control">
                          <?php $jenis_kelamin =  $this->input->post('jenis_kelamin')? $this->input->post('jenis_kelamin') : $row->jenis_kelamin?>
                          <option value="1" > Laki-laki </option>
                          <option value="2" <?php echo $jenis_kelamin == 2 ? 'selected' : null ?>> Perempuan </option>
                  </select>
                </div>
                <div class="form-group <?php echo form_error('alamat') ? 'has-error' : null?>">
                  <label> Alamat </label><small> (Biarkan Kosong Jika Tidak diganti)</small>
                  <textarea name="alamat" value="<?php echo $this->input->post('alamat')?>" class="form-control"></textarea>
                  <?php echo form_error('alamat')?>
                </div>
                <div class="form-group <?php echo form_error('route_list') ? 'has-error' : null?>">
                  <label>Route List *</label>
                  <input type="text" name="route_list" value="<?php echo $this->input->post('route_list') ? $this->input->post('route_list') : $row->route_list?>" class="form-control">
                  <?php echo form_error('route_list')?>
                </div>
                <div class="form-group <?php echo form_error('rayon') ? 'has-error' : null?>">
                  <label>Rayon *</label>
                  <input type="text" name="rayon" value="<?php echo $this->input->post('rayon') ? $this->input->post('rayon') : $row->rayon?>" class="form-control">
                  <?php echo form_error('rayon')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>

    </section>
    <!-- /.content -->