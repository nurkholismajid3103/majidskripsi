<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo site_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
					<img src="<?php echo base_url('assets/') ?>/img/pttempo.png" style="width: 100px; height: 100px;">
				</td>
				<td>
					<center>
						<h3>PT. Tempo Banjarmasin</h3>
					<h5>Jl.Sungai Andai No.07 RT.27 Telepon/Fax(0511)3301345 , (0511)6263302 Banjarmasin, 70122</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4><?php echo strtoupper($title); ?></h4>
	</center>
    <table class="table table-bordered">
                <thead>
                    <tr>
                  <th>#</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Nama Principal</th>
                  <th>Stok Barang</th>
                  <th>Harga Barang</th>
                  <th>Barcode</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach($p as $x) { ?>
                    <tr>
                    <td><?php echo $no++?>.</td>
                  <td><?php echo $x['kode_brg']?></td>
                  <td><?php echo $x['nama_brg']?></td>
                  <td><?php echo $x['nama_principal']?></td>
                  <td><?php echo $x['stok']?></td>
                  <td><?php echo $x['harga']?></td>
                  <td><?php echo $x['barcode']?></td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
    </table>