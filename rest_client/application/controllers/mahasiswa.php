<?php
Class Mahasiswa extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data mahasiswa
    function index(){
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
        
        $this->load->view('mahasiswa/list',$data);
       
    }
    
    // insert data mahasiswa
    function create(){
		 $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
        if(isset($_POST['submit'])){
		
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'prodi_kode'=>  $this->input->post('prodi_kode'),                
                'tempat_lahir'=>  $this->input->post('tempat_lahir'),
                'tanggal_lahir'=>  $this->input->post('tanggal_lahir'),
				'jenis_kelamin'=>  $this->input->post('jenis_kelamin'),
                'tahun_masuk'=>  $this->input->post('tahun_masuk'),
                'alamat'    =>  $this->input->post('alamat')
			);
            $insert =  $this->curl->simple_post($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('mahasiswa');
        }else{
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $this->load->view('mahasiswa/create',$data);
        }

    }
    
    // edit data mahasiswa
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                 'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'prodi_kode'=>  $this->input->post('prodi_kode'),                
                'tempat_lahir'=>  $this->input->post('tempat_lahir'),
                'tanggal_lahir'=>  $this->input->post('tanggal_lahir'),
               
                'jenis_kelamin'=>  $this->input->post('jenis_kelamin'),
                'tahun_masuk'=>  $this->input->post('tahun_masuk'),
                'alamat'    =>  $this->input->post('alamat')
			);
            $update =  $this->curl->simple_put($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('mahasiswa');
        }else{
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $params = array('nim'=>  $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
            $this->load->view('mahasiswa/edit',$data);
        }
    }
    
    // delete data mahasiswa
    function delete($nim){
        if(empty($nim)){
            redirect('mahasiswa');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/mahasiswa', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('mahasiswa');
        }
    }
	

}