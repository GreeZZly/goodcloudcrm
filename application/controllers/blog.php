<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
	// function __construct()
 //    {
 //        parent::__construct();
 //        //$this->load->helper('url');        
 //        //$this->load->library('session');
 //    }
	
	
	function index()
	{	
		$this->load->view('main/htmlheader.html');
		$this->load->view('main/header');
		$this->load->view('main/menu');
		$this->load->view('main/videoblock');
		$this->load->view('main/innovation');
		$this->load->view('main/books');
		$this->load->view('main/posibility');
		$this->load->view('main/posibility_content');
		$this->load->view('main/reviews');
		$this->load->view('main/likebox');
		$this->load->view('main/counter');
		$this->load->view('main/videolesson');
		$this->load->view('main/try');
		$this->load->view('main/minimap');
		$this->load->view('main/footer');
		$this->load->view('main/htmlfooter.html');
	}
	 
}