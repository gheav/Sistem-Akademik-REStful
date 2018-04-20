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
		<h3 class="typo1">Pilih Mata Kuliah</h3>
		<!--button-->
	<hr>
		
		<div class="panel panel-primary ">
			<div class="panel-heading">
              <h3 class="panel-title">Data Mata Kuliah</h3>
            </div>
            <div class="panel-body">
				<div >
			<?php echo form_open('krs/create');?>		
			
				<div class="form-horizontal" >
					<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Kode</th>
				<th>Nama Mata Kuliah</th>
				<th>Singkatan</th>
				<th>Jumlah SKS</th>
				<th>Semester</th>
				
			  </tr>
      </thead>
      <tbody>
		  
		 <input type="text" name="nim" value="<?php echo $this->uri->segment('3')  ?>" hidden>
		 <input type="text" name="tahun_ajaran" value="20151" hidden>
		 <input type="text" name="id" value="" hidden >
		 
		 <input type="text" name="accept" value="0" hidden>
         <?php
		  
    foreach ($dosen_matakuliah as $m){ ?>
        <tr>		
		<td><input type="radio" name="dosen_mk_id" value="<?php echo $m->id_dos_mk ?>"></td>
              <td><?php echo $m->kode_makul ?></td>
              
              <td><?php echo $m->nama_makul?></td>
              <td><?php echo $m->singkatan?></td>
              <td><?php echo $m->sks?></td>
              <td><?php echo $m->semester?></td>
			
            </tr>
              
   <?php  }
    ?>
		  
      </tbody>
    </table>
				<div align="right">
					<?php echo form_submit('submit','Simpan');?>
					<a href="<?php echo site_url();?>/krs" class="btn btn-danger"> BATAL</a>
					<?php echo form_close(); ?>
					</div>

				</div>
			</div>
          </div>

	
</body>
</html>