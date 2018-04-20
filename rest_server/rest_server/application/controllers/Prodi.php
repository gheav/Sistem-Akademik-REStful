<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class prodi extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
 
    // show data prodi
    function index_get() {
        $kode = $this->get('kode');
        if ($kode == '') {
            $prodi = $this->db->get('prodi')->result();
        } else {
            $this->db->where('kode', $kode);
            $prodi = $this->db->get('prodi')->result();
        }
        $this->response($prodi, 200);
    }
 
    // insert new data to prodi
    function index_post() {
        $data = array(
                    'kode'           => $this->post('kode'),
                    'nama_jurusan'          => $this->post('nama'),
                     );
        $insert = $this->db->insert('prodi', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data prodi
    function index_put() {
        $kode = $this->put('kode');
        $data = array(
                    'kode'           => $this->put('kode'),
                    'nama_jurusan'          => $this->put('nama'),
                   );
        $this->db->where('kode', $kode);
        $update = $this->db->update('prodi', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete prodi
    function index_delete() {
        $kode = $this->delete('kode');
        $this->db->where('kode', $kode);
        $delete = $this->db->delete('prodi');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}