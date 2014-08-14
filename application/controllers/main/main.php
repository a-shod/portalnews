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
public class Main extends CI_Controller{
	
	const VIEW = "main/main_view.php";
	
	/**
	 * Execute first, redirect to this view
	 * @author Ashod
	 * @since 1.0.0
	 */
	public function index(){
		$this->load->view(SELF::VIEW);
	}//end index function
	
}//end class