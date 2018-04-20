

<!DOCTYPE HTML>
<html>
<head>
<title>Tambah KRS Mahasiswa</title>
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
			
				<h3 class="typo1">Tambah Data KRS Mahasiswa</h3>
			
		</div>
	</div>

			<hr>
	<div class="container">
			<div class="form-horizontal">
			
							<?php echo form_hidden('nim',$mahasiswa[0]->nim);?>
							<div class="row">
								<div class="row col-sm-6">
										<div class="form-group" >
											<div class=" col-sm-8">
												<label for="nim" class="col-sm-3 control-label">NIM</label>
												<div class="col-sm-8">
													<input type="text" class="form-control"<?php echo form_input('nim',$mahasiswa[0]->nim,"disabled");?>
												</div>
											</div>
										</div>
								
											<div class="form-group">
										<div class=" col-sm-8">
											<label for="" class="col-sm-3 control-label">Nama</label>
											<div class="col-sm-9">
												<input type="text" class="form-control" <?php echo form_input('nama',$mahasiswa[0]->nama);?>
											</div>
										</div>
									</div>
								</div>
										<div class="row col-sm-6">
										<div class="form-group">
									<div class=" col-sm-10">
										<label for="" class="col-sm-6 control-label">Jurusan</label>
										<div class="col-sm-6">
											<input type="text" class="form-control"<?php echo form_input('prodi_kode',$prodi[0]->nama_jurusan);?>
										</div>
									</div>
								</div>
									
								<div class="form-group">
									<div class=" col-sm-10">
										<label for="" class="col-sm-6 control-label">Tahun Masuk</label>
										<div class="col-sm-6">
											<input type="text" class="form-control"<?php echo form_input('tahun_masuk',$mahasiswa[0]->tahun_masuk);	?>
										</div>
									</div>
								</div>
								</div>		
											
							</div>
							</div>
											<hr>
<a href="<?php echo site_url(); ?>/krs/create/<?php echo $mahasiswa[0]->nim;?>" class="btn btn-primary">Tambah Matakuliah</a>

<a href="" class="btn btn-success">Ajukan KRS</a>
											<hr>
			<div class="panel panel-primary ">
				<div class="panel-heading">
					<h1 class="panel-title">Data KRS <?php echo $mahasiswa[0]->nama;?></h1>
			
				</div>
				<div class="panel-body">
				<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode</th>
				<th>Mata Kuliah</th>
				<th>SKS</th>
				<th>Semester</th>
				<th>Aksi</th>
			  </tr>
      </thead>
      <tbody>
         <?php
    foreach ($krs as $m){
        echo "<tr>
		<td></td>
              <td>$m->matakuliah_kode</td>
              
              <td>$m->nama_makul</td>
              <td>$m->sks SKS</td>
              <td>Semester $m->semester</td>
			
            
              <td>
                  ".anchor('krs/delete/'.$m->id,'<button class="btn btn-danger">Hapus</button>')." </td>
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