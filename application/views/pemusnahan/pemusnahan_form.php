 <section class="content-header">
      <h1>Pemusnahan
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('pemusnahan')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Pemusnahan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo ucfirst($page)?> Product Pemusnahan</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('pemusnahan')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
        </div>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php // echo validation_errors() ?>
              <form action="<?php echo site_url('pemusnahan/process')?>" method="post">
                <div class="form-group <?php echo form_error('kode_brg') ? 'has-error' : null?>">
                  <label>Kode Barang *</label>
                  <input type="hidden" name="id_pemusnahan" value="<?php echo $row->id_pemusnahan?>">
                  <input type="text" name="kode_brg" value="<?php echo $row->kode_brg?>" class="form-control" required>
                  <?php echo form_error('kode_brg')?>
                </div>
                <div class="form-group">
                  <label>Nama Barang </label>
                  <select name="id_retur" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php foreach($retur->result() as $key => $data) { ?>
                      <option value="<?php echo $data->id_retur?>" <?php echo $data->id_retur == $row->id_retur ? "selected" : null ?>> <?php echo $data->nama_brg?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group <?php echo form_error('exp_date') ? 'has-error' : null?>">
                  <label>Expired Date *</label>
                  <input type="Date" name="exp_date" value="<?php echo $row->exp_date?>" class="form-control">
                  <?php echo form_error('exp_date')?>
                </div>
                <div class="form-group <?php echo form_error('tgl_pemusnahan') ? 'has-error' : null?>">
                  <label>Tanggal Pemusnahan *</label>
                  <input type="Date" name="tgl_pemusnahan" value="<?php echo $row->tgl_pemusnahan?>" class="form-control">
                  <?php echo form_error('no_batch')?>
                </div>
                <div class="form-group <?php echo form_error('jumlah') ? 'has-error' : null?>">
                  <label>Jumlah Barang *</label>
                  <input type="number" name="jumlah" value="<?php echo $row->jumlah?>" class="form-control">
                  <?php echo form_error('jumlah')?>
                </div>
                <div class="form-group">
                    <button type="submit" name="<?php echo $page?>" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>

    </section>
    <!-- /.content -->