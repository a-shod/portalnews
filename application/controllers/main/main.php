<?php

/*
 * Revision History
 * 1.0.0 - redirect to view
 */

/**
 * Main controller
 * @author Ashod
 * @version 1.0.0 - August 14, 2014
 * @see CI_Controller
 */
class Main extends CI_Controller {
	
	const VIEW = "main/main_view.php";
	
	/**
	 * Execute first, redirect to this view
	 * @author Ashod
	 * @since 1.0.0
	 * @version 1.1.0 - add url helper to call base_url() function for bootstrap
	 */
	public function index(){
		$this->load->helper('url');
		$this->load->view(SELF::VIEW);
	}//end index function
	
}//end class