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
	
	public function getProjectDetails($projName){
	    
	    $query = "SELECT * FROM tti_project A INNER JOIN tti_project_category B ON A.PCat_ID = B.PC_ID WHERE A.project_status = :status AND B.cat_slug = :catslug";
	    
	    $param[':status'] = 1;
	    $param[':catslug'] = $projName;
	    
	    $result = $this->conn->query($query, $param);

		return ($result) ? $result : array();
	    
	}
	
}