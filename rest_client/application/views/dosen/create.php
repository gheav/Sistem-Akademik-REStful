<!DOCTYPE HTML>
<html>
<head>
<title>Tambah Dosen</title>
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
		<h3 class="typo1">Tambah Data Dosen</h3>
		<!--button-->
	<hr>
		
		<div class="panel panel-primary ">
			<div class="panel-heading">
              <h3 class="panel-title">Data Dosen</h3>
            </div>
            <div class="panel-body">
				<div class="bs-example" data-example-id="simple-horizontal-form">
					
					
				<div class="form-horizontal" >
					<?php echo form_open('dosen/create');?>
						<div class="form-group" hidden="">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="nid" class="col-sm-2 control-label">NID</label>
							<div class="col-sm-6">
								<?php echo form_input('npk');?>
							</div>
							</div>
						</div>
								<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-6">
								<input type="text" class="form-control"<?php echo form_input('nama_dosen');?>
							</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Gelar</label>
							<div class="col-sm-2">
								<input type="text" class="form-control"<?php echo form_input('gelar');?>
							</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-6">
								<?php
								$options = array(
												'Laki-laki'         => 'Laki-laki',
												'Perempuan'           => 'Perempuan',
												);
								?>
								<?php echo form_dropdown('jenis_kelamin',$options	);?>
							</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-10">
							<label for="" class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-6">
								<input type="text" class="form-control"<?php echo form_input('alamat');?>
							</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-6 col-sm-10">
					<?php echo form_submit('submit','Simpan');?>
					<a href="<?php echo site_url();?>/dosen" class="btn btn-danger"> BATAL</a>
					<?php echo form_close(); ?>
					</div>
					</div>
					</div>

				</div>
			</div>
          </div>

	
</body>
</html>