<?php
Class Matakuliah extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data matakuliah
    function index(){
        $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
        
        $this->load->view('matakuliah/list',$data);
    }
    
    // insert data matakuliah
    function create(){
		 $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
        if(isset($_POST['submit'])){
            $data = array(
                'kode_makul' =>  $this->input->post('kode_makul'),
                'nama_makul'      =>  $this->input->post('nama_makul'),
                'sks'		=>  $this->input->post('sks'),
                'singkatan' =>  $this->input->post('singkatan'),
				'semester' =>  $this->input->post('semester'),
                'prodi_kode' =>  $this->input->post('prodi_kode')
			);
            $insert =  $this->curl->simple_post($this->API.'/matakuliah', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('matakuliah');
        }else{
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $this->load->view('matakuliah/create',$data);
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
    
    // delete data matakuliah
    function delete($kode_makul){
        if(empty($kode_makul)){
            redirect('matakuliah');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/matakuliah', array('kode_makul'=>$kode_makul), array(CURLOPT_BUFFERSIZE => 10)); 
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
		 $data['dosen_matakuliah'] = json_decode($this->curl->simple_get($this->API.'/dosen_matakuliah'));
		$data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
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
          $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
            $params = array('kode_makul'=>  $this->uri->segment(3));
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah',$params));
            $this->load->view('matakuliah/lihat-dosen',$data);
        }
    }
}