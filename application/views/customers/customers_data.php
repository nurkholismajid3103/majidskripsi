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
          <h3 class="box-title">Data Customers</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('customers/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>Kode Pelanggan</th>
                  <th>Nama Pelanggan</th>
                  <th>Alamat</th>
                  <th>No Handphone</th>
                  <th>Nama Pemilik</th>
                  <th>No NPWP</th>
                  <th>Jenis Pelanggan</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody> 
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
              <tr>
                  <td><?php echo $data->kode_plg?></td>
                  <td><?php echo $data->Nama_plg?></td>
                  <td><?php echo $data->alamat?></td>
                  <td><?php echo $data->no_hp?></td>
                  <td><?php echo $data->nama_pemilik?></td>
                  <td><?php echo $data->no_npwp?></td>
                  <td><?php echo $data->jenis_plg?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('customers/hapus')?>" method="post">
                    <a href="<?php echo site_url('customers/edit/'.$data->kode_plg)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                        <input type="hidden" name="kode_plg" value="<?php echo $data->kode_plg?>">
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