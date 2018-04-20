<!--
<?php echo form_open('mahasiswa/create');?>
<table>
    <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>JURUSAN</td><td><?php echo form_input('jurusan');?>  </td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
-->


<!DOCTYPE HTML>
<html>
<head>
<title>Tambah Mahasiswa</title>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Learning  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
</head>
<body>

	<!--header strat here-->
<?php $this->load->view('menu'); ?>
<!--header end here-->
<!--banner end here-->
	
<!--short codes start here-->
<div class="typrography">
	<div class="container">
	<div class="page">
		<h3 class="typo1">Tambah Data Mahasiswa</h3>
		<!--button-->
	<hr>
		
		<div class="panel panel-primary ">
			<div class="panel-heading">
              <h3 class="panel-title">Data Mahasiswa</h3>
            </div>
            <div class="panel-body">
				<div class="bs-example" data-example-id="simple-horizontal-form">
					
					
				<div class="form-horizontal" >
					<?php echo form_open('mahasiswa/create');?>
						<div class="form-group" hidden>
							<div class="col-sm-offset-3 col-sm-10">
							<label for="nim" class="col-sm-2 control-label">NIM</label>
							<div class="col-sm-6">
								<?php echo form_input('nim');?>
							</div>
							</div>
						</div>
								<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-6">
								  <input type="text" class="form-control" <?php echo form_input('nama');?>
							</div>
							</div>
						</div>
							<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-6">
								<select name="jenis_kelamin" class="form-control">
									
									<option value="" selected> --Pilih Jenis Kelamin--</option>
									<option value="Laki-laki">Laki-laki </option>
									<option value="Perempuan">Perempuan</option>
									
								</select>
							</div>
							</div>
						</div>
				
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-6">
								<textarea class="form-control" rows="2" <?php echo form_input('alamat');?> </textarea>
							</div>
							</div>
						</div>
				
					<div class="form-group" >
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
								<div class="row">
							<div class="col-sm-3">
								<input type="text" class="form-control"<?php echo form_input('tempat_lahir');?>
								
							</div>
								<div class="col-sm-3">
								
								<input type="date" class="form-control"<?php echo form_input('tanggal_lahir'); ?> 
							</div>
								</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Jurusan</label>
							<div class="col-sm-3">
								<select name="prodi_kode" class="form-control">
									<?php
									foreach ($prodi as $m){	 ?>
									<option value="" selected> --Pilih Jurusan--</option>
									<option value="<?php echo $m->kode ?>"> <?php echo $m->nama_jurusan ?></option>
									<?php } ?>
								</select>
							</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Tahun Masuk</label>
							<div class="col-sm-6">
								<?php
								$option = array(
												'2014'    => '2014',
												'2015'    => '2015',
												'2016'    => '2016',
												'2017'    => '2017',
												'2018'    => '2018',
												);
								?>
								 <?php echo form_dropdown('tahun_masuk',$option	);?>
								</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-6 col-sm-10">
					<?php echo form_submit('submit','Simpan');?>
					<a href="<?php echo site_url();?>/mahasiswa" class="btn btn-danger"> BATAL</a>
					<?php echo form_close(); ?>
					</div>
					</div>
					</div>

				</div>
			</div>
          </div>

	
</body>
</html>