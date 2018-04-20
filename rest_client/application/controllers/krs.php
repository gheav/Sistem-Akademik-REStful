<?php
Class Krs extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_server/index.php";
    }
    
    // menampilkan data krs
    function index(){
        $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa'));
        $this->load->view('krs/list',$data);
    }
    
    // insert data krs
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'       =>  $this->input->post('id'),
                'nim'      =>  $this->input->post('nim'),
                'dosen_mk_id'=>  $this->input->post('dosen_mk_id'),
                'accept'=>  $this->input->post('accept'),
                'tahun_ajaran'    =>  $this->input->post('tahun_ajaran'));
            $insert =  $this->curl->simple_post($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('krs');
        }else{
            $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
            $data['matakuliah'] = json_decode($this->curl->simple_get($this->API.'/matakuliah'));
            $data['dosen_matakuliah'] = json_decode($this->curl->simple_get($this->API.'/dosen_matakuliah'));
			 $params = array('nim'=>  $this->uri->segment(3));
            $this->load->view('krs/tambah-krs',$data);
        }
    }
    
    
    // edit data krs
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
                'id_jurusan'=>  $this->input->post('jurusan'),
                'alamat'    =>  $this->input->post('alamat'));
            $update =  $this->curl->simple_put($this->API.'/krs', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('krs');
        }else{
            $data['jurusan'] = json_decode($this->curl->simple_get($this->API.'/jurusan'));
            $params = array('nim'=>  $this->uri->segment(3));
            $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs',$params));
            $this->load->view('krs/edit',$data);
        }
    }
    
    // delete data krs
    function delete($nim){
        if(empty($nim)){
            redirect('krs');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/krs', array('nim'=>$nim), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('krs');
        }
    }
	
		//melihat krs
	
    function viewkrs(){
		$data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
		
   if(isset($_POST['submit'])){
            $data = array(
                 'nim'       =>  $this->input->post('nim'),
                'nama'      =>  $this->input->post('nama'),
            
			);
            $update =  $this->curl->simple_put($this->API.'/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('krs');
        }else{
            $data['krs'] = json_decode($this->curl->simple_get($this->API.'/krs'));
            $data['prodi'] = json_decode($this->curl->simple_get($this->API.'/prodi'));
            $params = array('nim'=>  $this->uri->segment(3));
            $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'/mahasiswa',$params));
            $this->load->view('krs/lihat-krs',$data);
        }

    }
}