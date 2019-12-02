<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InitController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function seccion()
	{
		//print( "<pre>" . print_r( $this->uri, TRUE) . "</pre>");
		//
		
		print_r ( "Sección: " . $this->uri->segment(1));
		echo "<br>";

		if ( null !==  $this->uri->segment(2))
		{
			print_r ( $this->uri->segment(2));
		echo "<br>";
		}

		die;
	}

	
	
}
