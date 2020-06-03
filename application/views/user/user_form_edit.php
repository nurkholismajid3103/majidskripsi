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
          <h3 class="box-title">Edit Data</h3>
          <div class="pull-right">
            <a href="<?php echo site_url('user')?>" class="btn btn-warning btn-flat">
              <i class="fa fa-user-plus"></i> Back
            </a>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <form action="" method="post">
                <div class="form-group <?php echo form_error('fullname') ? 'has-error' : null?>">
                  <label>Nama *</label>
                  <input type="hidden" name="id_user" value="<?php echo $row->id_user?>">
                  <input type="text" name="fullname" value="<?php echo $this->input->post('fullname')? $this->input->post('fullname') : $row->nama?>" class="form-control">
                  <?php echo form_error('fullname')?>
                </div>
                <div class="form-group <?php echo form_error('jabatan') ? 'has-error' : null?>">
                  <label>Jabatan *</label>
                  <input type="text" name="jabatan" value="<?php echo $this->input->post('jabatan')? $this->input->post('jabatan') : $row->jabatan?>" class="form-control">
                  <?php echo form_error('jabatan')?>
                </div>
                <div class="form-group <?php echo form_error('level') ? 'has-error' : null?>">
                  <label>Level </label>
                  <select name="level" class="form-control">
                    <?php $level =  $this->input->post('level')? $this->input->post('level') : $row->level?>
                    <option value="1" > Admin </option>
                    <option value="2" <?php echo $level == 2 ? 'selected' : null ?>> Gudang </option>
                  </select>
                  <?php echo form_error('level')?>
                </div>
                <div class="form-group <?php echo form_error('username') ? 'has-error' : null?>">
                  <label>Username *</label>
                  <input type="text" name="username" value="<?php echo $this->input->post('username')? $this->input->post('username') : $row->username?>" class="form-control">
                  <?php echo form_error('username')?>
                </div>
                <div class="form-group <?php echo form_error('password') ? 'has-error' : null?>">
                  <label>Password </label><small> (Biarkan Kosong Jika Tidak diganti)</small>
                  <input type="password" name="password" value="<?php echo $this->input->post('password')?>" class="form-control">
                  <?php echo form_error('password')?>
                </div>
                <div class="form-group <?php echo form_error('passconf') ? 'has-error' : null?>">
                  <label>Password Confirmation </label><small>(Biarkan Kosong Jika Tidak diganti)</small>
                  <input type="password" name="passconf" value="<?php echo $this->input->post('passconf')?>" class="form-control">
                  <?php echo form_error('passconf')?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-flat">
                        <i class="fa fa-floppy-o"></i> Save </button>
                    <button type="reset" class="btn btn-danger btn-flat">Reset</button>
                </div>
        </div>
        
    </section>
    <!-- /.content -->