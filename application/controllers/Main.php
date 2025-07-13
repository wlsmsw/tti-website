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
		$this->load->view('home',$data);
		//$this->load->view('layouts/footer');
	}
	
	public function about_us(){
	    
	    $data['page'] = 'About Us';
	    
	    $this->load->view('layouts/header',$data);
		$this->load->view('about_us');
		$this->load->view('layouts/footer');
	}


}