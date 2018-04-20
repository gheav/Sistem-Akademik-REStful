<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class dosen_matakuliah extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
 
    // show data dosen_matakuliah
    function index_get() {
        $id_dos_mk = $this->get('id_dos_mk');
		$id_makul =  $this->uri->segment('3') ;
        if ($id_dos_mk == '') {
			$this->db->join('dosen', ' dosen_matakuliah.dosen_npk = dosen.npk ','inner');
			$this->db->join('matakuliah', ' dosen_matakuliah.matakuliah_kode = matakuliah.kode_makul ');
			//$this->db->where('matakuliah_kode', $id_makul);
            $dosen_matakuliah = $this->db->get('dosen_matakuliah')->result();
        } else {
            $this->db->where('matakuliah_kode', $id_makul);
            $dosen_matakuliah = $this->db->get('dosen_matakuliah')->result();
        }
        $this->response($dosen_matakuliah, 200);
    }
 
    // insert new data to dosen_matakuliah
    function index_post() {
        $data = array(
                'id_dos_mk' 	=>  $this->input->post('id_dos_mk'),
                'matakuliah_kode' 	=>  $this->input->post('matakuliah_kode'),
                'dosen_npk'      	=>  $this->input->post('dosen_npk'),
                'tahun_ajaran'		=>  $this->input->post('tahun_ajaran'),
                'jumlah_maksimal' 	=>  $this->input->post('jumlah_maksimal'),
				'join' 				=>  $this->input->post('join')
                     );
        $insert = $this->db->insert('dosen_matakuliah', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data dosen_matakuliah
    function index_put() {
        $id_dos_mk = $this->put('id_dos_mk');
        $data = array(
                    'id_dos_mk'           => $this->put('id_dos_mk'),
                    'nama_jurusan'          => $this->put('nama'),
                   );
        $this->db->where('id_dos_mk', $id_dos_mk);
        $update = $this->db->update('dosen_matakuliah', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete dosen_matakuliah
    function index_delete() {
        $id_dos_mk = $this->delete('id_dos_mk');
        $this->db->where('id_dos_mk', $id_dos_mk);
        $delete = $this->db->delete('dosen_matakuliah');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}