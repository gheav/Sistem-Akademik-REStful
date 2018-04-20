<?php echo form_open('mahasiswa/edit');?>
<?php echo form_hidden('nim',$mahasiswa[0]->nim);?>
 
<table>
    <tr><td>NIM</td><td><?php echo form_input('',$mahasiswa[0]->nim,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$mahasiswa[0]->nama);?></td></tr>
    <tr><td>JURUSAN</td><td><?php echo form_input('jurusan');?>  </td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$mahasiswa[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>