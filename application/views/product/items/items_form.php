 <section class="content-header">
      <h1>items
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('items')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">items</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo ucfirst($page)?> Product items</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('items')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
        </div>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <?php // echo validation_errors() ?>
              <form action="<?php echo site_url('items/process')?>" method="post">
                <div class="form-group <?php echo form_error('kode_brg') ? 'has-error' : null?>">
                  <label>Kode Barang *</label>
                  <input type="hidden" name="id_items" value="<?php echo $row->id_items?>">
                  <input type="text" name="kode_brg" value="<?php echo $row->kode_brg?>" class="form-control" required>
                  <?php echo form_error('kode_brg')?>
                </div>
                <div class="form-group <?php echo form_error('nama_brg') ? 'has-error' : null?>">
                  <label>Nama Barang *</label>
                  <input type="text" name="nama_brg" value="<?php echo $row->nama_brg?>" class="form-control">
                  <?php echo form_error('nama_brg')?>
                </div>
                <div class="form-group">
                  <label>Category </label>
                  <select name="id_category" class="form-control">
                    <option value="">-- Pilih --</option>
                    <?php foreach($category->result() as $key => $data) { ?>
                      <option value="<?php echo $data->id_category?>" <?php echo $data->id_category == $row->id_category ? "selected" : null ?>> <?php echo $data->nama_product?></option>
                    <?php } ?>
                  </select>
                </div>
               <div class="form-group <?php echo form_error('harga') ? 'has-error' : null?>">
                  <label>Harga Barang *</label>
                  <input type="number" name="harga" value="<?php echo $row->harga?>" class="form-control" required>
                  <?php echo form_error('harga')?>
                </div>
                <div class="form-group <?php echo form_error('barcode') ? 'has-error' : null?>">
                  <label>Barcode *</label>
                  <input type="text" name="barcode" value="<?php echo $row->barcode?>" class="form-control" required>
                  <?php echo form_error('barcode')?>
                </div>
                <div class="form-group">
                    <button type="submit" name="<?php echo $page?>" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>

    </section>
    <!-- /.content -->