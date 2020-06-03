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
          <h3 class="box-title">Data Category Product</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('category/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>#</th>
                  <th>nama_product</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?> 
              <tr>
                  <td><?php echo $no++?>.</td>
                  <td><?php echo $data->nama_product?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('category/hapus')?>" method="post">
                    <a href="<?php echo site_url('category/edit/'.$data->id_category)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                        <input type="hidden" name="id_category" value="<?php echo $data->id_category?>">
                        <button onclick="return confirm('Apakah Anda Yakin Menghapus ?')" class="btn btn-danger btn-xs">
                          <i class="fa fa-trash"></i> Delete
                        </button>
                    </form> 
                  </td>
              </tr>
              <?php
            } ?>
            </tbody>
          </table>
        </div>

    </section>
    <!-- /.content -->