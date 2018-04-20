<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class mahasiswa extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data mahasiswa
    function index_get() {
		
        $nim = $this->get('nim');
        if ($nim == '') {
		$this->db->join('prodi', 'mahasiswa.prodi_kode = prodi.kode');
           $mahasiswa = $this->db->get('mahasiswa')->result();


        } else {
            $this->db->where('nim', $nim);
        
           $mahasiswa = $this->db->get('mahasiswa')->result();
           
			
        }
        $this->response($mahasiswa, 200);
    }
 
    // insert new data to mahasiswa
    function index_post() {
        $data = array(
                'nim'       	=>  $this->input->post('nim'),
                'nama'     		=>  $this->input->post('nama'),
                'prodi_kode'	=>  $this->input->post('prodi_kode'),                
                'tempat_lahir'	=>  $this->input->post('tempat_lahir'),
                'tanggal_lahir'=>  $this->input->post('tanggal_lahir'),
                
                'jenis_kelamin' =>  $this->input->post('jenis_kelamin'),
                'tahun_masuk'	=>  $this->input->post('tahun_masuk'),
                'alamat'    	=>  $this->input->post('alamat')
		);
        $insert = $this->db->insert('mahasiswa', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
		
    }
 
    // update data mahasiswa
    function index_put() {
		
        $nim = $this->put('nim');
        $data = array(
                'nim'			=>  $this->put('nim'),
                'nama'     		=>  $this->put('nama'),
                'prodi_kode'	=>  $this->put('prodi_kode'),                
                'tempat_lahir'	=>  $this->put('tempat_lahir'),
                'tanggal_lahir'=>  $this->put('tanggal_lahir'),
                
                'jenis_kelamin' =>  $this->put('jenis_kelamin'),
                'tahun_masuk'	=>  $this->put('tahun_masuk'),
                'alamat'    	=>  $this->put('alamat')
		);
        $this->db->where('nim', $nim);
        $update = $this->db->update('mahasiswa', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete mahasiswa
    function index_delete() {
        $nim = $this->delete('nim');
        $this->db->where('nim', $nim);
        $delete = $this->db->delete('mahasiswa');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}