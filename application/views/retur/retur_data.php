 <section class="content-header">
      <h1>Retur
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('retur')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Retur</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Product Retur</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('retur/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>#</th>
                  <th>No FTTBR</th>
                  <th>Nama Pelanggan</th>
                  <th>Nama Salesman</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>No Batch</th>
                  <th>Expired Date</th>
                  <th>Jumlah Barang</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?> 
              <tr>
                  <td><?php echo $no++?>.</td>
                  <td><?php echo $data->no_fttbr?></td>
                  <td><?php echo $data->nama_plg?></td>
                  <td><?php echo $data->nama_sales?></td>
                  <td><?php echo $data->kode_brg?></td>
                  <td><?php echo $data->nama_brg?></td>
                  <td><?php echo $data->no_batch?></td>
                  <td><?php echo $data->exp_date?></td>
                  <td><?php echo $data->jumlah?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('retur/hapus')?>" method="post">
                    <a href="<?php echo site_url('retur/edit/'.$data->id_retur)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                       <input type="hidden" name="id_retur" value="<?php echo $data->id_retur?>">
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