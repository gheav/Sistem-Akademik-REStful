<!DOCTYPE HTML>
<html>
<head>
<title>Mata Kuliah</title>
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
		<h3 class="typo1">Daftar Mata Kuliah</h3>
		
	
	<!--table-->
	
  <a class="btn btn-primary" href="<?php echo site_url('matakuliah/create'); ?>">Tambah Mata Kuliah</a>
		<hr>
  <div class="bs-example" data-example-id="simple-table">
	  <?php echo $this->session->flashdata('hasil'); ?>
	  <table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Mata Kuliah</th>
				<th>NAMA</th>
				<th>Jumlah SKS</th>
				<th>Singkatan</th>
				<th>Semester</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			  </tr>
      </thead>
      <tbody>
<?php
    foreach ($matakuliah as $mk){
        echo "<tr>
              <td></td>
              <td>$mk->kode_makul</td>
              <td>$mk->nama_makul</td>
              <td>$mk->sks SKS</td>
            
              <td>$mk->singkatan</td>
              <td>Semester $mk->semester</td>
              <td>$mk->nama_jurusan</td>
          
              <td>".anchor('matakuliah/edit/'.$mk->kode_makul,'<button class="btn btn-primary">Edit</button>')."
                  ".anchor('matakuliah/delete/'.$mk->kode_makul,'<button class="btn btn-danger">Delete</button>')."
				  ".anchor('matakuliah/pilih_dosen/'.$mk->kode_makul,'| <button class="btn btn-success">Pilih Dosen	</button>')."
				</td>
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