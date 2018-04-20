<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class matakuliah extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data matakuliah
    function index_get() {
        $kode_makul = $this->get('kode_makul');
        if ($kode_makul == '') {
			$this->db->join('prodi', 'matakuliah.prodi_kode = prodi.kode');
            $matakuliah = $this->db->get('matakuliah')->result();
           
        } else {
            $this->db->where('kode_makul', $kode_makul);
            $matakuliah = $this->db->get('matakuliah')->result();
           
			
        }
        $this->response($matakuliah, 200);
    }
 
    // insert new data to matakuliah
    function index_post() {
        $data = array(
                'kode_makul'      =>  $this->input->post('kode_makul'),
                'nama_makul'      =>  $this->input->post('nama_makul'),
                'sks'		=>  $this->input->post('sks'),
                'singkatan' =>  $this->input->post('singkatan'),
                'semester' =>  $this->input->post('semester'),
                'prodi_kode' =>  $this->input->post('prodi_kode')
			);
        $insert = $this->db->insert('matakuliah', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
		
    }
 
    // update data matakuliah
    function index_put() {
        $kode_makul = $this->put('kode_makul');
        $data = array(
           		'kode_makul'      =>  $this->put('kode_makul'),
                'nama_makul'      =>  $this->put('nama_makul'),
                'sks'		=>  $this->put('sks'),
                'singkatan' =>  $this->put('singkatan'),
                'semester'  =>  $this->put('semester'),
                'prodi_kode' =>  $this->put('prodi_kode')
		);
        $this->db->where('kode_makul', $kode_makul);
        $update = $this->db->update('matakuliah', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete matakuliah
    function index_delete() {
        $kode_makul = $this->delete('kode_makul');
        $this->db->where('kode_makul', $kode_makul);
        $delete = $this->db->delete('matakuliah');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}