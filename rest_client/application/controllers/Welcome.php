<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
	
		$isi['content']		= 'v_content';
		$isi['title'] 		= 'Dashboard';
		$isi['sub_title'] 	= '';
		$this->load->view('home',$isi);
	}
	

}
