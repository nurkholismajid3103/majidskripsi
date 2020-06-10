 <section class="content-header">
      <h1>Principal
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('product_principal')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Principal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Product Principal</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('product_principal/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Nama Principal</th>
                  <th>Stok Barang</th>
                  <th>Harga Barang</th>
                  <th>Barcode</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?> 
              <tr>
                  <td><?php echo $no++?>.</td>
                  <td><?php echo $data->kode_brg?></td>
                  <td><?php echo $data->nama_brg?></td>
                  <td><?php echo $data->nama_principal?></td>
                  <td><?php echo $data->stok?></td>
                  <td><?php echo $data->harga?></td>
                  <td><?php echo $data->barcode?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('product_principal/hapus')?>" method="post">
                    <a href="<?php echo site_url('product_principal/edit/'.$data->id_product)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                       <input type="hidden" name="id_product" value="<?php echo $data->id_product?>">
                        <button onclick="product_principal confirm('Apakah Anda Yakin Menghapus ?')" class="btn btn-danger btn-xs">
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