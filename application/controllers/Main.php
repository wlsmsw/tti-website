<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('madmin');
		//$this->load->model('mmain');

	}

	public function homepage(){

		$data['page'] = 'Home';
		
		//$this->load->view('layouts/header', $data);
		$this->load->view('home');
		//$this->load->view('layouts/footer');
	}


}