 <section class="content-header">
      <h1>Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('user')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Users</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('user/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Level</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?> 
              <tr>
                  <td><?php echo $no++?>.</td>
                  <td><?php echo $data->username?></td>
                  <td><?php echo $data->nama?></td>
                  <td><?php echo $data->jabatan?></td>
                  <td><?php echo $data->level == 1 ? "Admin" : "Gudang"?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('user/hapus')?>" method="post">
                    <a href="<?php echo site_url('user/edit/'.$data->id_user)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                        <input type="hidden" name="id_user" value="<?php echo $data->id_user?>">
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