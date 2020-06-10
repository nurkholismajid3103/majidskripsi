<section class="content-header">
      <h1>Principal
        <small>Product</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('l_principal')?>"><i class="fa fa-home"></i></a></li>
        <li class="active">Laporan Product Principal</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="box">
        <div class="box-header">
                    <div class="container">
                    <div class="row justify-content-md-center">
                    <div class="ol col-lg-6">
                        
                      <form action="<?php echo site_url('laporan/laporanproduct_principal');?>" method="post" target="_blank">
                            
                            <div class="form-group">
                            
                            <label class="control-label"><small>Nama Principal : </small></label>
                            <select name="id_principal" id="id_principal" class="form-control selectpicker show-tick" data-live-search="true">
                            <option value="">-- Pilih --</option>
                            <?php foreach ($principal as $d){ ?>
                            <option value="<?php echo $d['id_principal'] ?>"><?php echo $d['nama_principal'] ?></option>
                            <?php } ?>
                            </select>
                            </div>
                        
                            
                            <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">
                            <i class="fa fa-paper-plane"></i> Perprincipal
                            </button>
                           
                            <a href="<?php echo site_url('laporan/laporanproduct_principalall') ?>" class="btn btn-danger btn-icon-split" target="_blank">
                             <span class="icon text-white-50">
                            <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Print all</span>
                            </a>
                            
                            </div>
                            
                        </form>
                    </div>
                </div>
              </div>
            </div>

            </section>