<?php

/*
 * Revision History
 * 1.0.0 - redirect to view
 */

/**
 * Bootstrap showcase controller
 * @author Ashod
 * @version 1.0.0 - August 18, 2014
 * @see CI_Controller
 */
class Main extends CI_Controller {
	
	const VIEW = "bootstrap/bootstrap_view.php";
	
	/**
	 * Execute first, redirect to this view
	 * @author Ashod
	 * @since 1.0.0
	 */
	public function index(){
		$this->load->helper('url');
		$this->load->view(SELF::VIEW);
	}//end index function
	
}//end class