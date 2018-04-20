<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class krs extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data krs
    function index_get() {
        $id_krs = $this->get('id_krs');
        if ($id_krs == '') {
			$this->db->join('mahasiswa', 'mahasiswa.nim = krs.nim ');
			$this->db->join('dosen_matakuliah', ' dosen_matakuliah.id_dos_mk = krs.dosen_mk_id ');
			$this->db->join('dosen', 'dosen_matakuliah.dosen_npk = dosen.npk ');
			$this->db->join('matakuliah', 'dosen_matakuliah.matakuliah_kode = matakuliah.kode_makul ');
			$this->db->join('prodi', 'mahasiswa.prodi_kode = prodi.kode');
			
			
            $krs = $this->db->get('krs')->result();
           
        } else {
            $this->db->where('id_krs', $id_krs);
            $krs = $this->db->get('krs')->result();
           
			
        }
        $this->response($krs, 200);
    }
 
    // insert new data to krs
    function index_post() {
        $data = array(
               'id'       =>  $this->input->post('id'),
                'nim'      =>  $this->input->post('nim'),
                'dosen_mk_id'=>  $this->input->post('dosen_mk_id'),
                'accept'=>  $this->input->post('accept'),
                'tahun_ajaran'    =>  $this->input->post('tahun_ajaran')
			);
        $insert = $this->db->insert('krs', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
		
    }
 
    // update data krs
    function index_put() {
        $id_krs = $this->put('id_krs');
        $data = array(
           		'id_krs'      =>  $this->put('id_krs'),
                'nama'      =>  $this->put('nama'),
                'sks'		=>  $this->put('sks'),
                'singkatan' =>  $this->put('singkatan'),
                'semester'  =>  $this->put('semester'),
                'prodi_id_krs' =>  $this->put('prodi_id_krs')
		);
        $this->db->where('id_krs', $id_krs);
        $update = $this->db->update('krs', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete krs
    function index_delete() {
        $id_krs = $this->delete('id_krs');
        $this->db->where('id_krs', $id_krs);
        $delete = $this->db->delete('krs');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}