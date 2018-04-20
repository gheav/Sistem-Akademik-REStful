<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class dosen extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
 
    // show data dosen
    function index_get() {
        $npk = $this->get('npk');
        if ($npk == '') {
            $dosen = $this->db->get('dosen')->result();
        } else {
            $this->db->where('npk', $npk);
            $dosen = $this->db->get('dosen')->result();
        }
        $this->response($dosen, 200);
    }
 
    // insert new data to dosen
    function index_post() {
        $data = array(
                    'npk'           => $this->post('npk'),
                    'nama_dosen'          => $this->post('nama_dosen'),
                   	'gelar'    		=> $this->post('gelar'),
                   	'jenis_kelamin' => $this->post('jenis_kelamin'),
                    'alamat'        => $this->post('alamat'));
        $insert = $this->db->insert('dosen', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data dosen
    function index_put() {
        $npk = $this->put('npk');
        $data = array(
                    'npk'           => $this->put('npk'),
                    'nama_dosen'          => $this->put('nama_dosen'),
                   	'gelar'    		=> $this->put('gelar'),
                   //	'jenis_kelamin' => $this->post('jenis_kelamin'),
                    'alamat'        => $this->put('alamat'));
        $this->db->where('npk', $npk);
        $update = $this->db->update('dosen', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete dosen
    function index_delete() {
        $npk = $this->delete('npk');
        $this->db->where('npk', $npk);
        $delete = $this->db->delete('dosen');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}