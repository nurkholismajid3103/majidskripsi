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
          <h3 class="box-title">Data Ekspedisi</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('ekspedisi/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>ID Ekspedisi</th>
                  <th>Nama Ekspedisi</th>
                  <th>Alamat</th>
                  <th>No Handphone</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody> 
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
              <tr>
                  <td><?php echo $data->id_ekspedisi?></td>
                  <td><?php echo $data->nama_ekspedisi?></td>
                  <td><?php echo $data->alamat?></td>
                  <td><?php echo $data->no_hp?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('ekspedisi/hapus')?>" method="post">
                    <a href="<?php echo site_url('ekspedisi/edit/'.$data->id_ekspedisi)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                        <input type="hidden" name="id_ekspedisi" value="<?php echo $data->id_ekspedisi?>">
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