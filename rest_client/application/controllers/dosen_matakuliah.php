<?php
Class dosen_matakuliah extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data dosen matakuliah
    function index(){
        $data['dosen_matakuliah'] = json_decode($this->curl->simple_get($this->API.'/dosen_matakuliah'));
        
        $this->load->view('matakuliah/lihat-dosen',$data);
    }
    
    // insert data dosen matakuliah
    function create(){
		 $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
		 $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
		$params = array('kode_makul'=>  $this->uri->segment(3));
        if(isset($_POST['submit'])){
            $data = array(
                'id_dos_mk' 	=>  $this->input->post('id_dos_mk'),
                'matakuliah_kode' 	=>  $this->input->post('matakuliah_kode'),
                'dosen_npk'      	=>  $this->input->post('dosen_npk'),
                'tahun_ajaran'		=>  $this->input->post('tahun_ajaran'),
                'jumlah_maksimal' 	=>  $this->input->post('jumlah_maksimal'),
				'join' 				=>  $this->input->post('join')
			);
            $insert =  $this->curl->simple_post($this->API.'/dosen_matakuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('matakuliah');
			$params = array('kode_makul'=>  $this->uri->segment(3));
        }else{
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $data['dosen'] = json_decode($this->curl->simple_get($this->API.'/dosen'));
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
			$params = array('kode_makul'=>  $this->uri->segment(3));
            $this->load->view('matakuliah/tambah-dosen',$data);
        }
    }
    
    // edit data matakuliah
    function edit(){
		 $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
        if(isset($_POST['submit'])){
            $data = array(
                'kode_makul'      =>  $this->input->post('kode_makul'),
                'nama_makul'      =>  $this->input->post('nama_makul'),
                'sks'		=>  $this->input->post('sks'),
                'singkatan' =>  $this->input->post('singkatan'),
				'semester' =>  $this->input->post('semester'),
                'prodi_kode' =>  $this->input->post('prodi_kode'));
            $update =  $this->curl->simple_put($this->API.'/matakuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('matakuliah');
        }else{
          $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $params = array('kode_makul'=>  $this->uri->segment(3));
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah',$params));
            $this->load->view('matakuliah/edit',$data);
        }
    }
    
    // delete data dosen matakuliah
    function delete($id_dos_mk){
        if(empty($id_dos_mk)){
            redirect('matakuliah');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/dosen_matakuliah', array('id_dos_mk'=>$id_dos_mk), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('matakuliah');
        }
    }
	
	   // Pilih dosen matakuliah
    function pilih_dosen(){
		 $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
        if(isset($_POST['submit'])){
            $data = array(
                'kode_makul'      =>  $this->input->post('kode_makul'),
                'nama_makul'      =>  $this->input->post('nama_makul'),
                'sks'		=>  $this->input->post('sks'),
                'singkatan' =>  $this->input->post('singkatan'),
				'semester' =>  $this->input->post('semester'),
                'prodi_kode' =>  $this->input->post('prodi_kode'));
            $update =  $this->curl->simple_put($this->API.'/matakuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('matakuliah');
        }else{
          $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
          $data['dosen_makul'] = json_decode($this->curl->simple_get($this->API.'/dosen_makul'));
            $params = array('kode_makul'=>  $this->uri->segment(3));
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah',$params));
            $this->load->view('matakuliah/lihat-dosen',$data);
        }
    }
}