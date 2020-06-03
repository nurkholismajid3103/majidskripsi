 <section class="content-header">
      <h1>Salesman
        <small>PT.Tempo Banjarmasin</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('salesman')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Salesman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Salesman</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('salesman/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>ID salesman</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Route List</th>
                  <th>Rayon</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody> 
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?>
              <tr>
                  <td><?php echo $data->id_salesman?></td>
                  <td><?php echo $data->nama?></td>
                  <td><?php echo $data->tgl_lahir?></td>
                  <td><?php echo $data->jenis_kelamin?></td>
                  <td><?php echo $data->alamat?></td>
                  <td><?php echo $data->route_list?></td>
                  <td><?php echo $data->rayon?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('salesman/hapus')?>" method="post">
                    <a href="<?php echo site_url('salesman/edit/'.$data->id_salesman)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                        <input type="hidden" name="id_salesman" value="<?php echo $data->id_salesman?>">
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