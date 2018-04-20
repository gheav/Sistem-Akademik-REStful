<!DOCTYPE HTML>
<html>
<head>
<title>Mahasiswa</title>
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
	
	<div class="page">
		<h3 class="typo1">Daftar Mahasiswa</h3>
		
	
	<!--table-->
	
  <a class="btn btn-primary" href="<?php echo site_url('mahasiswa/create'); ?>">Tambah Mahasiswa</a>
		<hr>
  <div class="bs-example" data-example-id="simple-table">
	  <?php echo $this->session->flashdata('hasil'); ?>
	  <table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>NIM</th>
				<th>NAMA</th><th>Tempat, Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>JURUSAN</th>
				<th>Tahun Masuk</th>
				<th>Aksi</th>
			  </tr>
      </thead>
      <tbody>
         <?php
    foreach ($mahasiswa as $m){
        echo "<tr>
              <td></td>
              <td>$m->nim</td>
              <td>$m->nama</td><td>$m->tempat_lahir, $m->tanggal_lahir</td>
              <td>$m->jenis_kelamin</td>
			  <td>$m->nama_jurusan</td>
             <td>$m->tahun_masuk</td>
              <td>".anchor('mahasiswa/edit/'.$m->nim,'<button class="btn btn-primary">Edit</button>')."
                  ".anchor('mahasiswa/delete/'.$m->nim,'<button class="btn btn-danger">Delete</button>')."</td>
              </tr>";
    }
    ?>
      </tbody>
    </table>
  </div><!-- /example -->
	<!--//table-->

	
	
</div>
</div>
<!--short codes end here-->

</body>
</html>