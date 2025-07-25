<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();

		//$this->load->model('madmin');
		$this->load->model('mmain');

	}

	public function homepage(){

		$data['page'] = 'Home';
		$data['projects'] = $this->mmain->getProjects();
		
		//$this->load->view('layouts/header', $data);
		$this->load->view('home',$data);
		//$this->load->view('layouts/footer');
	}
	
	public function policyCookie(){
	    
	    $data['page'] = 'Cookie Policy';
	    $data['projects'] = $this->mmain->getProjects();

	    $this->load->view('layouts/header',$data);
		$this->load->view('cookie-policy');
		$this->load->view('layouts/footer');
	}
	
	public function companyOverview(){
	    
	    $data['page'] = 'About Us';
	    $data['projects'] = $this->mmain->getProjects();

	    $this->load->view('layouts/header',$data);
		$this->load->view('company-overview');
		$this->load->view('layouts/footer');
	}
	
	public function missionVision(){
	    
	    $data['page'] = 'About Us';
	    $data['projects'] = $this->mmain->getProjects();

	    $this->load->view('layouts/header',$data);
		$this->load->view('mission-vision');
		$this->load->view('layouts/footer');
	}
	
	public function qualityPolicy(){
	    
	    $data['page'] = 'About Us';
	    $data['projects'] = $this->mmain->getProjects();

	    $this->load->view('layouts/header',$data);
		$this->load->view('quality-policy');
		$this->load->view('layouts/footer');
	}
	
	public function contactUs(){
	    
	    $data['page'] = 'Contact Us';
	    $data['projects'] = $this->mmain->getProjects();

	    $this->load->view('layouts/header',$data);
		$this->load->view('contact-us');
		$this->load->view('layouts/footer');
	}
	
	public function getProjects(){
	    
	    $projName = $this->uri->segment(2);
	    $data['page'] = 'Projects';
	    
	    $data['title'] = strtoupper(str_replace("-"," ",$projName));
	    $data['projects'] = $this->mmain->getProjects();
	    
	    $data['project_details'] = $this->mmain->getProjectDetails($projName);

	    $this->load->view('layouts/header',$data);
		$this->load->view('projects');
		$this->load->view('layouts/footer');
	}


}