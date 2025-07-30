<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mmain extends CI_Model {

	protected $_conn;

	protected $_conn_close;

	function __construct() {
		parent::__construct();
		$this->load->library('conn');

		$this->_conn = $this->conn->_conn();
		$this->_conn_close = $this->conn->_close();
	}
	
	public function getProjects(){
	    
	    $query = "SELECT cat_name,cat_slug FROM tti_project_category WHERE cat_active = :status";

		$param[':status'] = 1;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getProducts(){
	    
	    $query = "SELECT * FROM tti_product_category  A LEFT JOIN tti_subproduct B ON A.PS_ID = B.product_id WHERE product_active = :status ORDER BY A.PS_ID, B.PCS_ID";

		$param[':status'] = 1;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getProductTitle($productSlug){
	    
	    $query = "SELECT product_name FROM tti_product_category WHERE product_slug = :product_slug";

		$param[':product_slug'] = $productSlug;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result[0]['product_name'] : array();
	    
	}
	
	public function getSubProductTitle($subproductSlug){
	    
	    $query = "SELECT subproduct_name FROM tti_subproduct WHERE subproduct_slug = :subproductSlug";

		$param[':subproductSlug'] = $subproductSlug;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result[0]['subproduct_name'] : array();
	    
	}
	
	public function getProjectDetails($projName){
	    
	    $query = "SELECT * FROM tti_project A INNER JOIN tti_project_category B ON A.PCat_ID = B.PC_ID WHERE A.project_status = :status AND B.cat_slug = :catslug";
	    
	    $param[':status'] = 1;
	    $param[':catslug'] = $projName;
	    
	    $result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getCareers(){
	    
	    $query = "SELECT c_code, c_title, c_description, c_dateadded FROM tti_careers WHERE c_active = :status";

		$param[':status'] = 1;

		$result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
	public function getCareerDetails($careerID){
	    
	    $query = "SELECT * FROM tti_careers WHERE c_code = :careerID";
	    
	    $param[':careerID'] = $careerID;
	    
	    $result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
}