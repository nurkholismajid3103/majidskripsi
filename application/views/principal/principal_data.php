 <section class="content-header">
      <h1>Principal
        <small>Name</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('principal')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Principal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Product Principal</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('principal/add')?>" class="btn btn-primary btn-flat">
              <i class="fa fa-user-plus"></i> Create
            </a>
          </div>
        </div>
        <div class="box-body table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th>#</th>
                  <th>Nama Principal</th>
                  <th>Alamat Principal</th>
                  <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($row->result() as $key => $data) { ?> 
              <tr>
                  <td><?php echo $no++?>.</td>
                  <td><?php echo $data->nama_principal?></td>
                  <td><?php echo $data->alamat?></td>
                  <td class="text-center" width="160px">
                    <form action="<?php echo site_url('principal/hapus')?>" method="post">
                    <a href="<?php echo site_url('principal/edit/'.$data->id_principal)?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Update
                    </a>
                       <input type="hidden" name="id_principal" value="<?php echo $data->id_principal?>">
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