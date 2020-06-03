 <section class="content-header">
      <h1>Category
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('category')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Category Product</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('category')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
        </div>
      </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <form action="" method="post">
                <div class="form-group <?php echo form_error('nama_product') ? 'has-error' : null?>">
                  <label>Nama Product *</label>
                  <input type="hidden" name="id_category" value="<?php echo $row->id_category?>">
                  <input type="text" name="nama_product" value="<?php echo $this->input->post('nama_product')? $this->input->post('nama_product') : $row->nama_product?>" class="form-control">
                  <?php echo form_error('nama_product')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>

    </section>
    <!-- /.content -->