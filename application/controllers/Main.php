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
	
	public function policyCookie(){
	    
	    $data['page'] = 'Cookie Policy';

	    $this->load->view('layouts/header',$data);
		$this->load->view('cookie-policy');
		$this->load->view('layouts/footer');
	}
	
	public function companyOverview(){
	    
	    $data['page'] = 'About Us';

	    $this->load->view('layouts/header',$data);
		$this->load->view('company-overview');
		$this->load->view('layouts/footer');
	}
	
	public function missionVision(){
	    
	    $data['page'] = 'About Us';

	    $this->load->view('layouts/header',$data);
		$this->load->view('mission-vision');
		$this->load->view('layouts/footer');
	}
	
	public function qualityPolicy(){
	    
	    $data['page'] = 'About Us';

	    $this->load->view('layouts/header',$data);
		$this->load->view('quality-policy');
		$this->load->view('layouts/footer');
	}


}