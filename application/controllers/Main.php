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
		$data['products'] = $this->getProducts();
		
		//$this->load->view('layouts/header', $data);
		$this->load->view('home',$data);
		//$this->load->view('layouts/footer');
	}
	
	public function policyCookie(){
	    
	    $data['page'] = 'Cookie Policy';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('cookie-policy');
		$this->load->view('layouts/footer');
	}
	
	public function companyOverview(){
	    
	    $data['page'] = 'About Us';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('company-overview');
		$this->load->view('layouts/footer');
	}
	
	public function missionVision(){
	    
	    $data['page'] = 'About Us';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('mission-vision');
		$this->load->view('layouts/footer');
	}
	
	public function qualityPolicy(){
	    
	    $data['page'] = 'About Us';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('quality-policy');
		$this->load->view('layouts/footer');
	}
	
	
	
	public function getProjects(){
	    
	    $projName = $this->uri->segment(2);
	    $data['page'] = 'Projects';
	    
	    $data['title'] = strtoupper(str_replace("-"," ",$projName));
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();
	    
	    $data['project_details'] = $this->mmain->getProjectDetails($projName);

	    $this->load->view('layouts/header',$data);
		$this->load->view('projects');
		$this->load->view('layouts/footer');
	}
	
	public function getCareers(){
	    
	    $data['page'] = 'Careers';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();
	    $data['careers'] = $this->mmain->getCareers();

	    $this->load->view('layouts/header',$data);
		$this->load->view('careers');
		$this->load->view('layouts/footer');
	}
	
	public function getCareerDetails(){
	    
	    $careerID = $this->uri->segment(2);
	    $data['page'] = 'Careers';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();
	    
	    $careerDetails = $this->mmain->getCareerDetails($careerID);
	    foreach($careerDetails as $cd){
	        $data['title'] = $cd['c_title'];
	        $data['description'] = $cd['c_description'];
	        $data['overview'] = explode("|",$cd['c_overview']);
	        $data['qualifications'] = explode("|",$cd['c_qualifications']);
	        $data['location'] = $cd['c_location'];
	        $data['type'] = $cd['c_type'];
	        $data['dateadded'] = $cd['c_dateadded'];
	    }
	    
	    $this->load->view('layouts/header',$data);
		$this->load->view('career-details');
		$this->load->view('layouts/footer');
	    
	}
	
	public function contactUs(){
	    
	    $data['page'] = 'Contact Us';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();

	    $this->load->view('layouts/header',$data);
		$this->load->view('contact-us');
		$this->load->view('layouts/footer');
	}
	
	
	public function getProductDetails(){
	    
	    $data['product_slug'] = $this->uri->segment(2);
	    
	    $data['page'] = 'Products';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();
        
        $data['product_title'] = $this->mmain->getProductTitle($data['product_slug']);
        
	    $this->load->view('layouts/header',$data);
		$this->load->view('products');
		$this->load->view('layouts/footer');
	}
	
	public function getSubProductDetails(){
	    
	    $data['subproduct_slug'] = $this->uri->segment(3);
	    
	    $data['page'] = 'Products';
	    $data['projects'] = $this->mmain->getProjects();
	    $data['products'] = $this->getProducts();
        
        $data['subproduct_title'] = $this->mmain->getSubProductTitle($data['subproduct_slug']);
        
	    $this->load->view('layouts/header',$data);
		$this->load->view('subproducts');
		$this->load->view('layouts/footer');
	}
	
	/*get products*/
	public function getProducts(){
	    
	    $productArray = [];
	    $products = $this->mmain->getProducts();
	    
	    foreach($products as $p){
	        $productArray[$p['product_slug']]['name'] = $p['product_name'];
	        if($p['PCS_ID'] != ''){
	            $productArray[$p['product_slug']]['sub'][$p['subproduct_slug']]['name'] = $p['subproduct_name'];
	        }
	    }
	    
	    return $productArray;
	}


}