<!DOCTYPE HTML>
<html>
<head>
<title>Tambah Mata Kuliah</title>
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
		<h3 class="typo1">Tambah Data Mata Kuliah</h3>
		<!--button-->
	<hr>
		
		<div class="panel panel-primary ">
			<div class="panel-heading">
              <h3 class="panel-title">Data Mata Kuliah</h3>
            </div>
            <div class="panel-body">
				<div class="bs-example" data-example-id="simple-horizontal-form">
					
					
				<div class="form-horizontal" >
					<?php echo form_open('matakuliah/create');?>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
							<label for="kode" class="col-sm-3 control-label">Kode Mata Kuliah </label>
							<div class="col-sm-3">
								<input type="text" class="form-control"<?php echo form_input('kode_makul');?>
							</div>
							</div>
						</div>
								<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
							<label for="" class="col-sm-3 control-label">Nama Mata Kuliah </label>
							<div class="col-sm-6">
								<input type="text" class="form-control"<?php echo form_input('nama_makul');?>
							</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
							<label for="" class="col-sm-3 control-label">Jumlah SKS</label>
							<div class="col-sm-2">
								<input type="text" class="form-control"<?php echo form_input('sks');?>
							</div>
							</div>
						</div>
							<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
							<label for="" class="col-sm-3 control-label">Singkatan</label>
							<div class="col-sm-3">
								<input type="text" class="form-control"<?php echo form_input('singkatan');?>
							</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
							<label for="" class="col-sm-3 control-label">Semester</label>
							<div class="col-sm-6">
								<?php
								$options = array(
												'1' => 'Semester 1',
												'2' => 'Semester 2',
												'3' => 'Semester 3',
												'4' => 'Semester 4',
												'5' => 'Semester 5',
												'6' => 'Semester 6',
												'7' => 'Semester 7',
												'8' => 'Semester 8',
												
												);
								?>
								<?php echo form_dropdown('semester',$options	);?>
							</div>
							</div>
						</div>
							<div class="form-group">
							<div class="col-sm-offset-3 col-sm-8">
							<label for="" class="col-sm-3 control-label">Jurusan</label>
							<div class="col-sm-4">
								<select name="prodi_kode" class="form-control" required>
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
							<div class="col-sm-offset-9 col-sm-10">
					<?php echo form_submit('submit','Simpan');?>
					<a href="<?php echo site_url();?>/matakuliah" class="btn btn-danger"> BATAL</a>
					<?php echo form_close(); ?>
					</div>
					</div>
					</div>

				</div>
			</div>
          </div>

	
</body>
</html>