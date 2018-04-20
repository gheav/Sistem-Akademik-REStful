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
<div class="banner1 agileits">
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
			      <h1><span class="books"></span> <a href="<?php echo site_url(); ?>">SiAkadSer</a></h1>
			    </div>
				 <div class="top-nav">
				 	 <span class="menu"> <img src="<?php echo base_url(); ?>assets/images/icon.png" alt=""></span>	
				     <nav class="cl-effect-21" id="cl-effect-21">   		       											
							<ul class="res">
								<li><a href="<?php echo site_url(); ?>" class="active">Home</a></li>
								<li><a href="<?php echo site_url(); ?>/mahasiswa">Mahasiswa</a></li>						
								<li><a href="<?php echo site_url(); ?>/dosen">Dosen</a></li>
								<li><a href="<?php echo site_url(); ?>/matakuliah">Mata Kuliah</a></li>	
								<li><a href="<?php echo site_url(); ?>/krs">KRS</a></li>						
							</ul>
						</nav>
						<!-- script-for-menu -->
										 <script>
										   $( "span.menu" ).click(function() {
											 $( "ul.res" ).slideToggle( 300, function() {
											 // Animation complete.
											  });
											 });
										</script>
						<!-- /script-for-menu -->
		
				 </div>
				<div class="clearfix"> </div>
			</div>			
	    </div>
   </div>
</div>
<!--header end here-->
<!--banner end here-->
	
<!--short codes start here-->
<div class="typrography">
	<div class="container">
	<div class="page">
		<h3 class="typo1">Tambah Data Mahasiswa</h3>
		<!--button-->
	<hr>
		
		<div class="panel panel-primary">
			<div class="panel-heading">
              <h3 class="panel-title">Data Mahasiswa</h3>
            </div>
            <div class="panel-body">
				<div class="bs-example" data-example-id="simple-horizontal-form">
					
				<form class="form-horizontal" >
					<?php echo form_open('mahasiswa/create');?>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<label for="nim" class="col-sm-1 control-label">NIM</label>
							<div class="col-sm-6">
								<?php echo form_input('nim');?>
							</div>
							</div>
						</div>
								<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<label for="inputEmail3" class="col-sm-1 control-label">Nama</label>
							<div class="col-sm-6">
								<?php echo form_input('nama');?>
							</div>
							</div>
						</div>
					<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<label for="inputEmail3" class="col-sm-1 control-label">Jurusan</label>
							<div class="col-sm-6">
								<?php echo form_input('jurusan');?>
							</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							<label for="inputEmail3" class="col-sm-1 control-label">Alamat</label>
							<div class="col-sm-6">
								<?php echo form_input('alamat');?>
							</div>
							</div>
						</div>
					  <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?>
					<?php
echo form_close();
?>
					</form>

					
</div>
			</div>
          </div>

	
</body>
</html>