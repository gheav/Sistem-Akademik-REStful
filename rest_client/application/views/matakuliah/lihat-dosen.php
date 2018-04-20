

<!DOCTYPE HTML>
<html>
<head>
<title>Tambah KRS matakuliah</title>
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
			
				<h3 class="typo1">Tambah Data Dosen Matakuliah</h3>
			
		</div>
	</div>

			<hr>
	<div class="container">
			<div class="form-horizontal">
			
							<?php echo form_hidden('kode_makul',$matakuliah[0]->kode_makul);?>
							<div class="row">
								<div class="row col-sm-7">
										<div class="form-group" >
											<div class=" col-sm-8">
												<label for="kode_makul" class="col-sm-3 control-label">Kode Makul</label>
												<div class="col-sm-8">
													<input type="text" class="form-control"<?php echo form_input('kode_makul',$matakuliah[0]->kode_makul,"disabled");?>
												</div>
											</div>
										</div>
								
											<div class="form-group">
										<div class=" col-sm-8">
											<label for="" class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" <?php echo form_input('nama',$matakuliah[0]->nama_makul);?>
											</div>
										</div>
									</div>
								</div>
										<div class="row col-sm-5">
										<div class="form-group">
									<div class=" col-sm-10">
										<label for="" class="col-sm-3 control-label">Jurusan</label>
										<div class="col-sm-7">
											<input type="text" class="form-control"<?php echo form_input('prodi_kode',$prodi[0]->nama_jurusan);?>
										</div>
									</div>
								</div>
									
								
											
							</div>
							</div>
											<hr>
<a href="<?php echo site_url(); ?>/dosen_matakuliah/create/<?php echo $matakuliah[0]->kode_makul;?>" class="btn btn-primary">Tambah Dosen Pengajar </a>

											<hr>
			<div class="panel panel-primary ">
				<div class="panel-heading">
					<h1 class="panel-title">DATA DOSEN <?php echo $matakuliah[0]->nama_makul;?></h1>
			
				</div>
				<div class="panel-body">
				<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>NID </th>
				<th>Nama Dosen</th>
				<th>Jenis Kelamin</th>
				
				<th>Aksi</th>
			  </tr>
      </thead>
      <tbody>
         <?php
    foreach ($dosen_matakuliah as $m){
        echo "<tr>
		<td></td>
              <td>$m->dosen_npk</td>
              
              <td>$m->nama_dosen</td>
              <td>$m->jenis_kelamin</td>
			
            
              <td>
                  ".anchor('dosen_matakuliah/delete/'.$m->id_dos_mk,'<button class="btn btn-danger">Hapus</button>')." </td>
              </tr>";
    }
    ?>
      </tbody>
    </table>
				</div>
			</div>
	</div>
         
	
</body>
</html>